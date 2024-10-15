<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function assignOrder(Request $request)
    {
        // Validate input
        $request->validate([
            'priority' => 'required|in:urgent,standard,low',
            'duration' => 'required|integer|min:15',
        ]);

        // Create a new order
        $order = Order::create($request->only(['priority', 'duration']));

        // Assign the order
        $assignment = $this->orderRepository->assignOrder($order);

        if ($assignment) {
            return response()->json([
                'success' => true,
                'assignment' => $assignment,
                'order' => $order,
            ]);
        } else {
            return response()->json(['success' => false, 'message' => 'No Delivery available for this priority.']);
        }
    }
}
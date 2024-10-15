<?php
namespace App\Repositories;

use App\Models\Assignment;
use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\DeliveryPersonnelRepository;

class OrderRepository implements OrderRepositoryInterface
{
    public function assignOrder(Order $order)
    {
        $deliveryPersonnelRepo = new DeliveryPersonnelRepository();
        $personnel = $deliveryPersonnelRepo->findAvailableForOrder($order->priority);

        if ($personnel) {
            $personnel->current_orders += 1;
            $personnel->save();

            Assignment::create([
                'delivery_personnel_id' => $personnel->id,
                'order_id' => $order->id,
                'assigned_at' => now()
            ]);

            $updateOrder = Order::where('id',$order->id)->update(['status'=>'Delivered']);

            return $personnel;  
        }

        return null;  
    }
}

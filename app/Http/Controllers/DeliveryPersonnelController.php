<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryPersonnel;

class DeliveryPersonnelController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'max_orders' => 'required|integer|min:1',
            'current_orders' => 'required|integer|min:0',
            'skill_level' => 'required|string|in:beginner,intermediate,expert'
        ]);

        // Create a new delivery personnel record
        $deliveryPersonnel = DeliveryPersonnel::create($validatedData);

        return response()->json([
            'success' => true,
            'data' => $deliveryPersonnel
        ], 201);
    }
}

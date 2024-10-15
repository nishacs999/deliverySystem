<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'priority' => 'urgent',
                'duration' => 30
                
            ],
            [
                'priority' => 'standard',
                'duration' => 15
            ],
            [
                'priority' => 'low',
                'duration' => 60
                
            ],
        ];
    
        foreach ($orders as $o) {
            Order::create($o);
        }
    }
}

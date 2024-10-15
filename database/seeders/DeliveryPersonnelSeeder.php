<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveryPersonnel;

class DeliveryPersonnelSeeder extends Seeder
{
    public function run()
    {
        DeliveryPersonnel::create([
            'name' => 'J',
            'max_orders' => 4,
            'current_orders' => 0,
            'skill_level' => 'expert'
        ]);

        DeliveryPersonnel::create([
            'name' => 'K',
            'max_orders' => 6,
            'current_orders' => 0,
            'skill_level' => 'intermediate'
        ]);

        DeliveryPersonnel::create([
            'name' => 'L',
            'max_orders' => 3,
            'current_orders' => 0,
            'skill_level' => 'beginner'
        ]);

        DeliveryPersonnel::create([
            'name' => 'M',
            'max_orders' => 5,
            'current_orders' => 0,
            'skill_level' => 'expert'
        ]);

        DeliveryPersonnel::create([
            'name' => 'N',
            'max_orders' => 4,
            'current_orders' => 0,
            'skill_level' => 'intermediate'
        ]);

        DeliveryPersonnel::create([
            'name' => 'O',
            'max_orders' => 2,
            'current_orders' => 0,
            'skill_level' => 'beginner'
        ]);
    }
}

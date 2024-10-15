<?php
namespace App\Repositories;

use App\Models\DeliveryPersonnel;
use DB;

class DeliveryPersonnelRepository
{
    public function findAvailableForOrder($priority)
    {
       $query = DeliveryPersonnel::whereRaw('current_orders < max_orders'); 

        if ($priority === 'urgent') {
            $query->whereIn('id', [1, 4]);
        } elseif ($priority === 'standard') {
            $query->whereIn('id', [2, 4, 5]);
        } else { 
            $query->whereIn('id', [3, 6]);
        }
        
        $availablePersonnel = $query->orderBy('current_orders')->first();
        return $availablePersonnel;
    }
}

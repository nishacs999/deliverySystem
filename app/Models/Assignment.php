<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['delivery_personnel_id', 'order_id', 'assigned_at'];

    public function deliveryPersonnel()
    {
        return $this->belongsTo(DeliveryPersonnel::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

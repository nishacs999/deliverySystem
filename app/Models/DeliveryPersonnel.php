<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryPersonnel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'skill_level', 'max_orders', 'current_orders'];

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}

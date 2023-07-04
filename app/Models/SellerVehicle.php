<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerVehicle extends Model
{
    use HasFactory;


    public function user_bidings()
    {
        return $this->hasMany(UserBidding::class, 'vehicle_id', 'id');
    }

}

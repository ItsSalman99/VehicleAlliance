<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'engine_capacity',
        'transmission_type',
        'model_id'
    ];


    public function model()
    {
        return $this->belongsTo(VehicleModel::class);
    }

}

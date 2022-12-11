<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vehicle_id',
        'vehicle_model_id'
    ];

}

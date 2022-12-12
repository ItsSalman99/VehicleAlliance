<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'min_est',
        'max_est',
        'vehicle_name',
        'model_name',
        'issue'
    ];


    // public function vehicle()
    // {
    //     return $this->belongsTo(Vehicle::class,'vehicle_id');
    // }

    // public function model()
    // {
    //     return $this->belongsTo(VehicleModel::class,'model_id');
    // }

    // public function issue()
    // {
    //     return $this->belongsTo(VehicleIssue::class,'issue_id');
    // }

}

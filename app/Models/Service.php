<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'summary',
        'description',
        'img',
        'is_active',
        'show',
        'available_stime',
        'available_etime',
        'start_available_date',
        'end_available_date'
    ];

    public function appointments()
    {
        return $this->hasMany(AppointedService::class);
    }

}

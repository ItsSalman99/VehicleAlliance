<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffServiceAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'appointments_id'
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function appointment()
    {
        return $this->belongsTo(AppointedService::class, 'appointments_id');
    }
}

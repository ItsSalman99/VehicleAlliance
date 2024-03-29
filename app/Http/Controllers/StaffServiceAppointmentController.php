<?php

namespace App\Http\Controllers;

use App\Models\StaffServiceAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\AppointedService;

class StaffServiceAppointmentController extends Controller
{
    public function index()
    {
        $appointments = StaffServiceAppointment::where('staff_id', Auth::user()->id)->get();

        return view('backend.staff-appointments.index', compact('appointments'));
    }

    public function changeStatus(Request $request, $id)
    {
        $appointments = StaffServiceAppointment::where('id', $id)->first();

        $appointment = AppointedService::where('id', $appointments->appointments_id)->first();

        if ($appointments->status == 'Pending') {
            $appointments->status = 'Accept';
            $appointment->status = 'Accept';
        } else if ($appointments->status == 'Accept') {
            $appointments->status = 'On the way';
            $appointment->status = 'On the way';
        } else if ($appointments->status == 'On the way') {
            $appointments->status = 'At Doorsteps';
            $appointment->status = 'At Doorsteps';
        } else if ($appointments->status == 'At Doorsteps') {
            $appointments->status = 'Delivered';
            $appointment->status = 'Delivered';
        } else if ($appointments->status == 'Delivered') {
            $appointments->status = 'Completed';
            $appointment->status = 'Completed';
        }

        $appointment->save();
        $appointments->save();

        toast('Appointment Status Changed!', 'success');

        return redirect()->back();
    }

    public function chancelAppointment(Request $request, $id)
    {
        $appointments = StaffServiceAppointment::where('id', $id)->first();

        $appointments->status = 'Cancel';
        $appointments->is_active = false;
        $appointments->save();

        toast('Appointment Cancelled!', 'success');

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AppointedService;
use App\Models\StaffServiceAppointment;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class AppointedServicesController extends Controller
{
    public function index()
    {
        $appointments = AppointedService::all();
        $staffs = User::where('type', 'staff')->get();

        return view('backend.appointments.index', compact('appointments'));
    }

    public function assignStaff(Request $request)
    {
        // dd($request->all());
        $assign = new StaffServiceAppointment();
        $assign->staff_id = $request->staffs;
        $assign->appointments_id = $request->appointments_id;
        $assign->is_active = true;
        $assign->save();

        toast('New Staff Assigned Successfully!', 'success');

        return redirect()->back();

    }

    //ajax
    public function getAllStaffs()
    {

        $staffs = User::where('type', 'staff')->get();

        return response()->json([
            'status' => true,
            'data' => $staffs
        ]);

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\AppointedService;
use App\Models\Estimation;
use App\Models\Order;
use App\Models\Service;
use App\Models\StaffServiceAppointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $admins  = User::where('type', 'admin')->count();
        $seller  = User::where('type', 'seller')->count();
        $buyer  = User::where('type', 'buyer')->count();
        $staff  = User::where('type', 'staff')->count();

        $services = Service::get()->take(10);
        $estimations = Estimation::get()->take(10);
        $users = User::get()->take(10);

        if (Auth::user()->type == 'seller') {
            $orders  = Order::where('seller_id', Auth::user()->id)->count();
            $orderEarned  = Order::where('seller_id', Auth::user()->id)->where('status', 'Delivered')->sum('total');
        } else if (Auth::user()->type == 'staff') {

            $appointments = AppointedService::count();
            $assigned_appointments = StaffServiceAppointment::where('staff_id', Auth::user()->id)->count();
            $earned = StaffServiceAppointment::where('staff_id', Auth::user()->id)
                ->where('status', 'Completed')
                ->get();
        } else {
            $orders  = Order::count();
            $orderEarned  = Order::sum('total');
        }

        return view('backend.index', get_defined_vars());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Estimation;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $admins  = User::where('type', 'admin')->count();
        $seller  = User::where('type', 'seller')->count();
        $buyer  = User::where('type', 'buyer')->count();
        $staff  = User::where('type', 'staff')->count();
        $orders  = Order::count();
        $orderEarned  = Order::sum('total');

        $services = Service::get()->take(10);
        $estimations = Estimation::get()->take(10);
        $users = User::get()->take(10);

        return view('backend.index', compact('admins', 'seller', 'buyer', 'staff','services', 'estimations', 'users', 'orders', 'orderEarned'));
    }
}

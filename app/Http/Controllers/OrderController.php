<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('backend.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->first();

        return view('backend.orders.show', compact('order'));
    }

}

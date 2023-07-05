<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Alert;
use App\Mail\OrderEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
      	$orders = Order::all();
      	if(Auth::user()->type == 'seller')
        {
          $orders = Order::where('seller_id', Auth::user()->id)->get();
        }

        return view('backend.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->first();

        return view('backend.orders.show', compact('order'));
    }

  	public function changeStatus($id)
    {
        $order = Order::where('id', $id)->first();

      	if($order->status == 'Pending')
        {
          	$status = 'Accepted';
            $order->status = 'Accepted';
      		$order->save();
        }
      	else if($order->status == 'Accepted'){
      	    $status = 'Mark as ready';
            $order->status = 'Mark as ready';
      		$order->save();
        }
      	else if($order->status == 'Mark as ready'){
      	    $status = 'On the way';
            $order->status = 'On the way';
      		$order->save();
        }
      	else if($order->status == 'On the way'){
      	    $status = 'Delivered';
            $order->status = 'Delivered';
      		$order->save();
        }

        $user = User::where('id', $order->user_id)->first();

        $data = [
            'title' => 'Your Order is '. $order->status . ' !',
            'name' => $user->name,
            'status' => $order->status,
            'order_items' => $order->order_items
        ];

        Mail::to($user->email)->send(new OrderEmail($data));


      	toast("Order is ". $status . ' !', "success");

        return redirect()->back();;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\UserSubscription;
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
{

    public function index()
    {
        $subscriptions = UserSubscription::all();

        return view('backend.subscription.index', compact('subscriptions'));

    }

    public function store(Request $request)
    {
        $subscription = UserSubscription::create([
            'user_id' => $request->user_id,
            'card' => $request->card,
            'name' => $request->name,
            'cvv' => $request->cvv,
            'price' => $request->price,
        ]);

        if($subscription)
        {
            return response()->json([
                'status' => true,
                'msg' => 'Subscribed Successfully!!'
            ]);
        }


        return response()->json([
            'status' => false,
            'msg' => 'Something went wrong!!'
        ]);

    }
}

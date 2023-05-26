<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{

    public function subscribe(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'card_no' => 'required',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'cvv' => 'required',
            'total' => 'required'
            // 'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        try {

            $user = User::where('id', $request->user_id)->first();

            if ($user) {
                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                $customer = \Stripe\Customer::create([
                    'name' => $user->name,
                    'email' => $user->email
                ]);

                $tokenData = \Stripe\Token::create([

                    'card' => [

                        'number' => $request->card_no,

                        'exp_month' => (int)$request->exp_month,

                        'exp_year' => (int)$request->exp_year,

                        'cvc' => $request->cvv,  //123

                    ],

                ]);

                \Stripe\Customer::createSource(
                    $customer->id,
                    ['source' => $tokenData]
                );

                $total = $request->total;

                $charge = \Stripe\Charge::create([
                    "amount" => $total * 100,
                    "currency" => "pkr",
                    "customer" => $customer->id,
                    "source" => $tokenData->card->id, // obtained with Stripe.js
                    "description" => "for subscription",
                    // 'capture' => false
                ]);

                $user->is_sub = 1;
                $user->save();

                return response()->json([
                    'status' => true,
                    'msg' => 'You have subscribed successfully!'
                ]);
            } else {

                return response()->json([
                    'status' => false,
                    'msg' => 'Invalid User!'
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
            ]);
        }
    }
}

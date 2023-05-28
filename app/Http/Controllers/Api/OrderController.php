<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function createOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'product_id' => 'required',
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
                $order = new Order();

                $order->user_id = $request->user_id;

                $order->total = $request->total;
                $order->address = $request->address;
                $order->save();


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
                    "description" => "Charge for testing customer",
                    // 'capture' => false
                ]);

                $item = new OrderItem();
                $item->order_id = $order->id;
                $item->name = $request->name;
                $item->price = $request->price;
                $item->qty = $request->qty;
                $item->product_id = $request->product_id;
                $item->save();


                return response()->json([
                    'status' => true,
                    'msg' => 'Order has been placed successfully!!'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Something went wrong!!'
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

    public function orderHistory($id)
    {

        $order = Order::where('user_id', $id)->with('order_items')->get();

        return response()->json([
            'status' => true,
            'data' => $order
        ]);

    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SellerVehicle;
use App\Models\UserBidding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleBiddingController extends Controller
{
    public function getAll()
    {
        $vehicles = SellerVehicle::where('active', 1)->get();

        return response()->json([
            'status' => true,
            'data' => $vehicles
        ]);

    }

    public function bid(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'vehicle_id' => 'required',
            'bid_price' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        $check = UserBidding::where('user_id', $request->user_id)
        ->where('vehicle_id', $request->vehicle_id)->first();

        if($check)
        {
            return response()->json([
                'status' => false,
                'msg' => 'Your request is already submitted to the seller!'
            ]);
        }

        $bid = new UserBidding();
        $bid->user_id = $request->user_id;
        $bid->vehicle_id = $request->vehicle_id;
        $bid->price = $request->price;
        $bid->phone = $request->phone;

        $bid->save();

        return response()->json([
            'status' => true,
            'msg' => 'Your request successfully submitted to the seller!'
        ]);

    }


}

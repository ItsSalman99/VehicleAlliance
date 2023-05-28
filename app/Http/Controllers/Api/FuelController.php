<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fuel;
use App\Models\UserFuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function getAll()
    {
        $fuel = Fuel::all();

        return response()->json([
            'status' => true,
            'fuels' => $fuel
        ]);
    }

    public function store(Request $request)
    {

        try {
            $fuelRequest = new UserFuel();

            $fuelRequest->user_id = $request->user_id;
            $fuelRequest->fuel_id = $request->fuel_id;
            $fuelRequest->contact = $request->contact;
            $fuelRequest->address = $request->address;
            $fuelRequest->note = $request->note;

            $fuelRequest->save();

            return response()->json([
                'status' => true,
                'msg' => 'Fuel Request Submitted'
            ]);
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json([
                'status' => true,
                'msg' => $th->getMessage()
            ]);
        }
    }
}

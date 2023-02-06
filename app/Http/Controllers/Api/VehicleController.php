<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function getAll()
    {
        $vehicles = Vehicle::get();

        $data = array();

        foreach ($vehicles as $key => $value) {
            $data[] = array(
                'key' => $key+1,
                'value' => $value->name
            );
        }

        return response()->json([
            'status' => true,
            'vehicles' => $data
        ]);


    }
}

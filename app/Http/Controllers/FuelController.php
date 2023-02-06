<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
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
}

<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Alert;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::paginate(8);

        return view('backend.estimation.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $models = VehicleModel::get();

        return view('backend.estimation.vehicles.create', compact('models'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'engine_capacity' => 'required',
            'transmission_type' => 'required',
            'model' => 'required'
        ]);

        Vehicle::create([
            'name' => $request->name,
            'price' => $request->price,
            'engine_capacity' => $request->engine_capacity,
            'transmission_type' => $request->transmission_type,
            'model_id' => $request->model
        ]);

        Alert::success("Vehicle Added In Estimation Successfully!", "New vehicle details added in estimation.");

        return redirect()->back();

    }
}

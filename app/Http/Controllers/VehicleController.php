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

    public function delete($id)
    {

        $vehicle = Vehicle::where('id', $id)->first();

        $vehicle->delete();

        Alert::success("Vehicle Estimation Details Deleted Successfully!", "Vehicle estimation details deleted successfully!");

        return redirect()->back();

    }

    public function edit($id)
    {

        $vehicle = Vehicle::where('id', $id)->first();
        $models = VehicleModel::get();

        return view('backend.estimation.vehicles.edit', compact('vehicle', 'models'));

    }

    public function update(Request $request, $id)
    {

        dd($request->all());

        $vehicle = Vehicle::where('id', $id)->first();

        $vehicle->name = $request->name;
        $vehicle->price = $request->price;
        $vehicle->engine_capacity = $request->engine_capacity;
        $vehicle->transmission_type = $request->transmission_type;
        $vehicle->model_id = $request->model;


        Alert::success("Vehicle Estimation Details Deleted Successfully!", "Vehicle estimation details deleted successfully!");

        return redirect()->back();

    }

}

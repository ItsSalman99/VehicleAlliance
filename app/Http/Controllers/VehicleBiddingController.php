<?php

namespace App\Http\Controllers;

use App\Models\SellerVehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class VehicleBiddingController extends Controller
{
    public function index()
    {
        $vehicles = SellerVehicle::where('seller_id', Auth::user()->id)->get();

        return view('backend.biddings.index', compact('vehicles'));

    }

    public function create()
    {
        return view('backend.biddings.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $vehicle = new SellerVehicle();

        if ($request->hasFile('img')) {

            $filename = $request->name . '_'  . $request->img->getClientOriginalName();

            $request->img->move(public_path('assets/frontend/img/uploads/products/'), $filename);


            $vehicle->img = 'assets/frontend/img/uploads/products/' . $filename;
        }

        $vehicle->seller_id = Auth::user()->id;
        $vehicle->name = $request->name;
        $vehicle->min_price = $request->min_price;
        $vehicle->max_price = $request->max_price;
        $vehicle->year_model = $request->model;
        $vehicle->engine_capacity = $request->engine_capacity;
        $vehicle->transmission_type = $request->transmission_type;
        $vehicle->description = $request->description;

        $vehicle->save();

        Alert::success('New Vehicle Added For Sell', 'New Vehicle Added For Sell');

        return redirect()->route('biddings.index');

    }

}

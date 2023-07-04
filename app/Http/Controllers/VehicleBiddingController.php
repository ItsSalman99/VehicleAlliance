<?php

namespace App\Http\Controllers;

use App\Models\SellerVehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\UserBidding;

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

    public function edit($id)
    {

        $vehicle = SellerVehicle::where('id', $id)->first();

        return view('backend.biddings.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $vehicle = SellerVehicle::where('id', $id)->first();

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

        Alert::success('Vehicle Updated Successfully', 'Vehicle Updated Successfully');

        return redirect()->route('biddings.index');
    }

    public function show($id)
    {
        $vehicle = SellerVehicle::where('id', $id)->first();

        return view('backend.biddings.show', get_defined_vars());
    }

    public function delete($id)
    {

        $vehicle = SellerVehicle::where('id', $id)->first();

        $vehicle->delete();

        return redirect()->route('biddings.index');
    }


    public function confirmed($id)
    {
        $bid = UserBidding::where('id', $id)->first();
        $bid->confirmed = 1;
        $bid->save();


        $vehicle = SellerVehicle::where('id', $id)->first();
        $vehicle->active = 1;
        $vehicle->save();


        return view('backend.biddings.show', get_defined_vars());
    }

}

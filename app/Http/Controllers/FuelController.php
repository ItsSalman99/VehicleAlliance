<?php

namespace App\Http\Controllers;
use App\Models\Fuel;
use App\Models\UserFuel;
use Illuminate\Http\Request;
use Alert;


class FuelController extends Controller
{
  
  	public function index()
    {
      	$fuels = Fuel::all();
      
      	return view('backend.fuel.index', compact('fuels'));
      
    }
  
  	public function create()
    {
      	return view('backend.fuel.create');
    }
  
  	public function store(Request $request)
    {
      	$fuel = new Fuel();
      
      	$fuel->name = $request->name;
      	$fuel->price = $request->price;
      
      	$fuel->save();
      
      	Alert::success("New Fuel Added!", "New fuel added successfully!");
      
      	return redirect()->route('fuels.index');
      
    }
  
  
  	public function fuelRequest()
    {
      	$fuelrequests = UserFuel::all();
      
      	return view('backend.fuel.requests.index', compact('fuelrequests'));
      
    }
  
  	public function deliveredRequestStatus($id)
    {
      	
      	$fuelrequests = UserFuel::where('id', $id)->first();
      	$fuelrequests->status = 'Delivered';
      	$fuelrequests->save();
      	
      	Alert::success("Fuel Delivered!", "Fuel delivered successfully!");
        return redirect()->back();
      
    }
  
  	public function cancelRequestStatus($id)
    {
      	
      	$fuelrequests = UserFuel::where('id', $id)->first();
      	$fuelrequests->status = 'Cancelled';
      	$fuelrequests->save();
      	
      	Alert::success("Fuel Request Canceled!", "Fuel request canceled successfully!");
        
        return redirect()->back();
      
    }
  
  	public function delete($id)
    {
      	
      	$fuelrequests = Fuel::where('id', $id)->first();
      	$fuelrequests->delete();
      	$fuelrequests->save();
      	
      	Alert::success("Fuel Deleted!", "Fuel deleted successfully!");
        
        return redirect()->back();
      
    }
      
  
}

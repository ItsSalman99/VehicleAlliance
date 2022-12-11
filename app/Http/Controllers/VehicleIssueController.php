<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleIssue;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Alert;

class VehicleIssueController extends Controller
{

    public function index()
    {

        $issues = VehicleIssue::paginate(8);

        return view('backend.estimation.vehicles.issues.index', compact('issues'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $models = VehicleModel::all();

        return view('backend.estimation.vehicles.issues.create', compact('vehicles', 'models'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required'
        ]);

        VehicleIssue::create([
            'name' => $request->name
        ]);

        Alert::success("Issue added successfully!", "New issue added successfully for estimation.");

        return redirect()->back();

    }

}

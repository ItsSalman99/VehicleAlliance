<?php

namespace App\Http\Controllers;

use App\Models\Estimation;
use App\Models\Vehicle;
use App\Models\VehicleIssue;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Alert;

class EstimationController extends Controller
{

    public function index()
    {

        $estimations = Estimation::paginate(8);

        return view('backend.estimation.index', compact('estimations'));
    }

    public function createIssueEstimation()
    {
        $vehicles = Vehicle::all();
        $models = VehicleModel::all();
        $issues = VehicleIssue::all();

        return view('backend.estimation.create', compact('issues', 'vehicles', 'models'));
    }

    public function storeIssueEstimation(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'vehicle' => 'required',
            'model' => 'required',
            'issue' => 'required',
            'minprice' => 'required',
            'maxprice' => 'required'
        ]);

        Estimation::create([
            'type' => 'service',
            'min_est' => $request->minprice,
            'max_est' => $request->maxprice,
            'vehicle_id' => $request->vehicle,
            'model_id' => $request->model,
            'issue_id' => $request->issue
        ]);

        Alert::success("New estimation added successfully!", "New estimation added.");


        return redirect()->back();

    }

    public function delete($id)
    {
        $estimation = Estimation::where('id', $id)->first();
        $estimation->delete();

        Alert::success("Estimation deleted successfully!", "Estimation deleted successfully.");


        return redirect()->back();

    }

}

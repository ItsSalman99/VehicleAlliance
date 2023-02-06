<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estimation;
use App\Models\Vehicle;
use App\Models\VehicleIssue;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class EstimationController extends Controller
{
    public function getServiceEstimate($vehicle, $model, $issue)
    {
        $vehicles = Vehicle::where('name', $vehicle)->first();
        $models = VehicleModel::where('model', $model)->first();
        $issues = VehicleIssue::where('name', $issue)->first();

        $estimation = Estimation::where('type', 'service')
        ->where('vehicle_id', $vehicles->id)
        ->where('model_id', $models->id)
        ->where('issue_id', $issues->id)
        ->first();

        return response()->json([
            'status' => 200,
            'estimations' => $estimation
        ]);

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estimation;
use Illuminate\Http\Request;

class EstimationController extends Controller
{
    public function getServiceEstimate()
    {
        $estimation = Estimation::where('type', 'service')->get();

        return response()->json([
            'status' => 200,
            'estimations' => $estimation
        ]);

    }
}

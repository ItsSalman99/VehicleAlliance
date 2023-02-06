<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VehicleIssue;
use Illuminate\Http\Request;

class VehicleIssueController extends Controller
{
    public function getAll()
    {

        $issues = VehicleIssue::all();

        $data = array();


        foreach ($issues as $key => $value) {
            $data[] = array(
                'key' => $key+1,
                'value' => $value->name
            );
        }

        return response()->json([
            'status' => true,
            'issues' => $data
        ]);
    }
}

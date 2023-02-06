<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{

    public function getAll()
    {

        $models = VehicleModel::get();

        $data = array();

        foreach ($models as $key => $value) {
            $data[] = array(
                'key' => $key+1,
                'value' => $value->model
            );
        }

        return response()->json([
            'status' => true,
            'models' => $data
        ]);

    }

}

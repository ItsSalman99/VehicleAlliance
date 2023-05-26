<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function getAll()
    {
        $slider = ApplicationSlider::get();
        $data = array();

        if ($slider) {
            # code...
            foreach ($slider as $key => $value) {
                array_push($data, $value->img);
            }
            return response()->json([
                'status' => 200,
                'data' => $slider,
            ]);
        }

        return response()->json([
            'status' => 500,
            'data' => $slider,
        ]);

    }
}

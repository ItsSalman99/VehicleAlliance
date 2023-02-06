<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function getAll()
    {
        $slider = ApplicationSlider::all();

        if ($slider) {
            # code...
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

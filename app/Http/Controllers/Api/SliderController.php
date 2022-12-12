<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function getAll()
    {
        $slider = ApplicationSlider::where('id', 1)->first();

        if ($slider) {
            # code...
            return response()->json([
                'status' => 200,
                'img1' => $slider->img1,
                'img2' => $slider->img2,
                'img3' => $slider->img3
            ]);
        }

        return response()->json([
            'status' => 500,
            'img1' => '',
            'img2' => '',
            'img3' => ''
        ]);

    }
}

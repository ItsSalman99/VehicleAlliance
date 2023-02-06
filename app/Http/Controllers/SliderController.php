<?php

namespace App\Http\Controllers;

use App\Models\ApplicationSlider;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\URL;

class SliderController extends Controller
{
    public function create()
    {
        $slider = ApplicationSlider::where('id', 1)->get();

        return view('backend.slider.create', compact('slider'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('imgs')) {

            foreach ($request->file('imgs') as $key => $img) {

                // dd($img);

                $image = URL::to('/') . '/assets/frontend/img/uploads/slider/' . '_'  . $img->getClientOriginalName();

                $img->move(public_path('assets/frontend/img/uploads/slider/'), $image);


                $slider = new ApplicationSlider();

                $slider->img = $image;

                $slider->save();
            }
        }


        toast("Slider Updated!", "success");

        return redirect()->back();
    }
}

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
        $slider = ApplicationSlider::where('id', 1)->first();

        return view('backend.slider.create', compact('slider'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        if ($request->hasFile('img1')) {

            $img1 = URL::to('/') . '/assets/frontend/img/uploads/slider/' . '_'  . $request->img1->getClientOriginalName();

            $request->img1->move(public_path('assets/frontend/img/uploads/slider/'), $img1);
        }
        if ($request->hasFile('img2')) {

            $img2 = URL::to('/') . '/assets/frontend/img/uploads/slider/' . '_'  . $request->img2->getClientOriginalName();

            $request->img2->move(public_path('assets/frontend/img/uploads/slider/'), $img2);
        }
        if ($request->hasFile('img3')) {

            $img3 = URL::to('/') . '/assets/frontend/img/uploads/slider/' . '_'  . $request->img3->getClientOriginalName();

            $request->img3->move(public_path('assets/frontend/img/uploads/slider/'), $img3);
        }

        if ($request->state == 'store') {
            # code...

            $slider = new ApplicationSlider();

            $slider->img1 = $img1;
            $slider->img2 = $img2;
            $slider->img3 = $img3;

            $slider->save();
        }
        else{
            $slider = ApplicationSlider::where('id', 1)->first();

            if ($img1) {
                # code...
                $slider->img1 = $img1;
            }
            if ($img2) {
                # code...
                $slider->img2 = $img2;
            }
            if ($img3) {
                # code...
                $slider->img3 = $img3;
            }


            $slider->save();
        }

        toast("Slider Updated!", "success");

        return redirect()->back();


    }

}

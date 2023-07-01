<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::all();

        return view('backend.rewards.index', compact('rewards'));

    }

    public function create()
    {
        return view('backend.rewards.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $length = 4;

        $original_string = array_merge(range(0,29), range('a','z'), range('A', 'Z'));
        $original_string = implode("", $original_string);
        $random = substr(str_shuffle($original_string), 0, $length);

        $reward = new Reward();

        $reward->name = $request->name;
        $reward->discount = $request->discount;
        $reward->voucher = $random . rand(00, 99);
        $reward->save();


        toast("New Reward Added Successfully!", "success");

        return redirect()->back();
    }

}

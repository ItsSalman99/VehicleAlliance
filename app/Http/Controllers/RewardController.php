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
        $reward = new Reward();

        $reward->name = $request->name;
        $reward->save();


        toast("New Reward Added Successfully!", "success");

        return redirect()->back();
    }

}

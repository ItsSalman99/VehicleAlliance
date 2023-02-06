<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function create()
    {
        $shop = Shop::where('seller_id', Auth::user()->id)->first();
        // dd($shop);
        return view('backend.seller.shop.create', compact('shop'));
    }

    public function store(Request $request)
    {

        if ($request->has('logo')) {

            $filename = $request->name . '_'  . $request->logo->getClientOriginalName();

            $request->logo->move(public_path('assets/frontend/img/uploads/shops/'), $filename);

        }

        $shop = Shop::create([
            'name' => $request->name,
            'logo' => $filename,
            'address' => $request->address,
            'seller_id' => Auth::user()->id
        ]);

        if ($shop) {

            toast("Kudos! Your Shop has been created!", "success");

            return redirect()->back();

        }

    }

}

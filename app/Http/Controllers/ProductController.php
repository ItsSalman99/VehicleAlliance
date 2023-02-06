<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Alert;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('seller_id', Auth::user()->id)->get();

        return view('backend.seller.products.index', compact('products'));
    }

    public function create()
    {
        return view('backend.seller.products.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        if ($request->in_stock == "on") {
            # code...
            $product->in_stock = 1;
        }
        if ($request->hasFile('img')) {

            $filename = $request->name . '_'  . $request->img->getClientOriginalName();

            $request->img->move(public_path('assets/frontend/img/uploads/products/'), $filename);
        }
        $product->img = 'assets/frontend/img/uploads/products/' . $filename;
        // dd(Auth::user()->id);
        $product->seller_id = Auth::user()->id;
        $shop = Shop::where('seller_id', Auth::user()->id)->first();
        $product->shop_id = $shop->id;

        $product->save();

        toast("New Product Has Been Added!");

        return redirect()->back();
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->first();

        $product->delete();

        toast("Product Has Been Deleted!");

        return redirect()->back();
    }

    public function edit($id)
    {

        $product = Product::where('id', $id)->first();

        return view('backend.seller.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $product = Product::where('id', $id)->first();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->in_stock == "on") {
            # code...
            $product->in_stock = 1;
        }
        if ($request->hasFile('img')) {

            $filename = $request->name . '_'  . $request->img->getClientOriginalName();

            $request->img->move(public_path('assets/frontend/img/uploads/products/'), $filename);
        }
        $product->img = 'assets/frontend/img/uploads/products/' . $filename;
        // dd(Auth::user()->id);
        $product->seller_id = Auth::user()->id;
        $shop = Shop::where('seller_id', Auth::user()->id)->first();
        $product->shop_id = $shop->id;

        $product->save();

        toast("New Product Has Been Updated!!");

        return redirect()->back();

    }
}

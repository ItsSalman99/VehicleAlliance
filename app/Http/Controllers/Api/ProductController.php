<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::where('in_stock', 1)->get();

        return response()->json([
            'status' => true,
            'data' => $products
        ]);
    }
}

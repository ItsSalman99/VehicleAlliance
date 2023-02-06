<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::all();

        return response()->json([
            'status' => true,
            'data' => $products
        ]);
    }
}

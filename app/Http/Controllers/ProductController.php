<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('productlist', compact('products'));
    }

    //menunjukkan data produk yang populer (banyak dilihat)
    public function popular()
    {
        $products = Product::orderBy('rate')->take(8)->get(); // Get top 8
        return view('welcome', compact('products'));
    }

    // PERBAIKAN: Method detailsproduct yang benar
    public function detailsproduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        return view('detailproduct', compact('product'));
    }
}
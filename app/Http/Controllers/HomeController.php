<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
   public function index()
{
    $products = Product::where('status', true)
                ->latest()  // berdasarkan created_at
                ->take(6)
                ->get();

    return view('home', compact('products'));
}
}

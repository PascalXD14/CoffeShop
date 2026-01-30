<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->latest()->get();
        return view('user.menu.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('user.menu.menudetail', compact('product'));
    }
}

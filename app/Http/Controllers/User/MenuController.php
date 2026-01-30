<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MenuController extends Controller
{
    public function index()
    {
        // Ambil semua menu yang aktif
        $products = Product::where('status', 1)->latest()->get();

        return view('user.menu.index', compact('products'));
    }

    public function show($id)
        {
            $product = Product::findOrFail($id);
            return view('menu.detail', compact('product'));
        }

}

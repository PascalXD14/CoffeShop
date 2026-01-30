<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // halaman status pesanan (LIST SEMUA)
    public function index()
    {
        $orders = Order::with('product')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.order.status', compact('orders'));
    }

    // detail order
    public function show($id)
    {
        $order = Order::with('product')->findOrFail($id);
        return view('user.order.detail', compact('order'));
    }
}

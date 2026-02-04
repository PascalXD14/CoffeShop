<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //list pesanan
    public function index()
    {
        $orders = Order::with(['user', 'product'])->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    //detail pesann
    public function show($id)
    {
        $order = Order::with(['user', 'product'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    // update status
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Status pesanan berhasil diubah!');
    }
}

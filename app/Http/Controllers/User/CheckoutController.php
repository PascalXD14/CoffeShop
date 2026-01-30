<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order; // ✅ TAMBAH INI
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function buyNow($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        return view('user.checkout.buy_now', compact('product', 'user'));
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'qty' => 'required|numeric|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $total = $product->price * $request->qty;

        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'name' => $request->name,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'qty' => $request->qty,
            'total_price' => $total,
            'status' => 'Pending'
        ]);

        return redirect()->route('order.status', $order->id);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function buyNow($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();
        $items = [
            $product->id => [
                "name" => $product->name,
                "price" => $product->price,
                "image" => $product->image,
                "qty" => 1
            ]
        ];

        return view('user.checkout.buy_now', compact('items', 'user'));
    }

    public function checkoutFromCart(Request $request)
    {
        $selected = $request->selected_items;

        if (!$selected) {
            return back()->with('error', 'Pilih produk dulu!');
        }

        $cart = session()->get('cart', []);
        $items = [];

        foreach ($selected as $id) {
            if(isset($cart[$id])) {
                $items[$id] = $cart[$id];
            }
        }

        $user = Auth::user();

        return view('user.checkout.buy_now', compact('items', 'user'));
    }

    public function cartCheckout(Request $request)
{
    if(!$request->items){
        return back()->with('error', 'Pilih produk dulu');
    }

    $cart = session('cart');
    $items = [];

    foreach($request->items as $id){
        $items[$id] = $cart[$id];
    }

    $user = Auth::user();

    return view('user.checkout.buy_now', compact('items', 'user'));
}


    public function confirm(Request $request)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'payment_method' => 'required',
        'items' => 'required'
    ]);

    foreach ($request->items as $product_id => $data) {
        $product = Product::findOrFail($product_id);
        $qty = $data['qty'];
        $total = $product->price * $qty;

        Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product_id,
            'name' => $request->name,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'qty' => $qty,
            'total_price' => $total,
            'status' => 'Pending'
        ]);
    }

    return redirect('/order-status')->with('success','Pesanan berhasil');
}

}

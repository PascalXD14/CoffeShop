<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
   public function index(Request $request)
{
    $query = Product::query();

    if($request->has('category') && $request->category != null){
        $query->where('category', $request->category);
    }

    $menus = $query->latest()->paginate(8)->withQueryString(); // paginate 8 per halaman, jaga query category
    return view('admin.menu.index', compact('menus'));
}


    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->status = $request->status;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public'); // storage/app/public/products
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit(Product $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, Product $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->price;
        $menu->stock = $request->stock;
        $menu->status = $request->status;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $menu->image = $path;
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu diperbarui');
    }

    public function destroy(Product $menu)
    {
        $menu->delete();
        return back()->with('success', 'Menu dihapus');
    }
}

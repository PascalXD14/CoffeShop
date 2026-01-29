<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Tampilkan daftar menu
     */
    public function index()
    {
        // nanti kalau sudah pakai database
        $menus = Menu::latest()->paginate(8);

        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Form tambah menu
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Simpan menu baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'category' => 'required',
            'price'    => 'required|numeric',
            'stock'    => 'required|numeric',
            'status'   => 'required',
        ]);

        Menu::create($request->all());

        return redirect()
            ->route('admin.menu.index')
            ->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Edit menu
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update menu
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->update($request->all());

        return redirect()
            ->route('admin.menu.index')
            ->with('success', 'Menu berhasil diperbarui');
    }

    /**
     * Hapus menu
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return back()->with('success', 'Menu berhasil dihapus');
    }
}

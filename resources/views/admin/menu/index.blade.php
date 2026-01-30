@extends('layout.sidebar')

@section('title', 'Manajemen Menu')
@section('page-title', 'Manajemen Menu')
@section('page-description', 'Kelola menu dan produk AmbaCoffe')

@section('content')
<!-- Header Actions -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
    <div>
        <h2 class="text-xl font-bold text-admin-800">Daftar Menu</h2>
        <p class="text-admin-500">Total {{ $menus->total() }} item menu</p>
    </div>
    <div class="flex items-center space-x-3">
        <div class="relative">
            <input type="text" placeholder="Cari menu..." 
                class="pl-10 pr-4 py-2 border border-admin-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent w-full sm:w-64">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-admin-400"></i>
        </div>
        <a href="{{ route('admin.menu.create') }}" class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition duration-300 flex items-center">
            <i class="fas fa-plus mr-2"></i>Tambah Menu
        </a>
    </div>
</div>

<!-- Filter Tabs -->
<div class="flex space-x-1 mb-6 border-b border-admin-200">
    <a href="{{ route('admin.menu.index') }}" class="px-4 py-2 {{ request('category') ? 'text-admin-500 hover:text-admin-700' : 'border-b-2 border-primary-600 text-primary-600 font-medium' }}">
        Semua
    </a>
    <a href="{{ route('admin.menu.index', ['category' => 'Kopi']) }}" class="px-4 py-2 {{ request('category') == 'Kopi' ? 'border-b-2 border-primary-600 text-primary-600 font-medium' : 'text-admin-500 hover:text-admin-700' }}">
        Kopi
    </a>
    <a href="{{ route('admin.menu.index', ['category' => 'Non-Kopi']) }}" class="px-4 py-2 {{ request('category') == 'Non-Kopi' ? 'border-b-2 border-primary-600 text-primary-600 font-medium' : 'text-admin-500 hover:text-admin-700' }}">
        Non-Kopi
    </a>
    <a href="{{ route('admin.menu.index', ['category' => 'Makanan']) }}" class="px-4 py-2 {{ request('category') == 'Makanan' ? 'border-b-2 border-primary-600 text-primary-600 font-medium' : 'text-admin-500 hover:text-admin-700' }}">
        Makanan
    </a>
    <a href="{{ route('admin.menu.index', ['category' => 'Promo']) }}" class="px-4 py-2 {{ request('category') == 'Promo' ? 'border-b-2 border-primary-600 text-primary-600 font-medium' : 'text-admin-500 hover:text-admin-700' }}">
        Promo
    </a>
</div>

<!-- Menu Table -->
<div class="bg-white rounded-xl shadow-sm border border-admin-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-admin-50">
                <tr>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Produk</th>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Kategori</th>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Harga</th>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Stok</th>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Status</th>
                    <th class="px-6 py-4 text-left text-sm font-medium text-admin-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-admin-200">
                @foreach($menus as $menu)
                <tr class="hover:bg-admin-50 transition duration-150">
                    <!-- Produk + Gambar -->
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-lg overflow-hidden mr-3 flex-shrink-0">
                                @if($menu->image)
                                    <img src="{{ asset('storage/'.$menu->image) }}" alt="{{ $menu->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                        <i class="fas fa-coffee"></i>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <p class="font-medium text-admin-800">{{ $menu->name }}</p>
                                <p class="text-sm text-admin-500">ID: MENU{{ $menu->id }}</p>
                            </div>
                        </div>
                    </td>

                    <!-- Kategori -->
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">
                            {{ $menu->category }}
                        </span>
                    </td>

                    <!-- Harga -->
                    <td class="px-6 py-4 font-semibold text-admin-800">
                        Rp {{ number_format($menu->price, 0, ',', '.') }}
                    </td>

                    <!-- Stok -->
                    <td class="px-6 py-4">{{ $menu->stock }}</td>

                    <!-- Status -->
                    <td class="px-6 py-4">
                        @if($menu->status)
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">Aktif</span>
                        @else
                            <span class="px-3 py-1 bg-red-100 text-red-800 text-xs rounded-full">Nonaktif</span>
                        @endif
                    </td>

                    <!-- Aksi -->
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.menu.edit', $menu->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                <i class="fas fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-admin-200 flex items-center justify-between">
        <div class="text-sm text-admin-500">
            Menampilkan {{ $menus->firstItem() }}-{{ $menus->lastItem() }} dari {{ $menus->total() }} item
        </div>
        <div class="flex items-center space-x-2">
            {{ $menus->links() }}
        </div>
    </div>
</div>
@endsection

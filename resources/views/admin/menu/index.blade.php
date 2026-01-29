@extends('layout.sidebar')

@section('title', 'Manajemen Menu')
@section('page-title', 'Manajemen Menu')
@section('page-description', 'Kelola menu dan produk AmbaCoffe')

@section('content')
    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div>
            <h2 class="text-xl font-bold text-admin-800">Daftar Menu</h2>
            <p class="text-admin-500">Total 156 item menu</p>
        </div>
        <div class="flex items-center space-x-3">
            <div class="relative">
                <input type="text" placeholder="Cari menu..." 
                    class="pl-10 pr-4 py-2 border border-admin-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent w-full sm:w-64">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-admin-400"></i>
            </div>
            <a href="/admin/menu/create" class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition duration-300 flex items-center">
                <i class="fas fa-plus mr-2"></i>Tambah Menu
            </a>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="flex space-x-1 mb-6 border-b border-admin-200">
        <button class="px-4 py-2 border-b-2 border-primary-600 text-primary-600 font-medium">Semua</button>
        <button class="px-4 py-2 text-admin-500 hover:text-admin-700">Kopi</button>
        <button class="px-4 py-2 text-admin-500 hover:text-admin-700">Non-Kopi</button>
        <button class="px-4 py-2 text-admin-500 hover:text-admin-700">Makanan</button>
        <button class="px-4 py-2 text-admin-500 hover:text-admin-700">Promo</button>
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
                    @for($i = 1; $i <= 8; $i++)
                    <tr class="hover:bg-admin-50 transition duration-150">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-amber-700 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-coffee text-white"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-admin-800">Espresso {{ $i }}</p>
                                    <p class="text-sm text-admin-500">ID: MENU{{ 100 + $i }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Kopi</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-medium text-admin-800">Rp {{ number_format(20000 + $i * 5000, 0, ',', '.') }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-24 bg-admin-200 rounded-full h-2 mr-3">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: {{ 60 + $i * 5 }}%"></div>
                                </div>
                                <span class="text-sm font-medium">{{ 50 - $i * 5 }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">Aktif</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-admin-200 flex items-center justify-between">
            <div class="text-sm text-admin-500">
                Menampilkan 1-8 dari 156 item
            </div>
            <div class="flex items-center space-x-2">
                <button class="p-2 rounded-lg border border-admin-300 hover:bg-admin-50">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="w-10 h-10 bg-primary-600 text-white rounded-lg">1</button>
                <button class="w-10 h-10 rounded-lg border border-admin-300 hover:bg-admin-50">2</button>
                <button class="w-10 h-10 rounded-lg border border-admin-300 hover:bg-admin-50">3</button>
                <button class="p-2 rounded-lg border border-admin-300 hover:bg-admin-50">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Bulk Actions -->
    <div class="mt-6 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <select class="border border-admin-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option>Pilih Aksi</option>
                <option>Aktifkan</option>
                <option>Nonaktifkan</option>
                <option>Hapus</option>
            </select>
            <button class="px-4 py-2 border border-admin-300 rounded-lg hover:bg-admin-50">Terapkan</button>
        </div>
        <div class="text-sm text-admin-500">
            <label class="flex items-center">
                <input type="checkbox" class="mr-2 rounded border-admin-300">
                Pilih semua
            </label>
        </div>
    </div>
@endsection
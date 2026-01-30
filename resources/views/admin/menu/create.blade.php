@extends('layout.sidebar')

@section('title', 'Tambah Menu')
@section('page-title', 'Tambah Menu')
@section('page-description', 'Tambah menu baru di AmbaCoffe')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm border border-admin-200 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-admin-800 mb-6">Form Tambah Menu</h2>

    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama Menu -->
        <div class="mb-4">
            <label for="name" class="block text-admin-700 font-medium mb-2">Nama Menu</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full border border-admin-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label for="category" class="block text-admin-700 font-medium mb-2">Kategori</label>
            <select name="category" id="category"
                class="w-full border border-admin-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option value="">Pilih Kategori</option>
                <option value="Kopi" {{ old('category') == 'Kopi' ? 'selected' : '' }}>Kopi</option>
                <option value="Non-Kopi" {{ old('category') == 'Non-Kopi' ? 'selected' : '' }}>Non-Kopi</option>
                <option value="Makanan" {{ old('category') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="Promo" {{ old('category') == 'Promo' ? 'selected' : '' }}>Promo</option>
            </select>
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-admin-700 font-medium mb-2">Harga</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}"
                class="w-full border border-admin-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Stok -->
        <div class="mb-4">
            <label for="stock" class="block text-admin-700 font-medium mb-2">Stok</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock') }}"
                class="w-full border border-admin-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
            @error('stock')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block text-admin-700 font-medium mb-2">Status</label>
            <div class="flex items-center space-x-4">
                <label class="flex items-center">
                    <input type="radio" name="status" value="1" {{ old('status') == '1' ? 'checked' : '' }} class="mr-2">
                    Aktif
                </label>
                <label class="flex items-center">
                    <input type="radio" name="status" value="0" {{ old('status') == '0' ? 'checked' : '' }} class="mr-2">
                    Nonaktif
                </label>
            </div>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar -->
        <div class="mb-6">
            <label for="image" class="block text-admin-700 font-medium mb-2">Gambar Menu</label>
            <input type="file" name="image" id="image"
                class="w-full border border-admin-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <div class="flex justify-end">
            <a href="{{ route('admin.menu.index') }}" class="px-4 py-2 mr-3 border border-admin-300 rounded-lg hover:bg-admin-50">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition duration-300">
                Simpan Menu
            </button>
        </div>
    </form>
</div>
@endsection

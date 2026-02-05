@extends('layout.sidebar')

@section('title', 'Edit Menu')
@section('page-title', 'Edit Menu')
@section('page-description', 'Ubah data menu AmbaCoffe')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-bold text-admin-800 mb-6">Edit Menu: {{ $menu->name }}</h2>

    <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama Menu -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Nama Menu</label>
            <input type="text" name="name" value="{{ old('name', $menu->name) }}" 
                   class="mt-1 block w-full border rounded-md p-2" required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Kategori</label>
            <input type="text" name="category" value="{{ old('category', $menu->category) }}" 
                   class="mt-1 block w-full border rounded-md p-2" required>
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" name="price" value="{{ old('price', $menu->price) }}" 
                   class="mt-1 block w-full border rounded-md p-2" required>
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Stok -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Stok</label>
            <input type="number" name="stock" value="{{ old('stock', $menu->stock) }}" 
                   class="mt-1 block w-full border rounded-md p-2" required>
            @error('stock')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" class="mt-1 block w-full border rounded-md p-2">
                <option value="1" {{ old('status', $menu->status) == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ old('status', $menu->status) == 0 ? 'selected' : '' }}>Nonaktif</option>
            </select>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Gambar</label>
            <input type="file" name="image" class="mt-1 block w-full">
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            @if($menu->image)
                <div class="mt-3">
                    <p class="text-sm text-gray-500 mb-1">Preview gambar lama:</p>
                    <img src="{{ asset('storage/'.$menu->image) }}" alt="{{ $menu->name }}" class="w-32 h-32 object-cover rounded-lg border">
                </div>
            @endif
        </div>

        <!-- Tombol Simpan -->
        <div class="mt-6">
            <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition duration-300">
                Perbarui Menu
            </button>
            <a href="{{ route('admin.menu.index') }}" class="ml-3 text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection

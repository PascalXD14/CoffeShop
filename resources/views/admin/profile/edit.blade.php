@extends('layout.sidebar')

@section('title', 'Profil Saya')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg animate-fade-in">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 font-playfair">Edit Profil</h2>

    @if(session('success'))
        <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Nama -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Password Baru (kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Konfirmasi Password -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:outline-none">
        </div>

        <!-- Avatar -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Foto Profil</label>
            <input type="file" name="avatar" accept="image/*" class="w-full">
            @if($user->avatar)
                <img src="{{ asset($user->avatar) }}" class="mt-3 w-24 h-24 rounded-full object-cover shadow-md">
            @endif
            @error('avatar')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-amber-500 to-orange-500 text-white rounded-xl font-semibold shadow-lg hover:from-amber-600 hover:to-orange-600 transition-all duration-300">Simpan Perubahan</button>
    </form>
</div>
@endsection

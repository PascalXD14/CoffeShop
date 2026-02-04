@extends('layout.navbar')

@section('title', 'Kontak')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-4xl font-bold text-amber-700 mb-8">Hubungi Kami 📞</h1>

    <div class="grid md:grid-cols-2 gap-10">
        <!-- Info -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Informasi Kontak</h2>
            <p class="mb-2">📍 Jl. Kopi Sejahtera No.123, Jakarta</p>
            <p class="mb-2">📞 0812-3456-7890</p>
            <p class="mb-2">📧 info@ambacoffe.com</p>
        </div>

        <!-- Form -->
        <div class="bg-white p-6 rounded-xl shadow">
            <form>
                <div class="mb-4">
                    <label class="block mb-1">Nama</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Email</label>
                    <input type="email" class="w-full border rounded-lg px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Pesan</label>
                    <textarea class="w-full border rounded-lg px-3 py-2" rows="4"></textarea>
                </div>

                <button class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

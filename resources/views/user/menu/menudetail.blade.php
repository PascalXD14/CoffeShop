@extends('layout.navbar')

@section('title', $product->name)

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 via-white to-orange-50">
    
    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-6 pt-8">
        <nav class="flex items-center space-x-2 text-sm text-gray-500">
            <a href="/" class="hover:text-amber-600 transition">Home</a>
            <span>/</span>
            <a href="/products" class="hover:text-amber-600 transition">Products</a>
            <span>/</span>
            <span class="text-gray-900 font-medium">{{ $product->name }}</span>
        </nav>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- GAMBAR SECTION -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative group overflow-hidden rounded-3xl shadow-2xl">
                    <img src="{{ asset('storage/'.$product->image) }}"
                         alt="{{ $product->name }}"
                         class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Overlay Badge -->
                    <div class="absolute top-6 right-6 bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                        Premium
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Thumbnail Gallery (Optional - jika ada multiple images) -->
                <div class="grid grid-cols-4 gap-3">
                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-amber-500 cursor-pointer">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-cover hover:scale-110 transition">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden border border-gray-200 opacity-50 cursor-pointer hover:opacity-100 transition">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden border border-gray-200 opacity-50 cursor-pointer hover:opacity-100 transition">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden border border-gray-200 opacity-50 cursor-pointer hover:opacity-100 transition">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="space-y-6 lg:sticky lg:top-8">
                
                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs font-semibold">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6z"/>
                        </svg>
                        Specialty Coffee
                    </span>
                    <span class="text-amber-600 flex items-center gap-1">
                        ★★★★★ <span class="text-gray-600 text-sm ml-1">(4.9)</span>
                    </span>
                </div>


                <h1 class="text-5xl font-bold text-gray-900 leading-tight">
                    {{ $product->name }}
                </h1>

                {{-- deskripsi --}}
                <p class="text-lg text-gray-600 leading-relaxed">
                    {{ $product->description ?? 'Kopi spesial AmbaCoffe dengan rasa premium yang dipilih dari biji kopi terbaik. Nikmati sensasi kopi berkualitas tinggi dengan aroma yang menggugah selera.' }}
                </p>

                <div class="grid grid-cols-2 gap-4 py-4">
                    <div class="flex items-center gap-3 bg-white p-4 rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                            ☕
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Tipe</p>
                            <p class="font-semibold text-gray-900">Arabica</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white p-4 rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                            🌍
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Origin</p>
                            <p class="font-semibold text-gray-900">Indonesia</p>
                        </div>
                    </div>
                </div>

                {{-- harga --}}
                <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-6 rounded-2xl border border-amber-200">
                    <p class="text-sm text-gray-600 mb-1">Harga Spesial</p>
                    <div class="flex items-baseline gap-3">
                        <p class="text-5xl font-bold text-amber-600">
                            Rp{{ number_format($product->price,0,',','.') }}
                        </p>
                        <span class="text-gray-400 line-through text-xl">
                            Rp{{ number_format($product->price * 1.2,0,',','.') }}
                        </span>
                    </div>
                    <p class="text-sm text-green-600 mt-2 font-medium">✓ Hemat 20% hari ini!</p>
                </div>

                    <div class="flex items-center gap-4">
                    <label class="text-gray-700 font-medium">Jumlah:</label>

                    <div class="flex items-center border-2 border-gray-200 rounded-xl overflow-hidden">
                        <button type="button" onclick="decreaseQty()"
                            class="px-5 py-3 bg-gray-100 hover:bg-gray-200 font-semibold">−</button>

                        <input 
                            type="text" 
                            id="qtyInput" 
                            value="1" 
                            readonly
                            class="w-16 text-center border-none focus:outline-none font-semibold bg-white">


                        <button type="button" onclick="increaseQty()"
                            class="px-5 py-3 bg-gray-100 hover:bg-gray-200 font-semibold">+</button>
                    </div>

                    <span class="text-sm text-gray-500">Stok: {{ $product->stock }}</span>
                </div>

                <input type="hidden" id="maxStock" value="{{ $product->stock }}">

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <form action="{{ route('cart.add') }}" method="POST" class="flex-1 space-y-4">
                        @csrf

                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <input type="hidden" name="qty" id="qtyHidden" value="1">

                        <button class="w-full bg-white border-2 border-gray-900 text-gray-900 px-8 py-4 rounded-xl hover:bg-gray-900 hover:text-white transition-all duration-300 font-semibold flex items-center justify-center gap-2 shadow-lg hover:shadow-xl group">
                            🛒 Tambah ke Keranjang
                        </button>
                    </form>



                    <a href="{{ route('checkout.buyNow', $product->id) }}"
                        class="flex-1 bg-gradient-to-r from-amber-500 to-orange-600 text-white px-8 py-4 rounded-xl hover:from-amber-600 
                        hover:to-orange-700 transition-all duration-300 font-semibold flex items-center justify-center gap-2 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <svg class="w-5 h-" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Beli Sekarang
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-gray-200">
                    <div class="text-center">
                        <div class="text-2xl mb-1">🚚</div>
                        <p class="text-xs text-gray-600 font-medium">Gratis Ongkir</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl mb-1">✓</div>
                        <p class="text-xs text-gray-600 font-medium">Garansi Kualitas</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl mb-1">🔒</div>
                        <p class="text-xs text-gray-600 font-medium">Pembayaran Aman</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="mt-16 bg-white rounded-3xl shadow-xl p-8">
            <div class="border-b border-gray-200 mb-6">
                <nav class="flex gap-8">
                    <button class="pb-4 border-b-2 border-amber-600 text-amber-600 font-semibold">Deskripsi</button>
                    <button class="pb-4 text-gray-500 hover:text-gray-900 transition">Review (24)</button>
                    <button class="pb-4 text-gray-500 hover:text-gray-900 transition">Cara Penyajian</button>
                </nav>
            </div>
            <div class="prose max-w-none text-gray-600">
                <p>{{ $product->description ?? 'Kopi premium pilihan dengan kualitas terbaik untuk pengalaman minum kopi yang sempurna.' }}</p>
            </div>
        </div>

    </div>
</div>

<script>
function increaseQty() {
    let qtyInput = document.getElementById('qtyInput');
    let maxStock = parseInt(document.getElementById('maxStock').value);
    let qty = parseInt(qtyInput.value);

    if (qty < maxStock) {
        qtyInput.value = qty + 1;
    } else {
        alert("Stok hanya " + maxStock);
    }

    syncQty();
}

function decreaseQty() {
    let qtyInput = document.getElementById('qtyInput');
    let qty = parseInt(qtyInput.value);

    if (qty > 1) {
        qtyInput.value = qty - 1;
    }

    syncQty();
}

function syncQty() {
    document.getElementById("qtyHidden").value = document.getElementById("qtyInput").value;
}

syncQty();
</script>

@endsection





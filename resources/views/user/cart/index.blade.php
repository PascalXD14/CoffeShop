@extends('layout.navbar')

@section('title', 'Keranjang')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-amber-50">
    
    <div class="max-w-7xl mx-auto px-6 py-12">
        
        <!-- Header -->
        <div class="mb-10">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-gray-900">Keranjang Belanja</h1>
            </div>
            <p class="text-gray-600 ml-15">Kelola produk yang akan Anda beli</p>
        </div>

        @if(session('success'))
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 text-green-700 p-5 rounded-xl mb-6 flex items-center gap-3 shadow-sm animate-slide-in">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @if($cart && count($cart) > 0)

        <!-- FORM CHECKOUT -->
        <form action="{{ route('checkout.cart') }}" method="POST">
        @csrf
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- CART ITEMS -->
            <div class="lg:col-span-2 space-y-4">
                
                @php $total = 0; @endphp

                <!-- SELECT ALL -->
                <div class="bg-white p-4 rounded-xl shadow border flex items-center gap-3">
                    <input type="checkbox" id="selectAll" class="w-5 h-5">
                    <label class="font-semibold text-gray-700">Pilih Semua Produk</label>
                </div>

                @foreach($cart as $id => $item)
                @php 
                    $subtotal = $item['price'] * $item['qty']; 
                    $total += $subtotal;
                @endphp
                
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                    <div class="p-6">
                        <div class="flex flex-col sm:flex-row gap-6 items-center">

                            <!-- Checkbox -->
                            <input type="checkbox" name="items[]" value="{{ $id }}" class="itemCheckbox w-5 h-5">

                            <!-- Product Image -->
                            <div class="relative">
                                <div class="w-full sm:w-32 h-32 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                                    <img src="{{ asset('storage/'.$item['image']) }}" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -top-2 -right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                    {{ $item['qty'] }}x
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="flex-1 space-y-3">
                                <h3 class="text-xl font-bold text-gray-900">{{ $item['name'] }}</h3>

                                <div class="flex flex-wrap items-center gap-4">
                                    <div class="bg-gray-50 px-4 py-2 rounded-lg">
                                        <p class="text-xs text-gray-500">Harga</p>
                                        <p class="text-lg font-bold">Rp {{ number_format($item['price']) }}</p>
                                    </div>

                                    <div class="bg-gray-50 px-4 py-2 rounded-lg">
                                        <p class="text-xs text-gray-500">Jumlah</p>
                                        <p class="text-lg font-bold">{{ $item['qty'] }}</p>
                                    </div>

                                    <div class="bg-amber-50 px-4 py-2 rounded-lg border">
                                        <p class="text-xs">Subtotal</p>
                                        <p class="text-xl font-bold text-amber-600">Rp {{ number_format($subtotal) }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete -->
                            <div>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button class="bg-red-50 hover:bg-red-500 text-red-500 hover:text-white p-3 rounded-xl">
                                        Hapus
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- SUMMARY -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-6 border">

                    <h2 class="text-2xl font-bold mb-6">Ringkasan</h2>

                    <div class="flex justify-between mb-3">
                        <span>Total Item</span>
                        <span>{{ count($cart) }} produk</span>
                    </div>

                    <div class="flex justify-between mb-3">
                        <span>Subtotal</span>
                        <span>Rp {{ number_format($total) }}</span>
                    </div>

                    <div class="bg-amber-500 text-white p-4 rounded-xl font-bold text-xl mb-6">
                        Total: Rp {{ number_format($total) }}
                    </div>

                    <!-- CHECKOUT BUTTON -->
                    <button type="submit"
                       class="block w-full bg-black text-white py-4 rounded-xl font-bold text-lg">
                        Checkout Produk Terpilih →
                    </button>

                    <a href="/products" class="block w-full border mt-3 py-3 text-center rounded-xl">
                        Lanjut Belanja
                    </a>

                </div>
            </div>

        </div>
        </form>

        @else
        <h2 class="text-center text-xl font-bold">Keranjang kosong</h2>
        @endif

    </div>
</div>

<script>
document.getElementById('selectAll').addEventListener('change', function() {
    document.querySelectorAll('.itemCheckbox').forEach(cb => cb.checked = this.checked);
});
</script>

@endsection

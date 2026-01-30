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
                <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @if($cart && count($cart) > 0)
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- CART ITEMS -->
            <div class="lg:col-span-2 space-y-4">
                
                @php $total = 0; @endphp

                @foreach($cart as $id => $item)
                @php 
                    $subtotal = $item['price'] * $item['qty']; 
                    $total += $subtotal;
                @endphp
                
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                    <div class="p-6">
                        <div class="flex flex-col sm:flex-row gap-6">
                            
                            <!-- Product Image -->
                            <div class="relative">
                                <div class="w-full sm:w-32 h-32 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                                    <img src="{{ asset('storage/'.$item['image']) }}" 
                                         alt="{{ $item['name'] }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="absolute -top-2 -right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                    {{ $item['qty'] }}x
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="flex-1 space-y-3">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-amber-600 transition">
                                        {{ $item['name'] }}
                                    </h3>
                                    <p class="text-sm text-gray-500">Kopi Premium Quality</p>
                                </div>

                                <div class="flex flex-wrap items-center gap-4">
                                    <!-- Price per item -->
                                    <div class="bg-gray-50 px-4 py-2 rounded-lg">
                                        <p class="text-xs text-gray-500 mb-0.5">Harga Satuan</p>
                                        <p class="text-lg font-bold text-gray-900">
                                            Rp {{ number_format($item['price'], 0, ',', '.') }}
                                        </p>
                                    </div>

                                    <!-- Quantity -->
                                    <div class="bg-gray-50 px-4 py-2 rounded-lg">
                                        <p class="text-xs text-gray-500 mb-0.5">Jumlah</p>
                                        <p class="text-lg font-bold text-gray-900">
                                            {{ $item['qty'] }} pcs
                                        </p>
                                    </div>

                                    <!-- Subtotal -->
                                    <div class="bg-gradient-to-r from-amber-50 to-orange-50 px-4 py-2 rounded-lg border border-amber-200">
                                        <p class="text-xs text-gray-600 mb-0.5">Subtotal</p>
                                        <p class="text-xl font-bold text-amber-600">
                                            Rp {{ number_format($subtotal, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Button -->
                            <div class="flex sm:flex-col justify-end items-end gap-2">
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                            class="group/btn bg-red-50 hover:bg-red-500 text-red-500 hover:text-white p-3 rounded-xl transition-all duration-300 shadow-sm hover:shadow-md"
                                            onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>

            <!-- ORDER SUMMARY -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-6 border border-gray-100">
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Ringkasan Belanja
                    </h2>

                    <div class="space-y-4 mb-6">
                        
                        <!-- Item count -->
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="text-gray-600">Total Item</span>
                            <span class="font-semibold text-gray-900">{{ count($cart) }} produk</span>
                        </div>

                        <!-- Subtotal -->
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-semibold text-gray-900">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>

                        <!-- Shipping -->
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Ongkir</span>
                            <span class="font-semibold text-green-600">GRATIS</span>
                        </div>

                        <!-- Discount -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <div class="flex-1">
                                <p class="text-xs text-green-700 font-medium">Hemat Ongkir</p>
                                <p class="text-xs text-green-600">Gratis ongkir untuk pembelian ini!</p>
                            </div>
                        </div>

                    </div>

                    <!-- Total -->
                    <div class="bg-gradient-to-r from-amber-500 to-orange-600 rounded-xl p-5 mb-6 shadow-lg">
                        <div class="flex justify-between items-center text-white">
                            <div>
                                <p class="text-sm opacity-90 mb-1">Total Pembayaran</p>
                                <p class="text-3xl font-bold">Rp {{ number_format($total, 0, ',', '.') }}</p>
                            </div>
                            <svg class="w-8 h-8 opacity-80" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Checkout Button -->
                    <a href="/checkout" 
                       class="block w-full bg-gray-900 hover:bg-black text-white text-center py-4 rounded-xl font-bold text-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 mb-3">
                        Lanjut ke Pembayaran
                        <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <!-- Continue Shopping -->
                    <a href="/products" 
                       class="block w-full border-2 border-gray-300 hover:border-amber-500 text-gray-700 hover:text-amber-600 text-center py-3 rounded-xl font-semibold transition-all duration-300">
                        Lanjut Belanja
                    </a>

                    <!-- Trust Badges -->
                    <div class="grid grid-cols-3 gap-3 mt-6 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl mb-1">🔒</div>
                            <p class="text-xs text-gray-600 font-medium">Aman</p>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl mb-1">⚡</div>
                            <p class="text-xs text-gray-600 font-medium">Cepat</p>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl mb-1">✓</div>
                            <p class="text-xs text-gray-600 font-medium">Terpercaya</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        @else
        
        <!-- EMPTY CART STATE -->
        <div class="bg-white rounded-3xl shadow-xl p-12 text-center max-w-2xl mx-auto">
            <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-3">Keranjang Belanja Kosong</h2>
            <p class="text-gray-600 mb-8 text-lg">Sepertinya Anda belum menambahkan produk apapun ke keranjang</p>
            <a href="/products" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-orange-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                Mulai Belanja
            </a>
        </div>

        @endif

    </div>
</div>

<style>
@keyframes slide-in {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.animate-slide-in {
    animation: slide-in 0.5s ease-out;
}
</style>

@endsection
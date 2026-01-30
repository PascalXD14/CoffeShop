@extends('layout.navbar')

@section('title', 'Detail Pesanan')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

<!-- Header -->
<div class="mb-8">
    <a href="{{ route('order.index') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 mb-4 transition-colors">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali ke Pesanan
    </a>
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Detail Pesanan</h1>
</div>

<!-- Main Card -->
<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
    
    <!-- Status Banner -->
    <div class="bg-gradient-to-r from-amber-50 to-orange-50 border-b border-amber-100 px-6 py-4">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-amber-700 font-medium mb-1">Status Pesanan</p>
                <p class="text-lg font-bold text-amber-900">{{ $order->status }}</p>
            </div>
            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Product Section -->
    <div class="p-6 border-b border-gray-100">
        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-4">Produk</h2>
        
        <div class="flex gap-5 items-start">
            @if($order->product->image)
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/'.$order->product->image) }}" 
                     class="w-28 h-28 object-cover rounded-xl border border-gray-200 shadow-sm" 
                     alt="{{ $order->product->name }}">
            </div>
            @endif
            
            <div class="flex-1">
                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $order->product->name }}</h3>
                <p class="text-gray-500 text-sm mb-3">Quantity: {{ $order->qty }}</p>
                <p class="text-2xl font-bold text-gray-900">
                    Rp{{ number_format($order->total_price,0,',','.') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Order Information -->
    <div class="p-6">
        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-4">Informasi Pesanan</h2>
        
        <div class="space-y-4">
            <!-- Nama Pemesan -->
            <div class="flex items-start py-3 border-b border-gray-100">
                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="ml-4 flex-1">
                    <p class="text-sm text-gray-500 mb-1">Nama Pemesan</p>
                    <p class="font-semibold text-gray-900">{{ $order->name }}</p>
                </div>
            </div>

            <!-- Metode Pembayaran -->
            <div class="flex items-start py-3 border-b border-gray-100">
                <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </div>
                <div class="ml-4 flex-1">
                    <p class="text-sm text-gray-500 mb-1">Metode Pembayaran</p>
                    <p class="font-semibold text-gray-900">{{ $order->payment_method }}</p>
                </div>
            </div>

            <!-- Total Pembayaran -->
            <div class="flex items-start py-3">
                <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4 flex-1">
                    <p class="text-sm text-gray-500 mb-1">Total Pembayaran</p>
                    <p class="text-xl font-bold text-gray-900">
                        Rp{{ number_format($order->total_price,0,',','.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection
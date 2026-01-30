@extends('layout.navbar')

@section('title', 'Status Pesanan')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

<div class="mb-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Pesanan Saya</h1>
    <p class="text-gray-500 mt-1">Pantau status pesanan Anda</p>
</div>

@if($orders->isEmpty())
    <div class="bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 rounded-2xl p-12 text-center">
        <div class="w-20 h-20 mx-auto mb-4 bg-gray-200 rounded-full flex items-center justify-center">
            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
        </div>
        <p class="text-gray-600 font-medium">Belum ada pesanan</p>
    </div>
@endif

@foreach($orders as $order)
<div class="bg-white border border-gray-200 rounded-2xl mb-4 overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <div class="p-6 flex gap-5 items-start">

        {{-- GAMBAR --}}
        @if($order->product && $order->product->image)
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/'.$order->product->image) }}" 
                     class="w-24 h-24 object-cover rounded-xl border border-gray-100" 
                     alt="{{ $order->product->name }}">
            </div>
        @endif

        <div class="flex-1 min-w-0">
            <h3 class="font-semibold text-gray-900 text-lg mb-3">{{ $order->product->name }}</h3>
            
            <div class="space-y-1.5 text-sm">
                <div class="flex items-center text-gray-600">
                    <span class="w-16">Qty</span>
                    <span class="font-medium text-gray-900">{{ $order->qty }}</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="w-16">Total</span>
                    <span class="font-semibold text-gray-900">Rp{{ number_format($order->total_price,0,',','.') }}</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="w-16">Status</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200">
                        {{ $order->status }}
                    </span>
                </div>
            </div>

            <a href="{{ route('order.show', $order->id) }}" 
               class="inline-flex items-center mt-4 text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                Lihat Detail
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

    </div>
</div>
@endforeach

</div>
@endsection
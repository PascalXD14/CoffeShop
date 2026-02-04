@extends('layout.sidebar')

@section('title', 'Kelola Pesanan')

@section('content')
<div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-orange-100">
    <!-- Header -->
    <div class="bg-gradient-to-r from-orange-50 to-amber-50 px-8 py-6 border-b border-orange-100">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Daftar Pesanan</h2>
                <p class="text-sm text-gray-600">Kelola semua pesanan pelanggan</p>
            </div>
            <div class="bg-white px-4 py-2 rounded-xl border border-orange-200 shadow-sm">
                <span class="text-sm text-gray-600">Total: </span>
                <span class="font-bold text-orange-600">{{ $orders->count() }}</span>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gradient-to-r from-gray-50 to-orange-50 border-b border-orange-100">
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">User</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Produk</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Qty</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Total</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($orders as $order)
                <tr class="hover:bg-orange-50/50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-semibold shadow-md">
                                {{ strtoupper(substr($order->user->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">{{ $order->user->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-medium text-gray-800">{{ $order->product->name }}</p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center justify-center w-8 h-8 bg-orange-100 text-orange-700 font-semibold rounded-lg">
                            {{ $order->qty }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-semibold text-gray-800">Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold
                            {{ $order->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                            {{ $order->status == 'process' ? 'bg-blue-100 text-blue-700' : '' }}
                            {{ $order->status == 'completed' ? 'bg-green-100 text-green-700' : '' }}
                            {{ $order->status == 'cancelled' ? 'bg-red-100 text-red-700' : '' }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('admin.orders.show', $order->id) }}" 
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-200 shadow-md hover:shadow-lg">
                            <i class="fas fa-eye text-sm"></i>
                            Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Empty State (jika tidak ada data) -->
    @if($orders->count() == 0)
    <div class="py-16 text-center">
        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-inbox text-orange-400 text-3xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Belum Ada Pesanan</h3>
        <p class="text-gray-500 text-sm">Pesanan pelanggan akan muncul di sini</p>
    </div>
    @endif
</div>
@endsection
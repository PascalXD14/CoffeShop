@extends('layout.sidebar')

@section('title', 'Detail Pesanan')

@section('content')
<div class="max-w-4xl">
    <!-- Back Button -->
    <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 font-medium mb-6 group transition-all duration-200">
        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform duration-200"></i>
        Kembali ke Daftar Pesanan
    </a>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-orange-100">
        <!-- Header -->
        <div class="bg-gradient-to-r from-orange-500 to-amber-500 px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-1">Detail Pesanan Customer</h2>
                    <p class="text-orange-100 text-sm">Informasi lengkap pesanan</p>
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/30">
                    <span class="text-white font-semibold">Order #{{ $order->id }}</span>
                </div>
            </div>
        </div>

        <!-- Detail Informasi -->
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Customer Info -->
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl border border-orange-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md flex-shrink-0">
                            {{ strtoupper(substr($order->user->name, 0, 1)) }}
                        </div>
                        <div class="flex-1">
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Nama Customer</p>
                            <p class="font-semibold text-gray-800 text-lg">{{ $order->user->name }}</p>
                        </div>
                    </div>

                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-coffee text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Nama Produk</p>
                                <p class="font-semibold text-gray-800">{{ $order->product->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Alamat Pengiriman</p>
                                <p class="font-medium text-gray-800">{{ $order->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="space-y-4">
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-boxes text-purple-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Jumlah Pesanan</p>
                                <p class="font-semibold text-gray-800 text-2xl">{{ $order->qty }} <span class="text-sm text-gray-500">pcs</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-money-bill-wave text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Total Harga</p>
                                <p class="font-bold text-green-700 text-2xl">Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-credit-card text-indigo-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Metode Pembayaran</p>
                                <p class="font-semibold text-gray-800">{{ $order->payment_method }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl border border-orange-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-info-circle text-orange-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Status Saat Ini</p>
                                <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-semibold
                                    {{ $order->status == 'Pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                    {{ $order->status == 'Dibayar' ? 'bg-blue-100 text-blue-700' : '' }}
                                    {{ $order->status == 'Sedang Dikirim' ? 'bg-purple-100 text-purple-700' : '' }}
                                    {{ $order->status == 'Selesai' ? 'bg-green-100 text-green-700' : '' }}">
                                    {{ $order->status }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-200"></div>

        <!-- Form Update Status -->
        <div class="p-8 bg-gradient-to-r from-gray-50 to-orange-50">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center shadow-md">
                    <i class="fas fa-edit text-white"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">Ubah Status Pesanan</h3>
                    <p class="text-sm text-gray-600">Perbarui status pesanan customer</p>
                </div>
            </div>

            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Pilih Status Baru</label>
                    <select name="status" class="w-full md:w-96 px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all duration-200 font-medium text-gray-700 bg-white">
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>⏳ Pending (Menunggu)</option>
                        <option value="Dibayar" {{ $order->status == 'Dibayar' ? 'selected' : '' }}>💳 Dibayar</option>
                        <option value="Sedang Dikirim" {{ $order->status == 'Sedang Dikirim' ? 'selected' : '' }}>🚚 Sedang Dikirim</option>
                        <option value="Selesai" {{ $order->status == 'Selesai' ? 'selected' : '' }}>✅ Selesai</option>
                    </select>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="inline-flex items-center gap-2 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-200 shadow-lg hover:shadow-xl">
                        <i class="fas fa-save"></i>
                        Simpan Perubahan Status
                    </button>
                    <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-xl font-semibold transition-all duration-200">
                        <i class="fas fa-times"></i>
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
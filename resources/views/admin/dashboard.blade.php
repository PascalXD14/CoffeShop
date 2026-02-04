@extends('layout.sidebar')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')
@section('page-description', 'Analytics and statistics overview')

@section('content')

<div class="flex justify-end mb-6">
    <a href="{{ route('admin.report.pdf') }}" 
    class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition flex items-center gap-2">
    <i class="fas fa-file-pdf"></i> Export PDF
    </a>
</div>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Pengguna -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-blue-100 hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="p-4 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl shadow-md group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <div class="flex items-center gap-1 bg-green-50 px-3 py-1.5 rounded-full">
                    <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                    <span class="text-green-600 text-sm font-bold">12.5%</span>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalUsers) }}</h3>
            <p class="text-gray-500 font-medium">Total Pengguna</p>
        </div>

        <!-- Total Me   nu -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-green-100 hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="p-4 bg-gradient-to-br from-green-400 to-green-600 rounded-xl shadow-md group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-coffee text-white text-2xl"></i>
                </div>
                <div class="flex items-center gap-1 bg-green-50 px-3 py-1.5 rounded-full">
                    <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                    <span class="text-green-600 text-sm font-bold">8.2%</span>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalMenu) }}</h3>
            <p class="text-gray-500 font-medium">Total Menu</p>
        </div>

        <!-- Total Pesanan -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-amber-100 hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="p-4 bg-gradient-to-br from-amber-400 to-amber-600 rounded-xl shadow-md group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shopping-cart text-white text-2xl"></i>
                </div>
                <div class="flex items-center gap-1 bg-green-50 px-3 py-1.5 rounded-full">
                    <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                    <span class="text-green-600 text-sm font-bold">24.7%</span>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-gray-800 mb-1">{{ number_format($totalOrders) }}</h3>
            <p class="text-gray-500 font-medium">Total Pesanan</p>
        </div>

        <!-- Total Pendapatan -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-purple-100 hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="p-4 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl shadow-md group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-dollar-sign text-white text-2xl"></i>
                </div>
                <div class="flex items-center gap-1 bg-green-50 px-3 py-1.5 rounded-full">
                    <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                    <span class="text-green-600 text-sm font-bold">18.3%</span>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-gray-800 mb-1">Rp {{ number_format($totalRevenue) }}</h3>
            <p class="text-gray-500 font-medium">Total Pendapatan</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100 mb-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Pendapatan Bulanan</h3>
                <p class="text-sm text-gray-500">Grafik pendapatan berdasarkan periode waktu</p>
            </div>
            <select id="rangeSelect" class="px-4 py-2.5 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 font-medium text-gray-700 bg-white transition-all duration-200">
                <option value="30">📅 30 Hari Terakhir</option>
                <option value="3m">📊 3 Bulan Terakhir</option>
                <option value="1y">📈 1 Tahun Terakhir</option>
            </select>
        </div>
        <div class="h-80">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Pesanan Terbaru</h3>
                    <p class="text-sm text-gray-500">Daftar pesanan yang baru masuk</p>
                </div>
                <a href="/admin/orders" class="inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 font-semibold text-sm group transition-colors duration-200">
                    Lihat Semua
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <div class="space-y-3">
                @foreach($recentOrders as $order)
                <div class="flex items-center justify-between p-4 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 rounded-xl border border-gray-100 hover:border-orange-200 transition-all duration-200 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-200">
                            <i class="fas fa-receipt text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Order #{{ $order->id }}</h4>
                            <p class="text-sm text-gray-500">{{ $order->user->name }} • {{ $order->qty }} item</p>
                        </div>
                    </div>

                    <div class="text-right">
                        <div class="font-bold text-gray-800 mb-2">Rp {{ number_format($order->total_price) }}</div>
                        @if($order->status == 'Pending')
                            <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Pending</span>
                        @elseif($order->status == 'Paid')
                            <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Dibayar</span>
                        @elseif($order->status == 'Shipped')
                            <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Dikirim</span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Selesai</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Menu terpopulr -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100">
            <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-1">Menu Terpopuler</h3>
                <p class="text-sm text-gray-500">Produk dengan penjualan terbanyak</p>
            </div>
            <div class="space-y-4">
                @foreach($popularMenus as $item)
                <div class="flex items-center p-4 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 rounded-xl border border-gray-100 hover:border-orange-200 transition-all duration-200 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mr-4 shadow-md group-hover:scale-110 transition-transform duration-200">
                        <i class="fas fa-coffee text-white text-xl"></i>
                    </div>

                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800 mb-1">{{ $item->product->name ?? 'Produk tidak ditemukan' }}</h4>
                        <p class="text-sm text-gray-500 flex items-center gap-1">
                            <i class="fas fa-shopping-bag text-xs"></i>
                            {{ $item->total_sold }} terjual
                        </p>
                    </div>

                    <div class="text-right">
                        <div class="font-bold text-gray-800">Rp {{ number_format($item->product->price ?? 0) }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@section('scripts')
<script>
    const revenue30Days = @json($revenue30Days);
    const revenue3Months = @json($revenue3Months);
    const revenue1Year = @json($revenue1Year);

    let ctx = document.getElementById('revenueChart').getContext('2d');
    let chart;

    function loadChart(data, labels) {
        if (chart) chart.destroy();

        chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pendapatan (Rp)',
                    data: data,
                    borderColor: 'rgb(249, 115, 22)',
                    backgroundColor: 'rgba(249, 115, 22, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointBackgroundColor: 'rgb(249, 115, 22)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    // default 30 days
    loadChart(
        revenue30Days.map(r => r.total),
        revenue30Days.map(r => r.date)
    );

    // Dropdown event
    document.querySelector("select").addEventListener("change", function () {
        if (this.value == "30") {
            loadChart(
                revenue30Days.map(r => r.total),
                revenue30Days.map(r => r.date)
            );
        }
        if (this.value == "3m") {
            loadChart(
                revenue3Months.map(r => r.total),
                revenue3Months.map(r => "Bulan " + r.month)
            );
        }
        if (this.value == "1y") {
            loadChart(
                revenue1Year.map(r => r.total),
                revenue1Year.map(r => "Bulan " + r.month)
            );
        }
    });
</script>
@endsection
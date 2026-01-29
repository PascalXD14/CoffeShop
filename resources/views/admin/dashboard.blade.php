@extends('layout.sidebar')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')
@section('page-description', 'Analytics and statistics overview')

@section('content')
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-green-600 text-sm font-medium">+12.5%</span>
            </div>
            <h3 class="text-2xl font-bold text-admin-800 mb-2">{{ number_format($totalUsers) }}</h3>
            <p class="text-admin-500">Total Pengguna</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-coffee text-green-600 text-xl"></i>
                </div>
                <span class="text-green-600 text-sm font-medium">+8.2%</span>
            </div>
            <h3 class="text-2xl font-bold text-admin-800 mb-2">156</h3>
            <p class="text-admin-500">Total Menu</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-amber-100 rounded-lg">
                    <i class="fas fa-shopping-cart text-amber-600 text-xl"></i>
                </div>
                <span class="text-green-600 text-sm font-medium">+24.7%</span>
            </div>
            <h3 class="text-2xl font-bold text-admin-800 mb-2">1,248</h3>
            <p class="text-admin-500">Total Pesanan</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                </div>
                <span class="text-green-600 text-sm font-medium">+18.3%</span>
            </div>
            <h3 class="text-2xl font-bold text-admin-800 mb-2">Rp 45.8Jt</h3>
            <p class="text-admin-500">Total Pendapatan</p>
        </div>
    </div>

    <!-- Charts & Recent Orders -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Revenue Chart -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-admin-800">Pendapatan Bulanan</h3>
                <select class="text-sm border border-admin-300 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <option>30 Hari Terakhir</option>
                    <option>3 Bulan Terakhir</option>
                    <option>1 Tahun Terakhir</option>
                </select>
            </div>
            <div class="h-64 flex items-center justify-center">
                <!-- Placeholder for chart -->
                <div class="text-center">
                    <div class="text-4xl text-admin-300 mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <p class="text-admin-500">Chart akan muncul di sini</p>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-admin-800">Pesanan Terbaru</h3>
                <a href="/admin/orders" class="text-primary-600 hover:text-primary-700 text-sm font-medium">Lihat Semua →</a>
            </div>
            <div class="space-y-4">
                @for($i = 1; $i <= 5; $i++)
                <div class="flex items-center justify-between p-4 hover:bg-admin-50 rounded-lg border border-admin-100">
                    <div>
                        <h4 class="font-medium text-admin-800">Order #{{ 1000 + $i }}</h4>
                        <p class="text-sm text-admin-500">John Doe • 3 items</p>
                    </div>
                    <div class="text-right">
                        <div class="font-medium text-admin-800">Rp 85,000</div>
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Selesai</span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Quick Actions & Popular Items -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <h3 class="text-lg font-semibold text-admin-800 mb-6">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="/admin/menu/create" class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-admin-300 rounded-xl hover:border-primary-500 hover:bg-primary-50 transition duration-300 group">
                    <i class="fas fa-plus text-2xl text-admin-400 group-hover:text-primary-600 mb-3"></i>
                    <span class="font-medium text-admin-700 group-hover:text-primary-700">Tambah Menu</span>
                </a>
                <a href="/admin/orders" class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-admin-300 rounded-xl hover:border-green-500 hover:bg-green-50 transition duration-300 group">
                    <i class="fas fa-clipboard-check text-2xl text-admin-400 group-hover:text-green-600 mb-3"></i>
                    <span class="font-medium text-admin-700 group-hover:text-green-700">Kelola Order</span>
                </a>
                <a href="/admin/users" class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-admin-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition duration-300 group">
                    <i class="fas fa-user-plus text-2xl text-admin-400 group-hover:text-blue-600 mb-3"></i>
                    <span class="font-medium text-admin-700 group-hover:text-blue-700">Kelola User</span>
                </a>
                <a href="/admin/reports" class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-admin-300 rounded-xl hover:border-purple-500 hover:bg-purple-50 transition duration-300 group">
                    <i class="fas fa-chart-pie text-2xl text-admin-400 group-hover:text-purple-600 mb-3"></i>
                    <span class="font-medium text-admin-700 group-hover:text-purple-700">Laporan</span>
                </a>
            </div>
        </div>

        <!-- Popular Menu Items -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-admin-200">
            <h3 class="text-lg font-semibold text-admin-800 mb-6">Menu Terpopuler</h3>
            <div class="space-y-4">
                @for($i = 1; $i <= 3; $i++)
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-700 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-coffee text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium text-admin-800">Espresso {{ $i }}</h4>
                        <p class="text-sm text-admin-500">{{ 150 + $i * 20 }} terjual</p>
                    </div>
                    <div class="text-right">
                        <div class="font-medium text-admin-800">Rp 25,000</div>
                        <div class="flex items-center text-amber-500 text-sm">
                            @for($j = 0; $j < 5; $j++)
                                <i class="fas fa-star{{ $j < 4 ? '' : '-half-alt' }}"></i>
                            @endfor
                            <span class="ml-1 text-admin-500">4.{{ $i }}</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    // Auto-update stats every 30 seconds
    setInterval(() => {
        // Simulate live updates
        const stats = document.querySelectorAll('.text-2xl.font-bold');
        stats.forEach(stat => {
            const current = parseInt(stat.textContent.replace(/[^0-9]/g, ''));
            const randomChange = Math.floor(Math.random() * 10);
            stat.textContent = (current + randomChange).toLocaleString();
        });
    }, 30000);
</script>
@endsection
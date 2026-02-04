<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 min-h-screen">
    <!-- Sidebar Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-40 hidden md:hidden transition-opacity duration-300"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed left-0 top-0 h-full w-72 bg-gradient-to-b from-amber-900 via-orange-900 to-amber-950 text-white shadow-2xl transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50 overflow-y-auto">
        <!-- Logo Section -->
        <div class="p-6 border-b border-amber-800/50 bg-gradient-to-r from-amber-800/30 to-orange-800/30">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-xl transform hover:rotate-6 transition-transform duration-300">
                    <i class="fas fa-coffee text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-playfair font-bold tracking-wide">AmbaCoffe</h1>
                    <p class="text-amber-200 text-sm font-light">Admin Dashboard</p>
                </div>
            </div>
        </div>

        <!-- User Profile Card -->
        <div class="m-4 p-5 bg-gradient-to-br from-amber-800/40 to-orange-800/40 rounded-2xl border border-amber-700/30 backdrop-blur-sm">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-400 via-orange-500 to-amber-600 rounded-full flex items-center justify-center shadow-lg">
                        <i class="fas fa-user-shield text-white text-xl"></i>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-amber-900"></div>
                </div>
                <div class="flex-1">
                    <h3 class="font-semibold text-white">{{ auth()->user()->name ?? 'Administrator' }}</h3>
                    <p class="text-amber-300 text-sm flex items-center gap-1">
                        <i class="fas fa-crown text-xs"></i>
                        <span>Super Admin</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="px-4 py-6 space-y-2">
            <!-- Dashboard -->
            <a href="/admin/dashboard" class="group flex items-center space-x-3 px-4 py-3.5 rounded-xl hover:bg-amber-800/40 transition-all duration-300 {{ request()->is('admin/dashboard') ? 'bg-gradient-to-r from-amber-700 to-orange-700 shadow-lg' : 'text-amber-200' }}">
                <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ request()->is('admin/dashboard') ? 'bg-white/20' : 'bg-amber-800/30 group-hover:bg-amber-700/40' }} transition-colors duration-300">
                    <i class="fas fa-chart-line {{ request()->is('admin/dashboard') ? 'text-white' : 'text-amber-300' }}"></i>
                </div>
                <span class="font-medium {{ request()->is('admin/dashboard') ? 'text-white' : 'group-hover:text-white' }}">Dashboard</span>
                @if(request()->is('admin/dashboard'))
                <i class="fas fa-chevron-right ml-auto text-white text-xs"></i>
                @endif
            </a>
            
            <!-- Menu Management -->
            <a href="/admin/menu" class="group flex items-center space-x-3 px-4 py-3.5 rounded-xl hover:bg-amber-800/40 transition-all duration-300 {{ request()->is('admin/menu*') ? 'bg-gradient-to-r from-amber-700 to-orange-700 shadow-lg' : 'text-amber-200' }}">
                <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ request()->is('admin/menu*') ? 'bg-white/20' : 'bg-amber-800/30 group-hover:bg-amber-700/40' }} transition-colors duration-300">
                    <i class="fas fa-mug-hot {{ request()->is('admin/menu*') ? 'text-white' : 'text-amber-300' }}"></i>
                </div>
                <span class="font-medium {{ request()->is('admin/menu*') ? 'text-white' : 'group-hover:text-white' }}">Kelola Menu</span>
                @if(request()->is('admin/menu*'))
                <i class="fas fa-chevron-right ml-auto text-white text-xs"></i>
                @endif
            </a>
            
            <!-- Orders Management -->
            <a href="/admin/orders" class="group flex items-center space-x-3 px-4 py-3.5 rounded-xl hover:bg-amber-800/40 transition-all duration-300 {{ request()->is('admin/orders*') ? 'bg-gradient-to-r from-amber-700 to-orange-700 shadow-lg' : 'text-amber-200' }}">
                <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ request()->is('admin/orders*') ? 'bg-white/20' : 'bg-amber-800/30 group-hover:bg-amber-700/40' }} transition-colors duration-300">
                    <i class="fas fa-receipt {{ request()->is('admin/orders*') ? 'text-white' : 'text-amber-300' }}"></i>
                </div>
                <span class="font-medium {{ request()->is('admin/orders*') ? 'text-white' : 'group-hover:text-white' }}">Kelola Pesanan</span>
            </a>

            <!-- Divider -->
            <div class="py-3">
                <div class="border-t border-amber-800/50"></div>
            </div>

            <!-- Settings Section -->
            <div class="space-y-2">
                <p class="px-4 text-amber-400 text-xs font-bold uppercase tracking-wider mb-3 flex items-center gap-2">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </p>
                
                <a href="/admin/profile" class="group flex items-center space-x-3 px-4 py-3.5 rounded-xl hover:bg-amber-800/40 transition-all duration-300 {{ request()->is('admin/profile') ? 'bg-gradient-to-r from-amber-700 to-orange-700 shadow-lg' : 'text-amber-200' }}">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ request()->is('admin/profile') ? 'bg-white/20' : 'bg-amber-800/30 group-hover:bg-amber-700/40' }} transition-colors duration-300">
                        <i class="fas fa-user-cog {{ request()->is('admin/profile') ? 'text-white' : 'text-amber-300' }}"></i>
                    </div>
                    <span class="font-medium {{ request()->is('admin/profile') ? 'text-white' : 'group-hover:text-white' }}">Profil & Akun</span>
                </a>
                
                <form method="POST" action="/logout" class="block">
                    @csrf
                    <button type="submit" class="w-full group flex items-center space-x-3 px-4 py-3.5 rounded-xl hover:bg-gradient-to-r hover:from-red-600 hover:to-orange-600 text-amber-200 hover:text-white transition-all duration-300">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-amber-800/30 group-hover:bg-white/20 transition-colors duration-300">
                            <i class="fas fa-sign-out-alt text-amber-300 group-hover:text-white"></i>
                        </div>
                        <span class="font-medium">Keluar</span>
                    </button>
                </form>
            </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="absolute bottom-0 left-0 right-0 p-5 border-t border-amber-800/50 bg-gradient-to-t from-amber-950 to-transparent">
            <div class="text-center space-y-1">
                <div class="flex items-center justify-center gap-2 text-amber-400 text-sm">
                    <i class="fas fa-code"></i>
                    <span class="font-semibold">Version 1.0.0</span>
                </div>
                <p class="text-xs text-amber-500">© 2024 AmbaCoffe</p>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="md:ml-72 transition-all duration-300 min-h-screen pb-20">
        <!-- Top Bar -->
        <header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-30 border-b border-orange-100">
            <div class="flex items-center justify-between px-6 py-4">
                <!-- Left: Menu Button & Breadcrumb -->
                <div class="flex items-center space-x-4">
                    <button id="sidebarToggle" class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-r from-amber-500 to-orange-500 text-white hover:from-amber-600 hover:to-orange-600 transition-all duration-300 shadow-lg">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                    
                    <div class="hidden md:flex items-center space-x-3 text-sm">
                        <a href="/admin/dashboard" class="text-amber-600 hover:text-orange-600 font-medium transition-colors duration-200">
                            <i class="fas fa-home mr-1"></i>
                            Admin
                        </a>
                        <i class="fas fa-chevron-right text-xs text-gray-400"></i>
                        <span class="text-gray-700 font-semibold">@yield('title')</span>
                    </div>
                </div>

                <!-- Right: Notifications & User -->
                <div class="flex items-center space-x-3">
                    <!-- Search Bar (Optional) -->
                    <div class="hidden lg:flex items-center bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl px-4 py-2 border border-orange-200">
                        <i class="fas fa-search text-orange-400 mr-2"></i>
                        <input type="text" placeholder="Cari sesuatu..." class="bg-transparent text-sm text-gray-700 outline-none w-48 placeholder-orange-400/60">
                    </div>

                    <!-- Notifications -->
                    <div class="relative">
                        <button id="notifButton" class="relative w-11 h-11 flex items-center justify-center text-gray-600 hover:text-orange-600 rounded-xl hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 transition-all duration-300 group">
                            <i class="fas fa-bell text-xl group-hover:animate-bounce"></i>
                            <span class="absolute top-1 right-1 w-5 h-5 bg-gradient-to-r from-red-500 to-orange-500 text-white text-xs rounded-full flex items-center justify-center font-bold shadow-lg animate-pulse">3</span>
                        </button>
                        
                        <!-- Notifications Dropdown -->
                        <div id="notifDropdown" class="absolute right-0 mt-3 w-96 bg-white rounded-2xl shadow-2xl border border-orange-100 hidden overflow-hidden">
                            <div class="p-5 border-b border-orange-100 bg-gradient-to-r from-orange-50 to-amber-50">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-bold text-gray-800 flex items-center gap-2">
                                        <i class="fas fa-bell text-orange-500"></i>
                                        Notifikasi
                                    </h3>
                                    <span class="bg-gradient-to-r from-orange-500 to-amber-500 text-white text-xs px-3 py-1 rounded-full font-bold">3 Baru</span>
                                </div>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="flex items-start p-4 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 border-b border-orange-50 transition-all duration-200 group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-check text-white text-lg"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-800 mb-1">Pesanan #1234 selesai</p>
                                        <p class="text-sm text-gray-500 flex items-center gap-1">
                                            <i class="fas fa-clock text-xs"></i>
                                            2 menit yang lalu
                                        </p>
                                    </div>
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                </a>
                                <a href="#" class="flex items-start p-4 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 border-b border-orange-50 transition-all duration-200 group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-coffee text-white text-lg"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-800 mb-1">Menu baru ditambahkan</p>
                                        <p class="text-sm text-gray-500 flex items-center gap-1">
                                            <i class="fas fa-clock text-xs"></i>
                                            1 jam yang lalu
                                        </p>
                                    </div>
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                </a>
                                <a href="#" class="flex items-start p-4 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 transition-all duration-200 group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-star text-white text-lg"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-800 mb-1">Review baru diterima</p>
                                        <p class="text-sm text-gray-500 flex items-center gap-1">
                                            <i class="fas fa-clock text-xs"></i>
                                            3 jam yang lalu
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t border-orange-100 bg-gradient-to-r from-orange-50 to-amber-50">
                                <a href="#" class="text-center block text-orange-600 hover:text-orange-700 font-semibold text-sm">
                                    Lihat semua notifikasi
                                    <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- User Menu -->
                    <div class="relative">
                        <button id="userMenuButton" class="flex items-center space-x-3 p-2 pr-4 rounded-xl hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 transition-all duration-300 group border border-transparent hover:border-orange-200">
                            <div class="relative">
                                <div class="w-11 h-11 rounded-xl overflow-hidden shadow-lg bg-amber-500 group-hover:scale-105 transition-transform duration-300">
                                    @if(auth()->user()->avatar)
                                        <img src="{{ asset(auth()->user()->avatar) }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-amber-500 via-orange-500 to-amber-600">
                                            <i class="fas fa-user text-white"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-semibold text-gray-800">{{ auth()->user()->name ?? 'Admin' }}</p>
                                <p class="text-xs text-gray-500">Administrator</p>
                            </div>
                            <i class="fas fa-chevron-down text-gray-400 text-xs group-hover:text-orange-500 transition-colors duration-300"></i>
                        </button>

                        <!-- User Dropdown -->
                        <div id="userDropdown" class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-2xl border border-orange-100 hidden overflow-hidden">
                            <div class="p-4 bg-gradient-to-r from-orange-50 to-amber-50 border-b border-orange-100">
                                <p class="font-bold text-gray-800">{{ auth()->user()->name ?? 'Admin' }}</p>
                                <p class="text-sm text-gray-600">{{ auth()->user()->email }}</p>
                            </div>
                            <a href="/admin/profile" class="flex items-center px-4 py-3 hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 text-gray-700 hover:text-orange-600 transition-all duration-200 group">
                                <div class="w-9 h-9 flex items-center justify-center bg-orange-100 rounded-lg mr-3 group-hover:bg-orange-200 transition-colors duration-200">
                                    <i class="fas fa-user-cog text-orange-600"></i>
                                </div>
                                <span class="font-medium">Pengaturan Profil</span>
                            </a>
                            <form method="POST" action="/logout" class="border-t border-orange-100">
                                @csrf
                                <button type="submit" class="w-full flex items-center px-4 py-3 hover:bg-gradient-to-r hover:from-red-50 hover:to-orange-50 text-red-600 hover:text-red-700 transition-all duration-200 group">
                                    <div class="w-9 h-9 flex items-center justify-center bg-red-100 rounded-lg mr-3 group-hover:bg-red-200 transition-colors duration-200">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </div>
                                    <span class="font-medium">Keluar</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
       <main class="p-6 md:p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-500 rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-layer-group text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl font-playfair font-bold text-gray-800">@yield('page-title', 'Dashboard')</h1>
                    <p class="text-gray-600 text-sm">@yield('page-description', 'Selamat datang di panel admin AmbaCoffe')</p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="animate-fade-in">
            @yield('content')
        </div>
    </main>

    <!-- Footer - FIXED DI BAWAH -->
    <footer class="bg-white border-t border-orange-100 fixed bottom-0 left-0 right-0 md:left-72 z-20 shadow-lg">
        <div class="px-6 md:px-8 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-600 text-sm">© 2024 <span class="font-semibold text-orange-600">AmbaCoffe</span>. All rights reserved.</p>
                <div class="flex items-center gap-6 text-sm text-gray-600">
                    <a href="#" class="hover:text-orange-600 transition-colors duration-200">Bantuan</a>
                    <a href="#" class="hover:text-orange-600 transition-colors duration-200">Dokumentasi</a>
                    <a href="#" class="hover:text-orange-600 transition-colors duration-200">Kontak</a>
                </div>
            </div>
        </div>
    </footer>
</div>


    <script>
        // Sidebar toggle for mobile
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            mobileOverlay.classList.toggle('hidden');
        });

        mobileOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
        });

        // Notifications dropdown
        const notifButton = document.getElementById('notifButton');
        const notifDropdown = document.getElementById('notifDropdown');

        notifButton.addEventListener('click', (e) => {
            e.stopPropagation();
            notifDropdown.classList.toggle('hidden');
            userDropdown.classList.add('hidden');
        });

        // User menu dropdown
        const userMenuButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        userMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle('hidden');
            notifDropdown.classList.add('hidden');
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!notifButton.contains(e.target) && !notifDropdown.contains(e.target)) {
                notifDropdown.classList.add('hidden');
            }
            if (!userMenuButton.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });

        // Add animation class
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fade-in {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                animation: fade-in 0.5s ease-out;
            }
        `;
        document.head.appendChild(style);
    </script>

    @yield('scripts')
</body>
</html>
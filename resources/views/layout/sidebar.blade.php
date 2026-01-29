<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        admin: {
                            50: '#F8FAFC',
                            100: '#F1F5F9',
                            200: '#E2E8F0',
                            300: '#CBD5E1',
                            400: '#94A3B8',
                            500: '#64748B',
                            600: '#475569',
                            700: '#334155',
                            800: '#1E293B',
                            900: '#0F172A',
                        },
                        primary: {
                            50: '#EFF6FF',
                            100: '#DBEAFE',
                            200: '#BFDBFE',
                            300: '#93C5FD',
                            400: '#60A5FA',
                            500: '#3B82F6',
                            600: '#2563EB',
                            700: '#1D4ED8',
                            800: '#1E40AF',
                            900: '#1E3A8A',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.3s ease-in-out',
                        'slide-in': 'slideIn 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-inter bg-admin-50 min-h-screen">
    <!-- Sidebar Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-admin-900 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50">
        <!-- Logo -->
        <div class="p-6 border-b border-admin-800">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                    <i class="fas fa-crown text-white"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold">Coffee Haven</h1>
                    <p class="text-admin-300 text-sm">Admin Panel</p>
                </div>
            </div>
        </div>

        <!-- User Profile -->
        <div class="p-6 border-b border-admin-800">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-700 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-cog text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold">{{ auth()->user()->name ?? 'Administrator' }}</h3>
                    <p class="text-admin-300 text-sm">Admin</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="p-4 space-y-2">
            <a href="/admin/dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-admin-800 transition duration-200 {{ request()->is('admin/dashboard') ? 'bg-admin-800 text-primary-300' : 'text-admin-300' }}">
                <i class="fas fa-chart-line w-5"></i>
                <span>Dashboard</span>
            </a>
            
            <a href="/admin/menu" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-admin-800 transition duration-200 {{ request()->is('admin/menu*') ? 'bg-admin-800 text-primary-300' : 'text-admin-300' }}">
                <i class="fas fa-coffee w-5"></i>
                <span>Manajemen Menu</span>
            </a>
            
            <a href="/admin/orders" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-admin-800 transition duration-200 {{ request()->is('admin/orders*') ? 'bg-admin-800 text-primary-300' : 'text-admin-300' }}">
                <i class="fas fa-clipboard-list w-5"></i>
                <span>Manajemen Order</span>
                <span class="ml-auto bg-primary-600 text-xs px-2 py-1 rounded-full">12</span>
            </a>
            
            <div class="pt-4">
                <p class="px-4 text-admin-400 text-sm font-medium mb-2">SETTINGS</p>
                <a href="/admin/profile" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-admin-800 transition duration-200 {{ request()->is('admin/profile') ? 'bg-admin-800 text-primary-300' : 'text-admin-300' }}">
                    <i class="fas fa-user w-5"></i>
                    <span>Profile & Settings</span>
                </a>
                
                <form method="POST" action="/logout" class="block">
                    @csrf
                    <button type="submit" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-red-900/30 text-admin-300 hover:text-red-300 transition duration-200">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-admin-800">
            <div class="text-center text-admin-400 text-sm">
                <p>v1.0.0</p>
                <p class="text-xs mt-1">© 2023 Coffee Haven</p>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="md:ml-64">
        <!-- Top Bar -->
        <header class="bg-white shadow-sm sticky top-0 z-30">
            <div class="flex items-center justify-between px-6 py-4">
                <!-- Left: Menu Button & Breadcrumb -->
                <div class="flex items-center space-x-4">
                    <button id="sidebarToggle" class="md:hidden text-admin-600 hover:text-primary-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <div class="hidden md:flex items-center space-x-2 text-sm text-admin-500">
                        <a href="/admin/dashboard" class="hover:text-primary-600">Admin</a>
                        <i class="fas fa-chevron-right text-xs"></i>
                        <span class="text-admin-700 font-medium">@yield('title')</span>
                    </div>
                </div>

                <!-- Right: Notifications & User -->
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <div class="relative">
                        <button id="notifButton" class="relative p-2 text-admin-500 hover:text-primary-600 rounded-lg hover:bg-admin-100">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        
                        <!-- Notifications Dropdown -->
                        <div id="notifDropdown" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl border border-admin-200 hidden">
                            <div class="p-4 border-b">
                                <h3 class="font-semibold text-admin-800">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="flex items-start p-4 hover:bg-admin-50 border-b">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-check text-green-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-admin-800">Order #1234 completed</p>
                                        <p class="text-sm text-admin-500">2 minutes ago</p>
                                    </div>
                                </a>
                                <a href="#" class="flex items-start p-4 hover:bg-admin-50 border-b">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-plus text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-admin-800">New menu item added</p>
                                        <p class="text-sm text-admin-500">1 hour ago</p>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t">
                                <a href="#" class="text-primary-600 hover:text-primary-700 font-medium">View all notifications</a>
                            </div>
                        </div>
                    </div>

                    <!-- User Menu -->
                    <div class="relative">
                        <button id="userMenuButton" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-admin-100">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-medium text-admin-800">{{ auth()->user()->name ?? 'Admin' }}</p>
                                <p class="text-xs text-admin-500">Administrator</p>
                            </div>
                            <i class="fas fa-chevron-down text-admin-400 text-sm"></i>
                        </button>

                        <!-- User Dropdown -->
                        <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-admin-200 hidden">
                            <a href="/admin/profile" class="flex items-center px-4 py-3 hover:bg-admin-50 text-admin-700">
                                <i class="fas fa-user-cog mr-3 text-admin-500"></i>
                                <span>Profile Settings</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 hover:bg-admin-50 text-admin-700">
                                <i class="fas fa-cog mr-3 text-admin-500"></i>
                                <span>System Settings</span>
                            </a>
                            <form method="POST" action="/logout" class="border-t">
                                @csrf
                                <button type="submit" class="w-full flex items-center px-4 py-3 hover:bg-red-50 text-red-600">
                                    <i class="fas fa-sign-out-alt mr-3"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="p-6">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-2xl md:text-3xl font-bold text-admin-800 mb-2">@yield('page-title', 'Dashboard')</h1>
                <p class="text-admin-500">@yield('page-description', 'Overview and analytics')</p>
            </div>

            <!-- Content -->
            @yield('content')
        </main>
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
        });

        // User menu dropdown
        const userMenuButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        userMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle('hidden');
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

        // Auto-hide notifications after 5 seconds
        setTimeout(() => {
            notifDropdown.classList.add('hidden');
        }, 5000);
    </script>

    @yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmbaCoffe - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            50: '#FEFAF6',
                            100: '#F5E6D3',
                            200: '#E8D1B5',
                            300: '#D4B28A',
                            400: '#C19A6B',
                            500: '#8B4513',
                            600: '#7A3D11',
                            700: '#5C3317',
                            800: '#45250F',
                            900: '#2C190A',
                        }
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'playfair': ['Playfair Display', 'serif'],
                    },
                    backgroundImage: {
                        'coffee-pattern': "url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920')",
                        'hero-gradient': 'linear-gradient(to right, rgba(139, 69, 19, 0.9), rgba(92, 51, 23, 0.8))',
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'slide-in': 'slideIn 0.3s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #8B4513;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #5C3317;
        }
        
        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="font-poppins bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 min-h-screen">
    
    <!-- Modern Navbar with Glassmorphism -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-gray-200/50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Section -->
                <div class="flex items-center space-x-3">
                    <a href="/" class="flex items-center space-x-3 group">
                        <!-- Animated Logo -->
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl blur opacity-75 group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative bg-gradient-to-br from-amber-500 to-orange-600 p-3 rounded-2xl transform group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <i class="fas fa-mug-hot text-white text-2xl"></i>
                            </div>
                        </div>
                        <div>
                            <span class="text-2xl font-playfair font-bold bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">
                                AmbaCoffe
                            </span>
                            <div class="text-xs text-gray-500 -mt-1">Premium Coffee Shop</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="/" class="group px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:text-amber-600 transition-all duration-300 relative">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-home"></i>
                            Beranda
                        </span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-orange-500 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    
                    <a href="/about" class="group px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:text-amber-600 transition-all duration-300 relative">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-info-circle"></i>
                            Tentang
                        </span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-orange-500 group-hover:w-full transition-all duration-300"></div>
                    </a>

                    <!-- Mega Menu Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:text-amber-600 transition-all duration-300 flex items-center gap-2">
                            <i class="fas fa-coffee"></i>
                            Menu
                            <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
                        </button>
                        
                        <!-- Dropdown Content -->
                        <div class="absolute top-full left-0 mt-2 w-72 glass rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-4 border border-gray-200/50 overflow-hidden">
                            <div class="p-3 space-y-1">
                                <a href="/menu" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all duration-300 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-100 to-orange-100 rounded-xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-list text-amber-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-semibold">Detail Menu</div>
                                        <div class="text-xs text-gray-500">Lihat semua menu</div>
                                    </div>
                                </a>
                                
                                <a href="/cart" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all duration-300 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-100 to-orange-100 rounded-xl flex items-center justify-center group-hover/item:scale-110 transition-transform relative">
                                        <i class="fas fa-shopping-cart text-amber-600"></i>
                                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-bold">3</span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-semibold">Keranjang</div>
                                        <div class="text-xs text-gray-500">3 items</div>
                                    </div>
                                </a>
                                
                                <a href="/checkout" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all duration-300 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-100 to-orange-100 rounded-xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-cash-register text-amber-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-semibold">Checkout</div>
                                        <div class="text-xs text-gray-500">Proses pembayaran</div>
                                    </div>
                                </a>
                                
                                <a href="/order-status" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all duration-300 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-100 to-orange-100 rounded-xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-clipboard-list text-amber-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-semibold">Status Pesanan</div>
                                        <div class="text-xs text-gray-500">Lacak pesanan</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="/gallery" class="group px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:text-amber-600 transition-all duration-300 relative">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-images"></i>
                            Galeri
                        </span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-orange-500 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    
                    <a href="/contact" class="group px-4 py-2.5 rounded-xl font-medium text-gray-700 hover:text-amber-600 transition-all duration-300 relative">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-phone-alt"></i>
                            Kontak
                        </span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-orange-500 group-hover:w-full transition-all duration-300"></div>
                    </a>
                </div>

                <!-- Right Section: User & Actions -->
                <div class="flex items-center space-x-3">
                    <!-- User Profile -->
                    <div class="hidden md:flex items-center gap-3 px-4 py-2 bg-white/50 rounded-xl border border-gray-200/50">
                        <div class="w-9 h-9 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <div class="hidden lg:block">
                            <div class="text-sm font-semibold text-gray-800">{{ auth()->user()->name ?? 'Guest' }}</div>
                            <div class="text-xs text-gray-500">Member</div>
                        </div>
                    </div>

                    <!-- Logout Button -->
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="group relative px-5 py-2.5 bg-gradient-to-r from-amber-500 to-orange-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="hidden md:inline">Logout</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-amber-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>
                    </form>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuButton" class="lg:hidden p-2.5 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded-xl transition-all duration-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden glass border-t border-gray-200/50 animate-slide-in">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-2">
                <!-- User Info Mobile -->
                <div class="flex items-center gap-3 p-4 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-800">{{ auth()->user()->name ?? 'Guest' }}</div>
                        <div class="text-sm text-gray-600">Member AmbaCoffe</div>
                    </div>
                </div>

                <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all">
                    <i class="fas fa-home w-5"></i>
                    <span class="font-medium">Beranda</span>
                </a>
                
                <a href="/about" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all">
                    <i class="fas fa-info-circle w-5"></i>
                    <span class="font-medium">Tentang Kami</span>
                </a>
                
                <!-- Mobile Menu Dropdown -->
                <div class="space-y-1">
                    <button id="mobileMenuToggle" class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-coffee w-5"></i>
                            <span class="font-medium">Menu</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm transition-transform" id="mobileMenuIcon"></i>
                    </button>
                    
                    <div id="mobileSubMenu" class="hidden ml-8 space-y-1 bg-amber-50/50 rounded-xl p-2">
                        <a href="/menu" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 hover:text-amber-600 hover:bg-white transition-all">
                            <i class="fas fa-list text-sm"></i>
                            <span>Detail Menu</span>
                        </a>
                        <a href="/cart" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 hover:text-amber-600 hover:bg-white transition-all">
                            <i class="fas fa-shopping-cart text-sm"></i>
                            <span>Keranjang</span>
                            <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
                        </a>
                        <a href="/checkout" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 hover:text-amber-600 hover:bg-white transition-all">
                            <i class="fas fa-cash-register text-sm"></i>
                            <span>Checkout</span>
                        </a>
                        <a href="/order-status" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 hover:text-amber-600 hover:bg-white transition-all">
                            <i class="fas fa-clipboard-list text-sm"></i>
                            <span>Status Pesanan</span>
                        </a>
                    </div>
                </div>
                
                <a href="/gallery" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all">
                    <i class="fas fa-images w-5"></i>
                    <span class="font-medium">Galeri</span>
                </a>
                
                <a href="/contact" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition-all">
                    <i class="fas fa-phone-alt w-5"></i>
                    <span class="font-medium">Kontak</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content with padding for fixed navbar -->
    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    <!-- Modern Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-amber-900 text-white overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Footer Content -->
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="bg-gradient-to-br from-amber-500 to-orange-600 p-3 rounded-2xl shadow-lg">
                            <i class="fas fa-mug-hot text-white text-2xl"></i>
                        </div>
                        <div>
                            <div class="text-2xl font-playfair font-bold">AmbaCoffe</div>
                            <div class="text-xs text-amber-200">Premium Coffee Shop</div>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Tempat terbaik untuk menikmati kopi berkualitas premium dengan suasana yang nyaman dan pelayanan terbaik.
                    </p>
                    <!-- Social Media -->
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-amber-500 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-amber-500 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-amber-500 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-amber-500 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-amber-500 to-orange-500 rounded-full"></div>
                        Navigasi Cepat
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="/" class="text-gray-300 hover:text-amber-400 transition-colors flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/menu" class="text-gray-300 hover:text-amber-400 transition-colors flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Menu Kopi
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="text-gray-300 hover:text-amber-400 transition-colors flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="/gallery" class="text-gray-300 hover:text-amber-400 transition-colors flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Galeri
                            </a>
                        </li>
                        <li>
                            <a href="/contact" class="text-gray-300 hover:text-amber-400 transition-colors flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Operating Hours -->
                <div>
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-amber-500 to-orange-500 rounded-full"></div>
                        Jam Operasional
                    </h3>
                    <div class="space-y-4">
                        <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-amber-300 font-semibold">Senin - Jumat</span>
                                <span class="text-sm px-2 py-1 bg-green-500/20 text-green-300 rounded-lg">Buka</span>
                            </div>
                            <div class="text-gray-300 font-mono">07:00 - 22:00</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-amber-300 font-semibold">Sabtu - Minggu</span>
                                <span class="text-sm px-2 py-1 bg-green-500/20 text-green-300 rounded-lg">Buka</span>
                            </div>
                            <div class="text-gray-300 font-mono">08:00 - 23:00</div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-amber-500 to-orange-500 rounded-full"></div>
                        Hubungi Kami
                    </h3>
                    <div class="space-y-4">
                        <div class="flex gap-4 items-start group">
                            <div class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-amber-500 transition-all">
                                <i class="fas fa-map-marker-alt text-amber-400 group-hover:text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-amber-300 mb-1">Alamat</div>
                                <div class="text-gray-300 text-sm">Jl. Kopi Sejahtera No. 123, Jakarta Selatan</div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 items-start group">
                            <div class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-amber-500 transition-all">
                                <i class="fas fa-phone text-amber-400 group-hover:text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-amber-300 mb-1">Telepon</div>
                                <div class="text-gray-300 text-sm">(021) 1234-5678</div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 items-start group">
                            <div class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-amber-500 transition-all">
                                <i class="fas fa-envelope text-amber-400 group-hover:text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-amber-300 mb-1">Email</div>
                                <div class="text-gray-300 text-sm">info@ambacoffe.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-white/10 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-gray-400 text-sm text-center md:text-left">
                        &copy; 2024 <span class="text-amber-400 font-semibold">AmbaCoffe</span>. All rights reserved.
                    </div>
                    <div class="flex gap-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 text-white rounded-full shadow-lg opacity-0 invisible hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 z-40">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuButton.addEventListener('click', function() {
            const icon = this.querySelector('i');
            
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Mobile submenu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileSubMenu = document.getElementById('mobileSubMenu');
        const mobileMenuIcon = document.getElementById('mobileMenuIcon');
        
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileSubMenu.classList.toggle('hidden');
                mobileMenuIcon.classList.toggle('rotate-180');
            });
        }

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('opacity-0', 'invisible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.querySelector('nav');
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
            
            lastScroll = currentScroll;
        });
    </script>

    @yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Haven - @yield('title')</title>
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
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins bg-coffee-50 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="/" class="flex items-center space-x-2 group">
                        <div class="bg-coffee-500 p-2 rounded-lg group-hover:bg-coffee-600 transition duration-300">
                            <i class="fas fa-mug-hot text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-playfair font-bold text-coffee-700">AmbaCoffe</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-coffee-500 hover:bg-coffee-50 transition duration-300">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    
                    <a href="/about" class="px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-coffee-500 hover:bg-coffee-50 transition duration-300">
                        <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                    </a>

                    <!-- Menu Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-coffee-500 hover:bg-coffee-50 transition duration-300 flex items-center">
                            <i class="fas fa-coffee mr-2"></i>Menu
                            <i class="fas fa-chevron-down ml-1 text-sm"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                            <a href="/menu" class="block px-4 py-3 text-gray-700 hover:bg-coffee-50 hover:text-coffee-500 transition duration-200">
                                <i class="fas fa-list mr-2"></i>Detail Menu
                            </a>
                            <a href="/cart" class="block px-4 py-3 text-gray-700 hover:bg-coffee-50 hover:text-coffee-500 transition duration-200">
                                <i class="fas fa-shopping-cart mr-2"></i>Keranjang
                                <span class="bg-coffee-500 text-white text-xs px-2 py-1 rounded-full ml-2">3</span>
                            </a>
                            <a href="/checkout" class="block px-4 py-3 text-gray-700 hover:bg-coffee-50 hover:text-coffee-500 transition duration-200">
                                <i class="fas fa-cash-register mr-2"></i>Checkout
                            </a>
                            <a href="/order-status" class="block px-4 py-3 text-gray-700 hover:bg-coffee-50 hover:text-coffee-500 transition duration-200">
                                <i class="fas fa-clipboard-list mr-2"></i>Status Pesanan
                            </a>
                        </div>
                    </div>

                    <a href="/gallery" class="px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-coffee-500 hover:bg-coffee-50 transition duration-300">
                        <i class="fas fa-images mr-2"></i>Galeri
                    </a>
                    
                    <a href="/contact" class="px-4 py-2 rounded-lg font-medium text-gray-700 hover:text-coffee-500 hover:bg-coffee-50 transition duration-300">
                        <i class="fas fa-phone-alt mr-2"></i>Kontak
                    </a>
                </div>

                <!-- User Menu & Mobile Button -->
                <div class="flex items-center space-x-4">
                    <!-- User Info -->
                    <div class="hidden md:flex items-center space-x-3">
                        <div class="w-8 h-8 bg-coffee-500 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="text-gray-700 font-medium">{{ auth()->user()->name ?? 'Guest' }}</span>
                    </div>

                    <!-- Logout Form -->
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="bg-coffee-500 text-white px-4 py-2 rounded-lg hover:bg-coffee-600 transition duration-300 flex items-center">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span class="hidden md:inline">Logout</span>
                        </button>
                    </form>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuButton" class="md:hidden text-gray-700 hover:text-coffee-500">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white border-t">
            <div class="px-4 py-3 space-y-1">
                <a href="/" class="block px-3 py-2 rounded-lg text-gray-700 hover:text-coffee-500 hover:bg-coffee-50">
                    <i class="fas fa-home mr-2"></i>Beranda
                </a>
                <a href="/about" class="block px-3 py-2 rounded-lg text-gray-700 hover:text-coffee-500 hover:bg-coffee-50">
                    <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                </a>
                <div class="px-3 py-2">
                    <div class="font-medium text-gray-700 mb-2">
                        <i class="fas fa-coffee mr-2"></i>Menu
                    </div>
                    <div class="ml-4 space-y-2">
                        <a href="/menu" class="block px-3 py-2 rounded-lg text-gray-600 hover:text-coffee-500 hover:bg-coffee-50">
                            <i class="fas fa-list mr-2"></i>Detail Menu
                        </a>
                        <a href="/cart" class="block px-3 py-2 rounded-lg text-gray-600 hover:text-coffee-500 hover:bg-coffee-50">
                            <i class="fas fa-shopping-cart mr-2"></i>Keranjang
                        </a>
                        <a href="/checkout" class="block px-3 py-2 rounded-lg text-gray-600 hover:text-coffee-500 hover:bg-coffee-50">
                            <i class="fas fa-cash-register mr-2"></i>Checkout
                        </a>
                        <a href="/order-status" class="block px-3 py-2 rounded-lg text-gray-600 hover:text-coffee-500 hover:bg-coffee-50">
                            <i class="fas fa-clipboard-list mr-2"></i>Status Pesanan
                        </a>
                    </div>
                </div>
                <a href="/gallery" class="block px-3 py-2 rounded-lg text-gray-700 hover:text-coffee-500 hover:bg-coffee-50">
                    <i class="fas fa-images mr-2"></i>Galeri
                </a>
                <a href="/contact" class="block px-3 py-2 rounded-lg text-gray-700 hover:text-coffee-500 hover:bg-coffee-50">
                    <i class="fas fa-phone-alt mr-2"></i>Kontak
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-coffee-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-white p-2 rounded-lg">
                            <i class="fas fa-mug-hot text-coffee-600 text-xl"></i>
                        </div>
                        <span class="text-2xl font-playfair font-bold">Coffee Haven</span>
                    </div>
                    <p class="text-coffee-200">Tempat terbaik untuk menikmati kopi berkualitas dengan suasana yang nyaman.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-coffee-200 hover:text-white transition">Beranda</a></li>
                        <li><a href="/menu" class="text-coffee-200 hover:text-white transition">Menu</a></li>
                        <li><a href="/about" class="text-coffee-200 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="/contact" class="text-coffee-200 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Jam Operasional</h3>
                    <ul class="space-y-2 text-coffee-200">
                        <li class="flex justify-between">
                            <span>Senin - Jumat</span>
                            <span>07:00 - 22:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu - Minggu</span>
                            <span>08:00 - 23:00</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="text-coffee-200">Jl. Kopi Sejahtera No. 123</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone"></i>
                            <span class="text-coffee-200">(021) 1234-5678</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope"></i>
                            <span class="text-coffee-200">info@coffeehaven.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-coffee-700 mt-8 pt-8 text-center text-coffee-200">
                <p>&copy; 2023 Coffee Haven. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
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

        // Dropdown menu on mobile
        document.querySelectorAll('#mobileMenu .has-submenu').forEach(item => {
            item.addEventListener('click', function(e) {
                if (window.innerWidth < 768) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('hidden');
                }
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
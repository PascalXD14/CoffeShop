@extends('layout.navbar')

@section('title', 'Beranda - AmbaCoffe')

@section('content')
    <!-- Hero Section - Modern Glass Morphism -->
    <section class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920')] bg-cover bg-center opacity-10 mix-blend-multiply"></div>
            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-amber-300/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-300/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8 animate-fade-in">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-lg">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium text-gray-700">Buka Sekarang</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                        <span class="bg-gradient-to-r from-amber-600 via-orange-600 to-amber-700 bg-clip-text text-transparent">
                            Kopi Premium
                        </span>
                        <br>
                        <span class="text-gray-800">Untuk Hari Anda ☕</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-xl">
                        Rasakan pengalaman kopi autentik dengan biji pilihan terbaik, diseduh sempurna oleh barista profesional kami.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/menu" class="group relative px-8 py-4 bg-gradient-to-r from-amber-600 to-orange-600 text-white rounded-2xl font-semibold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                <i class="fas fa-coffee"></i>
                                Jelajahi Menu
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-amber-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        
                        <a href="/gallery" class="group px-8 py-4 bg-white/80 backdrop-blur-sm text-gray-800 rounded-2xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-200 flex items-center justify-center gap-2">
                            <i class="fas fa-play-circle"></i>
                            Lihat Galeri
                        </a>
                    </div>
                    
                    <!-- Stats Mini -->
                    <div class="flex gap-8 pt-8">
                        <div>
                            <div class="text-3xl font-bold text-amber-600">50+</div>
                            <div class="text-sm text-gray-600">Jenis Kopi</div>
                        </div>
                        <div class="border-l border-gray-300"></div>
                        <div>
                            <div class="text-3xl font-bold text-amber-600">1K+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div class="border-l border-gray-300"></div>
                        <div>
                            <div class="text-3xl font-bold text-amber-600">4.9</div>
                            <div class="text-sm text-gray-600">Rating</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Visual -->
                <div class="relative hidden lg:block">
                    <div class="relative w-full h-[600px]">
                        <!-- Main Card -->
                        <div class="absolute top-0 right-0 w-80 h-96 bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-6 transform rotate-6 hover:rotate-3 transition-transform duration-500">
                        <img 
                            src="{{ asset('images/coffee-card.jpg') }}" 
                            class="w-full h-48 object-cover rounded-2xl mb-4"
                            alt="Coffee Image">
                            <div class="space-y-2">
                                <div class="h-4 bg-gray-200 rounded-full w-3/4"></div>
                                <div class="h-4 bg-gray-200 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        
                        <!-- Accent Card -->
                        <div class="absolute bottom-20 left-0 w-64 h-80 rounded-3xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/coffee2.jpg') }}" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute top-20 left-20 bg-white rounded-2xl shadow-xl p-4 transform hover:scale-110 transition-transform duration-300">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-star text-amber-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-800">4.9/5</div>
                                    <div class="text-xs text-gray-600">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-amber-600 text-2xl"></i>
        </div>
    </section>

    <!-- Menu Section - Bento Grid Style -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-100/50 rounded-full blur-3xl -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <div class="inline-block px-4 py-2 bg-amber-100 rounded-full">
                    <span class="text-amber-700 font-semibold text-sm">☕ MENU SPESIAL</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Kopi Favorit <span class="text-amber-600">Pilihan</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Setiap cangkir disiapkan dengan penuh perhatian dan cinta untuk pengalaman terbaik Anda
                </p>
            </div>

            @if($products->count())
                <!-- Product Grid - Modern Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    @foreach($products->take(3) as $product)
                    <div class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <!-- Image Container -->
                        <div class="relative h-64 overflow-hidden bg-gradient-to-br from-amber-100 to-orange-100">
                            @if($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-coffee text-amber-300 text-6xl"></i>
                                </div>
                            @endif
                            
                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <!-- Price Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                                <span class="text-amber-700 font-bold text-sm">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            
                            <!-- Quick Action -->
                            <div class="absolute top-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-amber-600 hover:text-white transition-colors">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 space-y-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                                    {{ $product->name }}
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">
                                    Kopi spesial dengan aroma yang khas dan rasa yang mendalam
                                </p>
                            </div>
                            
                            <!-- Rating & Action -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-1">
                                    @for($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star text-xs {{ $i < 4 ? 'text-amber-400' : 'text-gray-300' }}"></i>
                                    @endfor
                                    <span class="text-sm text-gray-600 ml-2">(4.5)</span>
                                </div>
                                
                                <button class="group/btn relative px-6 py-2.5 bg-gradient-to-r from-amber-600 to-orange-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                                    <span class="relative z-10 flex items-center gap-2 text-sm">
                                        <i class="fas fa-plus"></i>
                                        Pesan
                                    </span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-amber-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- View All Button -->
                <div class="text-center">
                    <a href="/menu" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-gray-900 to-gray-800 text-white rounded-2xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                        <span>Lihat Semua Menu</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            @else
                <div class="text-center py-20">
                    <div class="w-32 h-32 mx-auto mb-6 bg-amber-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-coffee text-amber-400 text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Menu Sedang Disiapkan</h3>
                    <p class="text-gray-600 max-w-md mx-auto">Kami sedang menyiapkan menu kopi spesial yang luar biasa untuk Anda. Nantikan!</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Features Section - Icon Boxes -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-amber-50/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Mengapa <span class="text-amber-600">AmbaCoffe</span>?
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Komitmen kami adalah memberikan pengalaman kopi terbaik untuk setiap pelanggan
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-amber-100 rounded-full blur-3xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fas fa-seedling text-white text-2xl"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Biji Kopi Premium</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dipilih langsung dari perkebunan terbaik di Indonesia dan dunia untuk kualitas maksimal
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-orange-100 rounded-full blur-3xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fas fa-user-tie text-white text-2xl"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Barista Profesional</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tim barista bersertifikat dengan pengalaman bertahun-tahun dalam seni menyeduh kopi
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-yellow-100 rounded-full blur-3xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fas fa-truck-fast text-white text-2xl"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pengiriman Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pesanan Anda akan diantar dengan cepat dan dijaga kualitasnya hingga sampai tangan Anda
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Modern Split Design -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900 via-orange-800 to-amber-900"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920')] bg-cover bg-center opacity-10"></div>
        
        <!-- Animated Blobs -->
        <div class="absolute top-20 left-20 w-96 h-96 bg-amber-600/30 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-orange-600/30 rounded-full blur-3xl animate-pulse delay-1000"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-12 md:p-16 shadow-2xl border border-white/20">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full">
                            <span class="text-white font-semibold text-sm">🎉 PROMO SPESIAL</span>
                        </div>
                        
                        <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                            Siap Menikmati Kopi Terbaik?
                        </h2>
                        
                        <p class="text-xl text-amber-100">
                            Dapatkan diskon <span class="text-3xl font-bold text-white">20%</span> untuk pembelian pertama Anda! Penawaran terbatas.
                        </p>
                        
                        <!-- Benefits List -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Gratis ongkir untuk pembelian pertama</span>
                            </div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Poin reward untuk setiap pembelian</span>
                            </div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Konsultasi gratis dengan barista</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="/menu" class="group px-8 py-4 bg-white text-amber-900 rounded-2xl font-bold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2">
                                <i class="fas fa-shopping-bag"></i>
                                Pesan Sekarang
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="/contact" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-bold border-2 border-white/30 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2">
                                <i class="fas fa-phone-alt"></i>
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Visual -->
                    <div class="hidden lg:block relative">
                        <div class="relative">
                            <!-- Coffee Cup Illustration -->
                            <div class="w-full aspect-square bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <i class="fas fa-mug-hot text-white text-9xl opacity-50"></i>
                            </div>
                            
                            <!-- Floating Stats -->
                            <div class="absolute top-10 -left-10 bg-white rounded-2xl p-4 shadow-xl transform hover:scale-110 transition-transform">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-amber-600">20%</div>
                                    <div class="text-xs text-gray-600">Diskon</div>
                                </div>
                            </div>
                            
                            <div class="absolute bottom-10 -right-10 bg-white rounded-2xl p-4 shadow-xl transform hover:scale-110 transition-transform">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-amber-600">Free</div>
                                    <div class="text-xs text-gray-600">Ongkir</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Enhanced add to cart animation
    document.querySelectorAll('button').forEach(button => {
        if (button.textContent.includes('Pesan')) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const originalHTML = this.innerHTML;
                
                // Success animation
                this.innerHTML = '<i class="fas fa-check mr-2"></i>Ditambahkan!';
                this.classList.add('scale-95');
                
                setTimeout(() => {
                    this.classList.remove('scale-95');
                }, 100);
                
                setTimeout(() => {
                    this.innerHTML = originalHTML;
                }, 2000);
            });
        }
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
</script>
@endsection
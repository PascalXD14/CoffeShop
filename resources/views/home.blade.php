@extends('layout.navbar')

@section('title', 'Beranda - AmbaCoffe')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-hero-gradient">
        <div class="absolute inset-0 bg-coffee-pattern bg-cover bg-center opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-24 md:py-32">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-playfair font-bold text-white mb-6">
                    Selamat Datang di 
                    <span class="block text-coffee-200">AmbaCoffe ☕</span>
                </h1>
                <p class="text-xl text-coffee-100 mb-8">
                    Temukan pengalaman terbaik menikmati kopi berkualitas dengan racikan spesial dari barista berpengalaman kami.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/menu" class="bg-white text-coffee-700 px-6 py-3 rounded-lg font-medium hover:bg-coffee-50 transition duration-300 shadow-lg">
                        <i class="fas fa-coffee mr-2"></i>Lihat Menu
                    </a>
                    <a href="/gallery" class="bg-coffee-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-coffee-700 transition duration-300 shadow-lg">
                        <i class="fas fa-images mr-2"></i>Galeri Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-4xl font-bold text-coffee-600 mb-2">50+</div>
                    <div class="text-gray-600">Jenis Kopi</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-coffee-600 mb-2">1000+</div>
                    <div class="text-gray-600">Pelanggan Puas</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-coffee-600 mb-2">5</div>
                    <div class="text-gray-600">Cabang</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-coffee-600 mb-2">10+</div>
                    <div class="text-gray-600">Tahun Berpengalaman</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16 bg-coffee-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-playfair font-bold text-coffee-800 mb-4">Menu Kopi Favorit</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Nikmati berbagai pilihan kopi berkualitas tinggi yang disajikan dengan penuh cinta oleh barista profesional kami.</p>
            </div>

            @if($products->count())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $product)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-r from-coffee-400 to-coffee-600 flex items-center justify-center relative">
                                <div class="absolute top-4 right-4 bg-white/90 text-coffee-700 px-3 py-1 rounded-full text-sm font-medium">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}
                                </div>
                                <i class="fas fa-coffee text-white text-6xl opacity-80"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                                <p class="text-gray-600 mb-4">Kopi spesial dengan aroma yang khas dan rasa yang mendalam.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-amber-500">
                                        @for($i = 0; $i < 5; $i++)
                                            <i class="fas fa-star @if($i < 4) text-amber-500 @else text-gray-300 @endif"></i>
                                        @endfor
                                        <span class="ml-2 text-gray-600">(4.5)</span>
                                    </div>
                                    <button class="bg-coffee-500 text-white px-4 py-2 rounded-lg hover:bg-coffee-600 transition duration-300 flex items-center">
                                        <i class="fas fa-plus mr-2"></i>Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-12">
                    <a href="/menu" class="inline-flex items-center text-coffee-600 font-medium hover:text-coffee-700 transition duration-300">
                        Lihat Semua Menu
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="text-coffee-300 text-6xl mb-4">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Belum ada menu kopi</h3>
                    <p class="text-gray-600">Kami sedang menyiapkan menu spesial untuk Anda.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-playfair font-bold text-coffee-800 mb-4">Kenapa Memilih Kami?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami berkomitmen memberikan pengalaman terbaik untuk para pecinta kopi.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-xl hover:bg-coffee-50 transition duration-300">
                    <div class="w-16 h-16 bg-coffee-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-seedling text-coffee-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Biji Kopi Premium</h3>
                    <p class="text-gray-600">Menggunakan biji kopi pilihan terbaik dari perkebunan lokal dan impor.</p>
                </div>
                
                <div class="text-center p-6 rounded-xl hover:bg-coffee-50 transition duration-300">
                    <div class="w-16 h-16 bg-coffee-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-tie text-coffee-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Barista Profesional</h3>
                    <p class="text-gray-600">Disajikan oleh barista bersertifikat dengan pengalaman bertahun-tahun.</p>
                </div>
                
                <div class="text-center p-6 rounded-xl hover:bg-coffee-50 transition duration-300">
                    <div class="w-16 h-16 bg-coffee-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-truck text-coffee-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pengiriman Cepat</h3>
                    <p class="text-gray-600">Pesanan Anda akan kami antar dengan cepat dan kondisi terbaik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-coffee-700 to-coffee-900">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-playfair font-bold text-white mb-6">Siap Menikmati Kopi Terbaik?</h2>
            <p class="text-coffee-200 text-xl mb-8">Pesan sekarang dan dapatkan diskon 20% untuk pembelian pertama!</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" class="bg-white text-coffee-700 px-8 py-3 rounded-lg font-bold hover:bg-coffee-50 transition duration-300 shadow-lg">
                    <i class="fas fa-user-plus mr-2"></i>Daftar Sekarang
                </a>
                <a href="/contact" class="bg-coffee-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-coffee-500 transition duration-300 shadow-lg">
                    <i class="fas fa-phone-alt mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Add to cart animation
    document.querySelectorAll('button').forEach(button => {
        if (button.textContent.includes('Tambah')) {
            button.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check mr-2"></i>Ditambahkan';
                this.classList.remove('bg-coffee-500');
                this.classList.add('bg-green-500');
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.remove('bg-green-500');
                    this.classList.add('bg-coffee-500');
                }, 2000);
            });
        }
    });
</script>
@endsection
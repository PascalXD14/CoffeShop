@extends('layout.navbar')

@section('title', 'Detail Menu')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-amber-50 via-orange-50 to-coffee-50 py-12 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmNTk1NDUiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDEzNGg4djhIMzZ6bTE2LTE2aDh2OGgtOHptLTE2IDE2aDh2OGgtOHptMTYtMTZoOHY4aC04em0tMTYgMGg4djhoLTh6bTE2IDE2aDh2OGgtOHptLTE2LTE2aDh2OGgtOHptMTYgMTZoOHY4aC04eiIvPjwvZz48L2c+PC9zdmc+')] opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center space-y-4">
            <h1 class="text-5xl md:text-6xl font-playfair font-bold text-transparent bg-clip-text bg-gradient-to-r from-coffee-800 via-amber-700 to-orange-600">
                Daftar Menu AmbaCoffe
            </h1>
            
            <p class="text-coffee-600 text-lg max-w-2xl mx-auto">
                Nikmati kelezatan kopi pilihan dengan cita rasa istimewa
            </p>
        </div>
    </div>
</section>

<!-- Menu Grid Section -->
<section class="py-16 bg-gradient-to-b from-coffee-50 to-white">
    <div class="max-w-7xl mx-auto px-4">

        @if($products->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

            @foreach($products as $product)
            <a href="{{ route('menu.show', $product->id) }}" class="block">
            <div class="group relative bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-coffee-200">
                
                <!-- Badge/Label -->
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-gradient-to-r from-coffee-500 to-amber-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                        {{ $product->category }}
                    </span>
                </div>

                <!-- IMAGE Section -->
                <div class="relative h-56 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" 
                             alt="{{ $product->name }}"
                             class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out">
                    @else
                        <div class="h-full flex items-center justify-center bg-gradient-to-br from-coffee-100 to-amber-100">
                            <i class="fas fa-coffee text-7xl text-coffee-300 transform group-hover:scale-110 group-hover:rotate-12 transition duration-500"></i>
                        </div>
                    @endif
                    
                    <!-- Overlay Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>

                <!-- CONTENT Section -->
                <div class="p-5 space-y-4">
                    <!-- Title -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-coffee-700 transition duration-300 line-clamp-1">
                            {{ $product->name }}
                        </h3>
                        <div class="flex items-center gap-1 mt-1">
                            <i class="fas fa-star text-amber-400 text-xs"></i>
                            <i class="fas fa-star text-amber-400 text-xs"></i>
                            <i class="fas fa-star text-amber-400 text-xs"></i>
                            <i class="fas fa-star text-amber-400 text-xs"></i>
                            <i class="fas fa-star text-amber-400 text-xs"></i>
                            <span class="text-xs text-gray-500 ml-1">(4.9)</span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-dashed border-gray-200"></div>

                    <!-- Price & Action -->
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Harga</p>
                            <span class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-coffee-600 to-amber-600">
                                Rp{{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        </div>

                    <button class="group/btn relative bg-gradient-to-r from-coffee-600 to-amber-600 text-white px-5 py-2.5 rounded-lg hover:from-coffee-700 hover:to-amber-700 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-xl font-semibold text-sm flex items-center gap-2 overflow-hidden">
    <!-- Shine Effect -->
    <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/25 to-transparent -translate-x-full group-hover/btn:translate-x-full transition-transform duration-500"></span>
    
    <span class="relative">Pesan</span>
    <i class="fas fa-arrow-right relative text-xs group-hover/btn:translate-x-1 transition-transform duration-300"></i>
</button>
                    </div>
                </div>

                <!-- Decorative corner -->
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-br from-transparent via-coffee-50/30 to-coffee-100/50 rounded-tl-full transform translate-x-10 translate-y-10 group-hover:translate-x-8 group-hover:translate-y-8 transition duration-500"></div>
            </div>
            @endforeach

        </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full mb-6">
                    <i class="fas fa-coffee text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-700 mb-2">Belum Ada Menu</h3>
                <p class="text-gray-500">Menu akan segera tersedia. Silakan cek kembali nanti.</p>
            </div>
        @endif

    </div>
</section>

<!-- Decorative Wave -->
<div class="relative h-16 bg-white">
    <svg class="absolute bottom-0 w-full h-16 text-coffee-50" preserveAspectRatio="none" viewBox="0 0 1440 54" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 22L60 28C120 34 240 46 360 44C480 42 600 26 720 20C840 14 960 18 1080 24C1200 30 1320 38 1380 42L1440 46V54H1380C1320 54 1200 54 1080 54C960 54 840 54 720 54C600 54 480 54 360 54C240 54 120 54 60 54H0V22Z" fill="currentColor"/>
    </svg>
</div>
@endsection
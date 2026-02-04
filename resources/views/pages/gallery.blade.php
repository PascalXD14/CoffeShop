@extends('layout.navbar')

@section('title', 'Gallery')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmOTczMTYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzAtMS4xLS45LTItMi0ycy0yIC45LTIgMiAuOSAyIDIgMiAyLS45IDItMnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-40"></div>
    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-6 py-2 rounded-full shadow-lg mb-6">
            <i class="fas fa-camera text-orange-500"></i>
            <span class="text-sm font-semibold text-gray-700">Visual Experience</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-4">
            <span class="bg-gradient-to-r from-orange-600 to-amber-600 bg-clip-text text-transparent">Coffee Gallery</span>
        </h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Jelajahi koleksi momen istimewa dan suasana hangat di coffee shop kami
        </p>
    </div>
</div>

<!-- Gallery Section -->
<div class="max-w-7xl mx-auto px-6 py-16">
    
    <!-- Filter Tags -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">
        <button class="px-6 py-2.5 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">
            <i class="fas fa-images mr-2"></i>
            Semua Foto
        </button>
        <button class="px-6 py-2.5 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg border border-gray-200 hover:border-orange-300 transform hover:-translate-y-0.5 transition-all duration-300">
            <i class="fas fa-coffee mr-2"></i>
            Menu
        </button>
        <button class="px-6 py-2.5 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg border border-gray-200 hover:border-orange-300 transform hover:-translate-y-0.5 transition-all duration-300">
            <i class="fas fa-store mr-2"></i>
            Suasana
        </button>
        <button class="px-6 py-2.5 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg border border-gray-200 hover:border-orange-300 transform hover:-translate-y-0.5 transition-all duration-300">
            <i class="fas fa-users mr-2"></i>
            Moment
        </button>
    </div>

    <!-- Bento Grid Gallery -->
    <div class="grid grid-cols-4 gap-4 auto-rows-[200px]">
        
        <!-- Gallery Item 1 - Large (2x2) -->
        <div class="col-span-4 md:col-span-2 md:row-span-2 group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
            <img src="{{ asset('images/gallery1.jpg') }}" 
                 alt="Gallery 1"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                <h3 class="text-white text-xl font-bold mb-2">Coffee Vibes</h3>
                <p class="text-white/80 text-sm">Nikmati suasana hangat bersama secangkir kopi</p>
            </div>
            <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors duration-300">
                    <i class="fas fa-search-plus text-orange-600"></i>
                </button>
            </div>
        </div>

        <!-- Gallery Item 2 - Tall (1x2) -->
        <div class="col-span-2 md:col-span-1 md:row-span-2 group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
            <img src="{{ asset('images/gallery2.jpg') }}" 
                 alt="Gallery 2"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                <h3 class="text-white text-lg font-bold mb-1">Cozy Corner</h3>
                <p class="text-white/80 text-sm">Sudut favorit para penikmat kopi</p>
            </div>
            <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors duration-300">
                    <i class="fas fa-search-plus text-orange-600"></i>
                </button>
            </div>
        </div>

        <!-- Gallery Item 3 - Square -->
        <div class="col-span-2 md:col-span-1 md:row-span-1 group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
            <img src="{{ asset('images/gallery3.jpg') }}" 
                 alt="Gallery 3"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                <h3 class="text-white font-bold">Fresh Brew</h3>
                <p class="text-white/80 text-xs">Kopi segar setiap hari</p>
            </div>
            <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors duration-300">
                    <i class="fas fa-search-plus text-orange-600 text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Gallery Item 4 - Wide (2x1) -->
        <div class="col-span-4 md:col-span-2 md:row-span-1 group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
            <img src="{{ asset('images/gallery4.png') }}" 
                 alt="Gallery 4"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                <h3 class="text-white font-bold">Perfect Pour</h3>
                <p class="text-white/80 text-xs">Seni menuang kopi yang sempurna</p>
            </div>
            <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors duration-300">
                    <i class="fas fa-search-plus text-orange-600 text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Gallery Item 5 - Square -->
        <div class="col-span-2 md:col-span-1 md:row-span-1 group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
            <img src="{{ asset('images/gallery5.png') }}" 
                 alt="Gallery 5"
                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                <h3 class="text-white font-bold">Warm Ambience</h3>
                <p class="text-white/80 text-xs">Suasana hangat untuk bersantai</p>
            </div>
            <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors duration-300">
                    <i class="fas fa-search-plus text-orange-600 text-sm"></i>
                </button>
            </div>
        </div>

    </div>

    <!-- Load More Button -->
    <div class="text-center mt-16">
        <button class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold rounded-full shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
            <i class="fas fa-images"></i>
            Load More Photos
            <i class="fas fa-arrow-down animate-bounce"></i>
        </button>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-orange-500 via-amber-500 to-orange-500 py-20 mt-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-5 py-2 rounded-full mb-6">
            <i class="fas fa-camera text-white"></i>
            <span class="text-sm font-semibold text-white">Share Your Moment</span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Tag Momen Kamu Bersama Kami!
        </h2>
        <p class="text-xl text-white/90 mb-8">
            Gunakan hashtag <span class="font-bold">#AmbaCoffe</span> untuk kesempatan ditampilkan di gallery kami
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-orange-600 font-bold rounded-full shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                <i class="fab fa-instagram"></i>
                Follow Instagram
            </a>
            <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-full border-2 border-white hover:bg-white hover:text-orange-600 shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                <i class="fas fa-upload"></i>
                Upload Foto
            </a>
        </div>
    </div>
</div>
@endsection
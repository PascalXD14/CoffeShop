@extends('layout.navbar')

@section('title', 'Tentang Kami')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-amber-900 via-orange-800 to-amber-950 py-32 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxLTEuNzktNC00LTRzLTQgMS43OS00IDQgMS43OSA0IDQgNCA0LTEuNzkgNC00eiIvPjwvZz48L2c+PC9zdmc+')] opacity-20"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-6 py-2 rounded-full border border-white/20 mb-6 animate-fade-in-down">
            <i class="fas fa-coffee text-amber-300 animate-bounce"></i>
            <span class="text-sm font-semibold text-white">Our Story</span>
        </div>
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in-up">
            Tentang AmbaCoffe
        </h1>
        <p class="text-xl md:text-2xl text-amber-100 max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
            Lebih dari sekedar kopi, kami hadirkan pengalaman kehangatan dalam setiap cangkir
        </p>
    </div>
</div>

<!-- Main Story Section -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
        <!-- Left Content -->
        <div class="scroll-animate opacity-0 translate-x-[-50px]">
            <div class="inline-flex items-center gap-2 bg-orange-100 px-4 py-2 rounded-full mb-6 hover:scale-105 transition-transform duration-300">
                <i class="fas fa-heart text-orange-600 animate-pulse"></i>
                <span class="text-sm font-semibold text-orange-600">Cerita Kami</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 hover:text-orange-600 transition-colors duration-300">
                Premium Coffee Shop dengan Sentuhan Hangat
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                AmbaCoffe adalah coffee shop premium yang menyediakan kopi berkualitas tinggi 
                dengan suasana nyaman untuk bekerja, belajar, dan bersantai. Setiap cangkir kopi 
                kami dibuat dengan dedikasi dan cinta untuk memberikan pengalaman terbaik bagi Anda.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Kami percaya bahwa kopi bukan hanya minuman, tetapi juga cara untuk menghubungkan 
                orang-orang dan menciptakan momen berharga dalam kehidupan sehari-hari.
            </p>
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-125 group-hover:rotate-12 transition-all duration-500">
                        <i class="fas fa-check text-white"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-green-600 transition-colors duration-300">100% Organic</span>
                </div>
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-125 group-hover:rotate-12 transition-all duration-500">
                        <i class="fas fa-award text-white"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors duration-300">Premium Quality</span>
                </div>
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-125 group-hover:rotate-12 transition-all duration-500">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-purple-600 transition-colors duration-300">Eco Friendly</span>
                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative scroll-animate opacity-0 translate-x-[50px]">
            <div class="absolute -top-6 -right-6 w-72 h-72 bg-gradient-to-br from-orange-200 to-amber-200 rounded-3xl -z-10 animate-float"></div>
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group cursor-pointer">
                <img src="{{ asset('images/gallery3.jpg') }}" alt="AmbaCoffe" class="w-full h-[500px] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent group-hover:from-black/60 transition-all duration-500"></div>
            </div>
            <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-2xl hover:scale-110 hover:rotate-3 transition-all duration-500 cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-amber-500 rounded-2xl flex items-center justify-center animate-bounce-slow">
                        <i class="fas fa-coffee text-white text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-gray-800 counter" data-target="5000">0</p>
                        <p class="text-sm text-gray-600">Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="mb-20">
        <div class="text-center mb-16 scroll-animate opacity-0 translate-y-[30px]">
            <div class="inline-flex items-center gap-2 bg-orange-100 px-4 py-2 rounded-full mb-6 hover:scale-105 transition-transform duration-300">
                <i class="fas fa-star text-orange-600 animate-spin-slow"></i>
                <span class="text-sm font-semibold text-orange-600">Nilai Kami</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Apa yang Membuat Kami Berbeda
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Tiga pilar utama yang menjadi fondasi AmbaCoffe dalam melayani setiap pelanggan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="scroll-animate opacity-0 translate-y-[30px] group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl border border-orange-100 transition-all duration-500 hover:-translate-y-4 cursor-pointer" style="animation-delay: 0.1s;">
                <div class="w-20 h-20 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                    <i class="fas fa-coffee text-white text-3xl group-hover:animate-bounce"></i>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-gray-800 group-hover:text-orange-600 transition-colors duration-300">Premium Beans</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Kopi terbaik dari petani lokal Indonesia yang dipilih dengan teliti untuk menghasilkan cita rasa yang luar biasa.
                </p>
                <div class="flex items-center gap-2 text-orange-600 font-semibold group-hover:gap-4 transition-all duration-300">
                    <span>Selengkapnya</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-2 transition-transform duration-300"></i>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="scroll-animate opacity-0 translate-y-[30px] group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl border border-orange-100 transition-all duration-500 hover:-translate-y-4 cursor-pointer" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                    <i class="fas fa-home text-white text-3xl group-hover:animate-bounce"></i>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">Cozy Place</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Tempat nyaman untuk nongkrong dan bekerja dengan desain interior yang estetik dan suasana yang mendukung produktivitas.
                </p>
                <div class="flex items-center gap-2 text-orange-600 font-semibold group-hover:gap-4 transition-all duration-300">
                    <span>Selengkapnya</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-2 transition-transform duration-300"></i>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="scroll-animate opacity-0 translate-y-[30px] group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl border border-orange-100 transition-all duration-500 hover:-translate-y-4 cursor-pointer" style="animation-delay: 0.3s;">
                <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                    <i class="fas fa-comments text-white text-3xl group-hover:animate-bounce"></i>
                </div>
                <h3 class="font-bold text-2xl mb-4 text-gray-800 group-hover:text-green-600 transition-colors duration-300">Friendly Service</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Pelayanan ramah dan cepat dari tim kami yang berdedikasi untuk memberikan pengalaman terbaik bagi setiap pengunjung.
                </p>
                <div class="flex items-center gap-2 text-orange-600 font-semibold group-hover:gap-4 transition-all duration-300">
                    <span>Selengkapnya</span>
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-2 transition-transform duration-300"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="scroll-animate opacity-0 scale-95 bg-gradient-to-br from-orange-500 via-amber-500 to-orange-600 rounded-3xl p-12 md:p-16 shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="grid md:grid-cols-4 gap-8 text-center text-white relative z-10">
            <div class="group hover:scale-125 transition-transform duration-500 cursor-pointer">
                <div class="text-5xl md:text-6xl font-bold mb-2 counter" data-target="5000">0</div>
                <p class="text-orange-100 font-medium group-hover:text-white transition-colors duration-300">Happy Customers</p>
            </div>
            <div class="group hover:scale-125 transition-transform duration-500 cursor-pointer">
                <div class="text-5xl md:text-6xl font-bold mb-2 counter" data-target="50">0</div>
                <p class="text-orange-100 font-medium group-hover:text-white transition-colors duration-300">Menu Variants</p>
            </div>
            <div class="group hover:scale-125 transition-transform duration-500 cursor-pointer">
                <div class="text-5xl md:text-6xl font-bold mb-2 counter" data-target="3">0</div>
                <p class="text-orange-100 font-medium group-hover:text-white transition-colors duration-300">Store Locations</p>
            </div>
            <div class="group hover:scale-125 transition-transform duration-500 cursor-pointer">
                <div class="text-5xl md:text-6xl font-bold mb-2">100%</div>
                <p class="text-orange-100 font-medium group-hover:text-white transition-colors duration-300">Organic Beans</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-amber-50 via-orange-50 to-amber-50 py-20">
    <div class="max-w-4xl mx-auto px-6 text-center scroll-animate opacity-0 translate-y-[30px]">
        <div class="inline-flex items-center gap-2 bg-white px-5 py-2 rounded-full shadow-lg mb-6 hover:scale-105 transition-transform duration-300">
            <i class="fas fa-map-marker-alt text-orange-600 animate-bounce"></i>
            <span class="text-sm font-semibold text-gray-700">Visit Us</span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
            Kunjungi AmbaCoffe Terdekat
        </h2>
        <p class="text-xl text-gray-600 mb-8">
            Rasakan langsung pengalaman kopi premium dengan suasana yang nyaman
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/menu" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold rounded-full shadow-xl hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 group">
                <i class="fas fa-coffee group-hover:rotate-12 transition-transform duration-300"></i>
                Lihat Menu
            </a>
            <a href="/gallery" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-orange-600 font-bold rounded-full border-2 border-orange-300 hover:bg-orange-50 shadow-lg hover:shadow-xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 group">
                <i class="fas fa-images group-hover:rotate-12 transition-transform duration-300"></i>
                Gallery
            </a>
        </div>
    </div>
</div>

<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(3deg);
        }
    }

    @keyframes bounceSlow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes spinSlow {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounceSlow 2s ease-in-out infinite;
    }

    .animate-spin-slow {
        animation: spinSlow 3s linear infinite;
    }

    .scroll-animate {
        transition: all 0.8s ease-out;
    }

    .scroll-animate.show {
        opacity: 1 !important;
        transform: translateX(0) translateY(0) scale(1) !important;
    }
</style>

<script>
    // Scroll Animation Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));

    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const countUp = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => countUp(counter), 1);
        } else {
            counter.innerText = target + (target >= 1000 ? '+' : '');
        }
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                countUp(counter);
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));
</script>
@endsection
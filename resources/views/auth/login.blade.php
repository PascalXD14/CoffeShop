<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AmbaCoffe
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .coffee-gradient {
            background: linear-gradient(135deg, #8B4513 0%, #D2691E 50%, #A0522D 100%);
        }
        .coffee-text-gradient {
            background: linear-gradient(to right, #8B4513, #D2691E);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-6xl w-full flex flex-col md:flex-row rounded-2xl overflow-hidden shadow-2xl">
        <!-- Bagian kiri: Gambar dan konten visual -->
        <div class="md:w-1/2 coffee-gradient p-8 md:p-12 flex flex-col justify-between text-white">
            <div>
                <div class="flex items-center mb-10">
                    <i class="fas fa-mug-hot text-3xl mr-3"></i>
                    <h1 class="text-3xl font-bold">AmbaCoffe</h1>
                </div>
                
                <h2 class="text-2xl font-bold mb-6">Selamat Datang  </h2>
                <p class="text-gray-100 mb-8">Masuk ke akun Anda untuk menikmati pengalaman terbaik memesan kopi favorit Anda secara online.</p>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-bolt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Pesanan Cepat</h3>
                            <p class="text-gray-100">Pesan kopi favorit Anda dalam hitungan detik</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-gift text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Hadiah Eksklusif</h3>
                            <p class="text-gray-100">Dapatkan poin dan penawaran spesial untuk anggota</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-truck text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Pengiriman Gratis</h3>
                            <p class="text-gray-100">Gratis ongkir untuk pesanan pertama</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-10">
                <p class="text-center text-gray-100">"Kopi terbaik adalah yang dinikmati bersama cerita terbaik"</p>
            </div>
        </div>
        
        <!-- Bagian kanan: Form login -->
        <div class="md:w-1/2 bg-white p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Masuk ke Akun Anda</h2>
                <p class="text-gray-600">Masukkan kredensial Anda untuk melanjutkan</p>
            </div>
            
            <!-- Pesan Error -->
            @if(session('error'))
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-3"></i>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
            @endif
            
            <!-- Form Login -->
            <form method="POST" action="/login" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2" for="email">
                        <i class="fas fa-envelope mr-2"></i>Alamat Email
                    </label>
                    <div class="relative">
                        <input type="email" id="email" name="email" placeholder="nama@contoh.com" required
                               class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl input-focus focus:outline-none focus:border-amber-800 transition">
                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2" for="password">
                        <i class="fas fa-lock mr-2"></i>Kata Sandi
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required
                               class="w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl input-focus focus:outline-none focus:border-amber-800 transition">
                        <i class="fas fa-key absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <button type="button" id="togglePassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-5 w-5 text-amber-800 rounded">
                        <label for="remember" class="ml-2 text-gray-700">Ingat saya</label>
                    </div>
                    <a href="/forgot-password" class="text-amber-800 font-medium hover:text-amber-900 transition">Lupa kata sandi?</a>
                </div>
                
                <button type="submit" 
                        class="w-full coffee-gradient text-white font-bold py-3 px-4 rounded-xl hover:opacity-90 transition duration-300 transform hover:-translate-y-1 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>Masuk
                </button>
                
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500">Atau masuk dengan</span>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" 
                            class="flex items-center justify-center py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        <span>Google</span>
                    </button>
                    <button type="button" 
                            class="flex items-center justify-center py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                        <i class="fab fa-facebook text-blue-600 mr-2"></i>
                        <span>Facebook</span>
                    </button>
                </div>
            </form>
            
            <div class="mt-10 text-center">
                <p class="text-gray-600">
                    Belum punya akun? 
                    <a href="/register" class="font-bold coffee-text-gradient hover:underline ml-1">Daftar Sekarang</a>
                </p>
                <p class="mt-4 text-gray-600">
                    Atau 
                    <a href="/" class="font-bold coffee-text-gradient hover:underline ml-1">Masuk sebagai Tamu</a>
                </p>
                <p class="mt-6 text-sm text-gray-500">
                    Dengan melanjutkan, Anda menyetujui 
                    <a href="#" class="text-amber-800 hover:underline">Syarat & Ketentuan</a> kami
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Efek hover pada card
        const card = document.querySelector('.shadow-2xl');
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    </script>
</body>
</html>
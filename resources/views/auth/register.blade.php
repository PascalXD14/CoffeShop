<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Coffee Haven</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            light: '#A0522D',
                            DEFAULT: '#8B4513',
                            dark: '#5C3317',
                        }
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins bg-gradient-to-br from-amber-50 to-amber-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-6xl w-full flex flex-col lg:flex-row rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:shadow-3xl">
        <!-- Bagian kiri: Gambar dan konten visual -->
        <div class="lg:w-1/2 bg-gradient-to-br from-coffee-dark via-coffee to-amber-900 p-8 lg:p-12 flex flex-col justify-between text-white">
            <div>
                <a href="/" class="flex items-center mb-10 group">
                    <div class="bg-white/20 p-3 rounded-xl mr-4 group-hover:bg-white/30 transition duration-300">
                        <i class="fas fa-mug-hot text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold">Coffee Haven</h1>
                        <p class="text-amber-200 text-sm mt-1">Rasa yang tak terlupakan</p>
                    </div>
                </a>
                
                <h2 class="text-2xl font-bold mb-6">Bergabunglah dengan Komunitas Kami</h2>
                <p class="text-amber-100 mb-8">Daftarkan diri Anda sekarang dan nikmati berbagai keuntungan eksklusif sebagai anggota Coffee Haven.</p>
                
                <div class="space-y-6">
                    <div class="flex items-start bg-white/10 p-4 rounded-xl backdrop-blur-sm">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-percent text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Diskon Anggota</h3>
                            <p class="text-amber-100">Dapatkan diskon 15% untuk setiap pembelian</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start bg-white/10 p-4 rounded-xl backdrop-blur-sm">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-star text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Program Loyalitas</h3>
                            <p class="text-amber-100">Kumpulkan poin dan tukarkan dengan minuman gratis</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start bg-white/10 p-4 rounded-xl backdrop-blur-sm">
                        <div class="bg-white/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-bolt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Pesan Lebih Cepat</h3>
                            <p class="text-amber-100">Simpan preferensi Anda untuk pengalaman yang lebih personal</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 pt-6 border-t border-amber-300/30">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-amber-600 flex items-center justify-center mr-3">
                        <i class="fas fa-quote-left text-white"></i>
                    </div>
                    <p class="italic text-amber-100">"Kopi terbaik adalah awal dari cerita yang indah"</p>
                </div>
            </div>
        </div>
        
        <!-- Bagian kanan: Form pendaftaran -->
        <div class="lg:w-1/2 bg-white p-8 lg:p-12">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Buat Akun Baru</h2>
                <p class="text-gray-600">Isi data diri Anda untuk mulai menikmati keuntungan anggota</p>
            </div>
            
            <!-- Form Register -->
            <form method="POST" action="/register" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2" for="name">
                        <i class="fas fa-user-circle mr-2 text-coffee"></i>Nama Lengkap
                    </label>
                    <div class="relative">
                        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required
                               class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-coffee/30 focus:border-coffee transition duration-300">
                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Gunakan nama asli untuk kemudahan verifikasi</p>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2" for="email">
                        <i class="fas fa-envelope mr-2 text-coffee"></i>Alamat Email
                    </label>
                    <div class="relative">
                        <input type="email" id="email" name="email" placeholder="nama@contoh.com" required
                               class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-coffee/30 focus:border-coffee transition duration-300">
                        <i class="fas fa-at absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Kami tidak akan membagikan email Anda kepada siapapun</p>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2" for="password">
                        <i class="fas fa-lock mr-2 text-coffee"></i>Kata Sandi
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Buat kata sandi yang kuat" required
                               class="w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-coffee/30 focus:border-coffee transition duration-300">
                        <i class="fas fa-key absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <button type="button" id="togglePassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-coffee transition">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    
                    <div class="mt-3 grid grid-cols-2 gap-2">
                        <div class="flex items-center">
                            <div id="lengthCheck" class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                            <span class="text-sm text-gray-600">Minimal 8 karakter</span>
                        </div>
                        <div class="flex items-center">
                            <div id="complexityCheck" class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                            <span class="text-sm text-gray-600">Huruf & angka</span>
                        </div>
                    </div>
                </div>
                
                <div class="pt-4">
                    <div class="flex items-start">
                        <input type="checkbox" id="terms" name="terms" required 
                               class="h-5 w-5 text-coffee rounded focus:ring-coffee/50 mt-1">
                        <label for="terms" class="ml-3 text-gray-700">
                            Saya setuju dengan 
                            <a href="#" class="text-coffee font-medium hover:underline">Syarat & Ketentuan</a> 
                            dan 
                            <a href="#" class="text-coffee font-medium hover:underline">Kebijakan Privasi</a>
                            <span class="block text-gray-500 text-sm mt-1">Dengan mendaftar, Anda menyetujui semua persyaratan yang berlaku</span>
                        </label>
                    </div>
                </div>
                
                <div class="pt-2">
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-coffee-dark to-coffee text-white font-bold py-3 px-4 rounded-xl hover:opacity-90 transition duration-300 transform hover:-translate-y-0.5 shadow-lg flex items-center justify-center group">
                        <i class="fas fa-user-plus mr-3 group-hover:scale-110 transition-transform"></i>
                        <span>Daftar Sekarang</span>
                    </button>
                </div>
                
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500">Atau daftar dengan</span>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" 
                            class="flex items-center justify-center py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-300 hover:border-coffee/30">
                        <i class="fab fa-google text-red-500 mr-3"></i>
                        <span>Google</span>
                    </button>
                    <button type="button" 
                            class="flex items-center justify-center py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-300 hover:border-coffee/30">
                        <i class="fab fa-facebook text-blue-600 mr-3"></i>
                        <span>Facebook</span>
                    </button>
                </div>
            </form>
            
            <div class="mt-10 pt-6 border-t border-gray-200">
                <p class="text-center text-gray-600">
                    Sudah punya akun? 
                    <a href="/login" class="font-bold text-coffee hover:underline ml-1 flex items-center justify-center group">
                        <i class="fas fa-sign-in-alt mr-2 group-hover:translate-x-1 transition-transform"></i>
                        <span>Masuk ke Akun Anda</span>
                    </a>
                </p>
                <div class="mt-6 flex justify-center space-x-6">
                    <a href="/" class="text-gray-500 hover:text-coffee transition duration-300">
                        <i class="fas fa-home mr-1"></i> Beranda
                    </a>
                    <a href="/about" class="text-gray-500 hover:text-coffee transition duration-300">
                        <i class="fas fa-info-circle mr-1"></i> Tentang Kami
                    </a>
                    <a href="/contact" class="text-gray-500 hover:text-coffee transition duration-300">
                        <i class="fas fa-phone-alt mr-1"></i> Kontak
                    </a>
                </div>
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
        
        // Validasi kekuatan password
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const lengthCheck = document.getElementById('lengthCheck');
            const complexityCheck = document.getElementById('complexityCheck');
            
            // Cek panjang password
            if (password.length >= 8) {
                lengthCheck.classList.remove('bg-gray-300');
                lengthCheck.classList.add('bg-green-500');
            } else {
                lengthCheck.classList.remove('bg-green-500');
                lengthCheck.classList.add('bg-gray-300');
            }
            
            // Cek kompleksitas (huruf dan angka)
            const hasLetter = /[a-zA-Z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            
            if (hasLetter && hasNumber) {
                complexityCheck.classList.remove('bg-gray-300');
                complexityCheck.classList.add('bg-green-500');
            } else {
                complexityCheck.classList.remove('bg-green-500');
                complexityCheck.classList.add('bg-gray-300');
            }
        });
        
        // Efek hover pada card utama
        const card = document.querySelector('.shadow-2xl');
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
        
        // Validasi form sebelum submit
        document.querySelector('form').addEventListener('submit', function(e) {
            const termsChecked = document.getElementById('terms').checked;
            
            if (!termsChecked) {
                e.preventDefault();
                alert('Anda harus menyetujui Syarat & Ketentuan untuk melanjutkan pendaftaran.');
                document.getElementById('terms').focus();
            }
        });
    </script>
</body>
</html>
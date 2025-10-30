<!-- REGISTER PAGE -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register Admin - {{ config('app.name', 'Company Dashboard') }}</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        @keyframes blob {
            0%, 100% { transform: translate(0,0) scale(1); }
            25% { transform: translate(20px, -50px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(50px, 50px) scale(1.05); }
        }
        
        .animate-fadeIn { animation: fadeIn 0.5s ease; }
        .animate-slideUp { animation: slideUp 0.6s ease; }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
        
        body { font-family: 'Figtree', sans-serif; }
    </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">

    <div class="min-h-screen flex flex-col lg:flex-row p-4 md:p-8">
        <!-- Left Side: Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 sm:px-10 lg:px-16 py-10">
            <div class="w-full max-w-md animate-slideUp">
                <!-- Logo & Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-500 via-purple-600 to-indigo-700 rounded-2xl shadow-2xl mb-6 animate-float">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-3">Buat Akun Admin</h1>
                    <p class="text-base text-slate-500">Daftar untuk mengelola dashboard perusahaan Anda</p>
                </div>

                <!-- Register Form Card -->
                <div class="bg-white rounded-3xl p-8 shadow-2xl border border-gray-200">
                    <form method="POST" action="{{ route('admin.register') }}" class="space-y-5">
                        @csrf

                        <!-- Nama Lengkap -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">
                                <i class="bi bi-person mr-1 text-indigo-500"></i>
                                Nama Lengkap
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="bi bi-person-circle text-slate-400 text-lg"></i>
                                </div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                       class="block w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none transition-all text-base bg-slate-50 hover:bg-white"
                                       placeholder="John Doe" required autofocus>
                            </div>
                            @error('name')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-2 bg-red-50 p-2 rounded-lg">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">
                                <i class="bi bi-envelope mr-1 text-indigo-500"></i>
                                Email Admin
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="bi bi-at text-slate-400 text-lg"></i>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                       class="block w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none transition-all text-base bg-slate-50 hover:bg-white"
                                       placeholder="admin@company.com" required>
                            </div>
                            @error('email')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-2 bg-red-50 p-2 rounded-lg">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">
                                <i class="bi bi-lock mr-1 text-indigo-500"></i>
                                Kata Sandi
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="bi bi-key text-slate-400 text-lg"></i>
                                </div>
                                <input id="password" type="password" name="password"
                                       class="block w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none transition-all text-base bg-slate-50 hover:bg-white"
                                       placeholder="Minimal 8 karakter" required>
                                <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-indigo-500 transition-colors">
                                    <i class="bi bi-eye" id="toggleIconPassword"></i>
                                </button>
                            </div>
                            @error('password')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-2 bg-red-50 p-2 rounded-lg">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Konfirmasi Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">
                                <i class="bi bi-shield-check mr-1 text-indigo-500"></i>
                                Konfirmasi Kata Sandi
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="bi bi-key-fill text-slate-400 text-lg"></i>
                                </div>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                       class="block w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none transition-all text-base bg-slate-50 hover:bg-white"
                                       placeholder="Ulangi kata sandi" required>
                                <button type="button" onclick="togglePassword('password_confirmation')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-indigo-500 transition-colors">
                                    <i class="bi bi-eye" id="toggleIconPasswordConfirmation"></i>
                                </button>
                            </div>
                            @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-2 bg-red-50 p-2 rounded-lg">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-indigo-500 via-purple-600 to-indigo-700 hover:from-indigo-600 hover:via-purple-700 hover:to-indigo-800 text-white font-semibold py-4 px-6 rounded-xl transition-all shadow-lg hover:shadow-2xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2 text-base mt-6">
                            <span>Buat Akun Admin</span>
                            <i class="bi bi-person-check-fill text-xl"></i>
                        </button>
                    </form>
                </div>

                <!-- Login Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-600">
                        Sudah punya akun admin? 
                        <a href="{{ route('admin.login') }}" class="font-semibold text-indigo-600 hover:text-purple-600 transition-colors">
                            Login Sekarang
                        </a>
                    </p>
                </div>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <p class="text-xs text-slate-400">© 2025 Company Dashboard. All rights reserved.</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Hero Section -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-indigo-500 via-purple-600 to-indigo-700 items-center justify-center p-12 relative overflow-hidden rounded-3xl shadow-2xl">
            <!-- Animated Blob Background -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-20 left-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
                <div class="absolute top-40 right-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
                <div class="absolute bottom-20 left-40 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
            </div>

            <div class="relative z-10 text-white max-w-lg">
                <div class="mb-8 inline-block">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center animate-float">
                        <i class="bi bi-shield-check text-3xl"></i>
                    </div>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Kelola Company Profile Anda</h2>
                <p class="text-lg text-indigo-100 mb-10 leading-relaxed">
                    Buat akun admin untuk mengelola profil perusahaan, portofolio, layanan, dan konten secara efisien dan aman.
                </p>

                <!-- Feature List -->
                <div class="space-y-5">
                    <div class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-2xl p-5 border border-white/20 hover:bg-white/15 transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="bi bi-gear-fill text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Pengelolaan Lengkap</h3>
                            <p class="text-sm text-indigo-100 leading-relaxed">Atur semua konten dan data perusahaan dalam satu dashboard</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-2xl p-5 border border-white/20 hover:bg-white/15 transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="bi bi-shield-lock-fill text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Aman & Terpercaya</h3>
                            <p class="text-sm text-indigo-100 leading-relaxed">Semua data dienkripsi dan hanya dapat diakses admin resmi</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-2xl p-5 border border-white/20 hover:bg-white/15 transition-all">
                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="bi bi-phone-fill text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Akses Multi-Device</h3>
                            <p class="text-sm text-indigo-100 leading-relaxed">Kelola company profile dari desktop atau mobile dengan lancar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const input = document.getElementById(fieldId);
            const iconId = fieldId === 'password' ? 'toggleIconPassword' : 'toggleIconPasswordConfirmation';
            const icon = document.getElementById(iconId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }

        // Prevent form resubmission on refresh
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>
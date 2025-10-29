<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-bounce-slow {
            animation: bounce-slow 5s infinite;
        }
        .delay-2000 {
            animation-delay: 2s;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-indigo-50 relative overflow-hidden">

    <!-- Floating Decorative Circles -->
    <div class="absolute top-0 left-0 w-40 h-40 bg-gradient-to-br from-indigo-400 to-purple-400 rounded-full opacity-20 animate-bounce-slow"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-15 animate-bounce-slow delay-2000"></div>

    <!-- Register Card -->
    <div class="relative z-10 bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl p-10 w-96 flex flex-col items-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">📝 Register Admin</h3>

        {{-- Pesan error --}}
        @if(session('error'))
            <div class="w-full mb-4 p-3 bg-red-100 text-red-700 rounded-lg text-sm">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ url('admin/register') }}" class="w-full space-y-5">
            @csrf

            <div class="flex flex-col">
                <label for="name" class="mb-1 font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                       class="px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('name')
                    <small class="text-red-500 mt-1">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="email" class="mb-1 font-medium text-gray-700">Email Admin</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       class="px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('email')
                    <small class="text-red-500 mt-1">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="password" class="mb-1 font-medium text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                       class="px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('password')
                    <small class="text-red-500 mt-1">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="password_confirmation" class="mb-1 font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <button type="submit"
                    class="w-full py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 transition-all shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                Daftar
            </button>
        </form>

        <p class="mt-5 text-sm text-gray-600">
            Sudah punya akun? 
            <a href="{{ route('admin.login') }}" class="text-indigo-600 font-medium hover:underline">Login</a>
        </p>
    </div>

</body>
</html>

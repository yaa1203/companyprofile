<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MyCompany - Solusi Digital Terpercaya')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .hamburger-line { transition: all 0.3s; }
        .hamburger.open .line1 { transform: rotate(45deg) translate(5px,5px); }
        .hamburger.open .line2 { opacity: 0; }
        .hamburger.open .line3 { transform: rotate(-45deg) translate(7px,-6px); }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

<!-- Navigation -->
<nav class="bg-white/95 backdrop-blur-sm border-b border-gray-200 sticky top-0 z-50 shadow-md">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center h-20">
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <span class="font-bold text-xl lg:text-2xl text-gray-900">MyCompany</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-6 text-lg">
            @foreach(['/'=>'Home','about'=>'About','service'=>'Services','portfolio'=>'Portfolio','contact'=>'Contact'] as $route=>$label)
                <a href="{{ url($route) }}" class="font-medium px-3 py-2 rounded-md transition 
                    {{ request()->routeIs($route) ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600 hover:bg-indigo-50' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="hidden lg:block">
            <a href="{{ url('contact') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg hover:scale-105 transition transform text-lg">
                Get Started
            </a>
        </div>

        <!-- Mobile Button -->
        <div class="lg:hidden">
            <button id="mobile-menu-button" class="hamburger p-2 rounded-md">
                <div class="flex flex-col space-y-1">
                    <span class="hamburger-line line1 w-6 h-0.5 bg-current"></span>
                    <span class="hamburger-line line2 w-6 h-0.5 bg-current"></span>
                    <span class="hamburger-line line3 w-6 h-0.5 bg-current"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden max-h-0 overflow-hidden transition-all bg-white border-t border-gray-200">
        <div class="flex flex-col p-6 space-y-3 text-lg">
            @foreach(['/'=>'Home','about'=>'About','service'=>'Services','portfolio'=>'Portfolio','contact'=>'Contact'] as $route=>$label)
                <a href="{{ url($route) }}" class="py-3 px-4 rounded-md {{ request()->routeIs($route) ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600 hover:bg-indigo-50' }}">
                    {{ $label }}
                </a>
            @endforeach
            <a href="{{ url('contact') }}" class="mt-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center py-3 rounded-lg font-semibold hover:shadow-lg transition transform text-lg">Get Started</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="min-h-screen px-4 lg:px-8 py-12">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-lg">
        <!-- Company -->
        <div class="md:col-span-2">
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="ml-3 font-bold text-xl">MyCompany</span>
            </div>
            <p class="text-gray-400 text-base leading-relaxed">Solusi digital profesional untuk mengembangkan bisnis Anda dengan teknologi terkini dan layanan berkualitas.</p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="font-semibold mb-3 text-lg">Quick Links</h3>
            <ul class="space-y-2">
                @foreach(['/'=>'Home','about'=>'About Us','service'=>'Our Services','portfolio'=>'Portfolio','contact'=>'Contact Us'] as $route=>$label)
                    <li><a href="{{ url($route) }}" class="text-gray-300 hover:text-white transition">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="font-semibold mb-3 text-lg">Contact</h3>
            <ul class="space-y-2 text-gray-300">
                <li>Jl. Raya Tajur - Bogor, 16146</li>
                <li><a href="mailto:info@mycompany.com" class="hover:text-white transition">info@mycompany.com</a></li>
                <li><a href="tel:+6281211391835" class="hover:text-white transition">+62 812 1139 1835</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Footer -->
        <div class="border-t border-slate-800 mt-6 sm:mt-8 lg:mt-12 pt-4 sm:pt-6 lg:pt-8 mx-10">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0 gap-4">
                <!-- Copyright -->
                <p class="text-slate-400 font-light text-xs sm:text-sm text-center md:text-left order-2 md:order-1">
                    © {{ date('Y') }} MyCompany. All rights reserved.
                </p>
                    
                <!-- Legal Links -->
                <div class="flex flex-wrap justify-center md:justify-end items-center gap-3 sm:gap-4 lg:gap-6 order-1 md:order-2">
                    <a href="{{url('privacy')}}" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-xs sm:text-sm whitespace-nowrap px-2 py-1 rounded-md hover:bg-slate-800">
                        Privacy Policy
                    </a>
                    <span class="text-slate-600 hidden sm:inline">•</span>
                    <a href="{{url('services')}}" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-xs sm:text-sm whitespace-nowrap px-2 py-1 rounded-md hover:bg-slate-800">
                        Terms of Service
                    </a>
                    <span class="text-slate-600 hidden sm:inline">•</span>
                    <a href="{{url('cookie')}}" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-xs sm:text-sm whitespace-nowrap px-2 py-1 rounded-md hover:bg-slate-800">
                        Cookie Policy
                    </a>
                </div>
            </div>
        </div>
</footer>

<script>
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('open');
        if (mobileMenu.style.maxHeight) {
            mobileMenu.style.maxHeight = null;
        } else {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
        }
    });
</script>

@stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MyCompany - Solusi Digital Terpercaya')</title>
    
    <!-- Meta Description -->
    <meta name="description" content="@yield('description', 'MyCompany menyediakan solusi digital terpercaya untuk bisnis Anda. Layanan profesional dalam pengembangan website, aplikasi, dan transformasi digital.')">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 backdrop-blur-sm bg-white/95">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-slate-900">MyCompany</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium">
                        Home
                    </a>
                    <a href="{{ url('about') }}" 
                       class="nav-link {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium">
                        About
                    </a>
                    <a href="{{ url('service') }}" 
                       class="nav-link {{ request()->routeIs('service') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium">
                        Services
                    </a>
                    <a href="{{ url('portfolio') }}" 
                       class="nav-link {{ request()->routeIs('portfolio') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium">
                        Portfolio
                    </a>
                    <a href="{{ url('contact') }}" 
                       class="nav-link {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium">
                        Contact
                    </a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex">
                    <a href="{{ url('contact') }}" 
                       class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300 font-medium">
                        Get Started
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-slate-600 hover:text-slate-900 focus:outline-none focus:text-slate-900 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-200">
            <div class="container mx-auto px-6 py-4 space-y-4">
                <a href="{{ url('/') }}" 
                   class="block {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium">
                    Home
                </a>
                <a href="{{ url('about') }}" 
                   class="block {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium">
                    About
                </a>
                <a href="{{ url('services') }}" 
                   class="block {{ request()->routeIs('services') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium">
                    Services
                </a>
                <a href="{{ url('portfolio') }}" 
                   class="block {{ request()->routeIs('portfolio') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium">
                    Portfolio
                </a>
                <a href="{{ url('contact') }}" 
                   class="block {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium">
                    Contact
                </a>
                <div class="pt-4">
                    <a href="{{ url('contact') }}" 
                       class="block bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-lg text-center font-medium">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white">
        <div class="container mx-auto px-6 py-16">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">MyCompany</span>
                    </div>
                    <p class="text-slate-300 font-light leading-relaxed mb-6 max-w-md">
                        Solusi digital terpercaya untuk mengembangkan bisnis Anda. Kami berkomitmen memberikan layanan berkualitas tinggi dengan teknologi terdepan.
                    </p>
                    <!-- Social Media -->
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.219-.359-1.219c0-1.142.662-1.995 1.488-1.995.219 0 .498.16.498.219 0 .179-.219.498-.219.717-.199.957.717 1.406 1.644 1.406 2.681 0 4.738-2.681 4.738-6.578 0-3.44-2.462-5.846-5.963-5.846-4.078 0-6.539 3.058-6.539 6.218 0 1.232.468 2.55 1.067 3.264.12.139.139.26.099.4-.1.419-.339 1.381-.389 1.58-.06.259-.199.319-.46.199-1.781-.839-2.9-3.479-2.9-5.604 0-4.558 3.308-8.736 9.532-8.736 5.006 0 8.896 3.567 8.896 8.338 0 4.978-3.138 8.976-7.497 8.976-1.467 0-2.846-.766-3.318-1.781 0 0-.719 2.744-.896 3.42-.319 1.237-1.178 2.783-1.756 3.727C9.17 23.847 10.554 24.017 12.017 24.017c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light">Home</a></li>
                        <li><a href="{{ url('about') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light">About Us</a></li>
                        <li><a href="{{ url('services') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light">Our Services</a></li>
                        <li><a href="{{ url('portfolio') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light">Portfolio</a></li>
                        <li><a href="{{ url('contact') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Contact Info</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-indigo-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-slate-300 font-light text-sm">
                                Jl. Raya Tajur - Bogor <br>
                                Bogor Timur, 16146
                            </span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <a href="mailto:info@mycompany.com" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm">
                                info@mycompany.com
                            </a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 005.236 5.236l.773-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3a1 1 0 011-1z" clip-rule="evenodd"/>
                            </svg>
                            <a href="tel:+6281211391835" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm">
                                +62 812 1139 1835
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-slate-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-slate-400 font-light text-sm">
                        © {{ date('Y') }} MyCompany. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-sm">Privacy Policy</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-sm">Terms of Service</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 font-light text-sm">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Smooth scrolling for anchor links
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

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 0) {
                nav.classList.add('shadow-sm');
            } else {
                nav.classList.remove('shadow-sm');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
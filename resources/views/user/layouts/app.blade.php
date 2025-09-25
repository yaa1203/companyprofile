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
        
        /* Mobile menu animation */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
            transform-origin: top;
        }
        
        .mobile-menu.open {
            max-height: 500px;
        }
        
        /* Hamburger menu animation */
        .hamburger-line {
            transition: all 0.3s ease-in-out;
        }
        
        .hamburger.open .line1 {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.open .line2 {
            opacity: 0;
        }
        
        .hamburger.open .line3 {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        /* Backdrop for mobile menu */
        .mobile-menu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 40;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-backdrop.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Smooth transitions for mobile */
        .mobile-menu-content {
            transform: translateY(-10px);
            opacity: 0;
            transition: all 0.3s ease 0.1s;
        }
        
        .mobile-menu.open .mobile-menu-content {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Enhanced footer animations */
        footer .grid > * {
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both;
        }
        
        footer .grid > *:nth-child(1) { animation-delay: 0.1s; }
        footer .grid > *:nth-child(2) { animation-delay: 0.2s; }
        footer .grid > *:nth-child(3) { animation-delay: 0.3s; }
        footer .grid > *:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Touch-friendly hover states */
        @media (hover: none) {
            a, button {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);
            }
            
            .nav-link:active, .nav-link:focus {
                background-color: rgba(99, 102, 241, 0.1);
                border-radius: 0.375rem;
            }
        }
        
        /* Mobile-first adjustments */
        @media (max-width: 640px) {
            .mobile-menu {
                position: fixed;
                top: 64px;
                left: 0;
                right: 0;
                background: white;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                z-index: 45;
            }
            
            .mobile-menu-content {
                padding: 1.5rem;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-white antialiased">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2 sm:space-x-3">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-lg sm:text-xl font-bold text-slate-900">MyCompany</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-4 sm:space-x-8">
                    <a href="{{ url('/') }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium text-sm sm:text-base px-2 py-1 rounded-md hover:bg-indigo-50">
                        Home
                    </a>
                    <a href="{{ url('about') }}" 
                       class="nav-link {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium text-sm sm:text-base px-2 py-1 rounded-md hover:bg-indigo-50">
                        About
                    </a>
                    <a href="{{ url('service') }}" 
                       class="nav-link {{ request()->routeIs('service') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium text-sm sm:text-base px-2 py-1 rounded-md hover:bg-indigo-50">
                        Services
                    </a>
                    <a href="{{ url('portfolio') }}" 
                       class="nav-link {{ request()->routeIs('portfolio') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium text-sm sm:text-base px-2 py-1 rounded-md hover:bg-indigo-50">
                        Portfolio
                    </a>
                    <a href="{{ url('contact') }}" 
                       class="nav-link {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition-colors duration-200 font-medium text-sm sm:text-base px-2 py-1 rounded-md hover:bg-indigo-50">
                        Contact
                    </a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden lg:flex">
                    <a href="{{ url('contact') }}" 
                       class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 sm:px-6 sm:py-2 rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-300 font-medium text-sm sm:text-base shadow-md">
                        Get Started
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button type="button" id="mobile-menu-button" class="hamburger text-slate-600 hover:text-slate-900 focus:outline-none focus:text-slate-900 transition-colors duration-200 p-2 rounded-md hover:bg-slate-100">
                        <div class="w-6 h-6 flex flex-col justify-center items-center space-y-1">
                            <span class="hamburger-line line1 w-6 h-0.5 bg-current"></span>
                            <span class="hamburger-line line2 w-6 h-0.5 bg-current"></span>
                            <span class="hamburger-line line3 w-6 h-0.5 bg-current"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Backdrop -->
        <div id="mobile-menu-backdrop" class="mobile-menu-backdrop"></div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden">
            <div class="mobile-menu-content">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 space-y-2">
                    <a href="{{ url('/') }}" 
                       class="block {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium py-3 px-4 rounded-lg hover:bg-indigo-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Home
                        </span>
                    </a>
                    <a href="{{ url('about') }}" 
                       class="block {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium py-3 px-4 rounded-lg hover:bg-indigo-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            About
                        </span>
                    </a>
                    <a href="{{ url('service') }}" 
                       class="block {{ request()->routeIs('service') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium py-3 px-4 rounded-lg hover:bg-indigo-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Services
                        </span>
                    </a>
                    <a href="{{ url('portfolio') }}" 
                       class="block {{ request()->routeIs('portfolio') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium py-3 px-4 rounded-lg hover:bg-indigo-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Portfolio
                        </span>
                    </a>
                    <a href="{{ url('contact') }}" 
                       class="block {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-slate-600' }} hover:text-indigo-600 transition-colors duration-200 font-medium py-3 px-4 rounded-lg hover:bg-indigo-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Contact
                        </span>
                    </a>
                    <div class="pt-4 border-t border-slate-200 mt-2">
                        <a href="{{ url('contact') }}" 
                           class="block bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg text-center font-medium hover:shadow-lg transition-all duration-300 shadow-md">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-slate-900 text-white overflow-hidden relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="footer-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#6366f1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#footer-pattern)"/>
            </svg>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
            <!-- Main Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-8 lg:gap-12">
                <!-- Company Info -->
                <div class="md:col-span-2 xl:col-span-2">
                    <!-- Company Logo & Name -->
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-4 sm:mb-6">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-lg sm:text-xl font-bold">MyCompany</span>
                    </div>
                    
                    <!-- Company Description -->
                    <p class="text-slate-300 font-light leading-relaxed mb-4 sm:mb-6 max-w-md text-sm sm:text-base">
                        Solusi digital terpercaya untuk mengembangkan bisnis Anda. Kami berkomitmen memberikan layanan berkualitas tinggi dengan teknologi terdepan.
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="flex flex-wrap gap-2 sm:gap-3 mb-6 sm:mb-8">
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all duration-300 group shadow-lg" aria-label="Twitter">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-slate-400 group-hover:text-white transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all duration-300 group shadow-lg" aria-label="LinkedIn">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-slate-400 group-hover:text-white transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all duration-300 group shadow-lg" aria-label="Pinterest">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-slate-400 group-hover:text-white transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.219-.359-1.219c0-1.142.662-1.995 1.488-1.995.219 0 .498.16.498.219 0 .179-.219.498-.219.717-.199.957.717 1.406 1.644 1.406 2.681 0 4.738-2.681 4.738-6.578 0-3.44-2.462-5.846-5.963-5.846-4.078 0-6.539 3.058-6.539 6.218 0 1.232.468 2.55 1.067 3.264.12.139.139.26.099.4-.1.419-.339 1.381-.389 1.58-.06.259-.199.319-.46.199-1.781-.839-2.9-3.479-2.9-5.604 0-4.558 3.308-8.736 9.532-8.736 5.006 0 8.896 3.567 8.896 8.338 0 4.978-3.138 8.976-7.497 8.976-1.467 0-2.846-.766-3.318-1.781 0 0-.719 2.744-.896 3.42-.319 1.237-1.178 2.783-1.756 3.727C9.17 23.847 10.554 24.017 12.017 24.017c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all duration-300 group shadow-lg" aria-label="GitHub">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-slate-400 group-hover:text-white transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.606.069-.606 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112.026 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 11.974C22 6.465 17.535 2 12.026 2z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 lg:mb-6 text-white">Quick Links</h3>
                        <nav>
                            <ul class="space-y-1.5 sm:space-y-2 lg:space-y-3">
                                <li>
                                    <a href="{{ url('/') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base block py-1 px-2 rounded-md hover:bg-slate-800">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base block py-1 px-2 rounded-md hover:bg-slate-800">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base block py-1 px-2 rounded-md hover:bg-slate-800">
                                        Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('portfolio') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base block py-1 px-2 rounded-md hover:bg-slate-800">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base block py-1 px-2 rounded-md hover:bg-slate-800">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-2 md:space-y-0">
                    <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 lg:mb-6 text-white">Contact Info</h3>
                    <ul class="space-y-2 sm:space-y-3 lg:space-y-4">
                        <!-- Address -->
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <address class="text-slate-300 font-light text-sm sm:text-base not-italic leading-relaxed">
                                <span class="text-slate-300 font-light text-sm lg:text-base">
                                    Jl. Raya Tajur - Bogor <br>
                                    Bogor Timur, 16146
                                </span>
                            </address>
                        </li>
                        
                        <!-- Email -->
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <a href="mailto:info@mycompany.com" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base break-all">
                                info@mycompany.com
                            </a>
                        </li>
                        
                        <!-- Phone -->
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 005.236 5.236l.773-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3a1 1 0 011-1z" clip-rule="evenodd"/>
                            </svg>
                            <a href="tel:+6281211391835" class="text-slate-300 hover:text-white transition-colors duration-200 font-light text-sm sm:text-base">
                                +62 812 1139 1835
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-slate-800 mt-6 sm:mt-8 lg:mt-12 pt-4 sm:pt-6 lg:pt-8">
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
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle with Animation
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
            const hamburger = this;
            
            mobileMenu.classList.toggle('open');
            mobileMenuBackdrop.classList.toggle('active');
            hamburger.classList.toggle('open');
            
            // Prevent body scroll when menu is open
            if (mobileMenu.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close mobile menu when clicking backdrop
        document.getElementById('mobile-menu-backdrop').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            
            mobileMenu.classList.remove('open');
            this.classList.remove('active');
            mobileMenuButton.classList.remove('open');
            document.body.style.overflow = '';
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                
                mobileMenu.classList.remove('open');
                mobileMenuBackdrop.classList.remove('active');
                mobileMenuButton.classList.remove('open');
                document.body.style.overflow = '';
            });
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
        
        // Enhanced scroll effect for navigation
        let lastScroll = 0;
        const nav = document.querySelector('nav');
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            // Add shadow on scroll
            if (currentScroll > 10) {
                nav.classList.add('shadow-lg');
                nav.classList.remove('shadow-sm');
            } else {
                nav.classList.add('shadow-sm');
                nav.classList.remove('shadow-lg');
            }
            
            lastScroll = currentScroll;
        });
        
        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
        
        // Touch-friendly hover states for mobile
        if ('ontouchstart' in window) {
            document.querySelectorAll('a, button').forEach(element => {
                element.addEventListener('touchstart', function() {
                    this.style.opacity = '0.8';
                });
                
                element.addEventListener('touchend', function() {
                    this.style.opacity = '';
                });
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>
@extends('user.layouts.app')

@section('title', 'Home - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-indigo-50 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="hero-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#6366f1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hero-pattern)"/>
            </svg>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full opacity-20 animate-bounce" style="animation-delay: 0s;"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-15 animate-bounce" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-12 h-12 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full opacity-25 animate-bounce" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center min-h-screen py-16 lg:py-20">
                
                <!-- Content Section (Left on Desktop) -->
                <div class="text-center lg:text-left space-y-6 lg:space-y-8 order-2 lg:order-1">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm font-medium bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 border border-indigo-200 backdrop-blur-sm">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2 animate-pulse"></span>
                        Solusi Digital Terpercaya
                    </div>
                    
                    <!-- Main Heading -->
                    <h1 class="font-bold leading-tight text-gray-900">
                        <!-- Mobile: text-3xl/4xl, Tablet: text-5xl, Desktop: text-6xl/7xl -->
                        <span class="block text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                            Transformasi
                        </span>
                        <span class="block text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-800 bg-clip-text text-transparent">
                            Digital Bisnis
                        </span>
                        <span class="block text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                            Masa Depan
                        </span>
                    </h1>
                    
                    <!-- Subheading -->
                    <p class="text-base sm:text-lg lg:text-xl xl:text-2xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Kami memberikan solusi teknologi terdepan untuk membantu bisnis Anda berkembang pesat di era digital dengan layanan profesional dan terpercaya.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center lg:justify-start pt-4">
                        <a href="{{ url('about') }}" 
                           class="group inline-flex items-center justify-center px-6 py-3 sm:px-8 sm:py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:from-indigo-700 hover:to-purple-700 transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 text-sm sm:text-base">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        
                        <a href="{{ url('contact') }}" 
                           class="group inline-flex items-center justify-center px-6 py-3 sm:px-8 sm:py-4 bg-white text-gray-900 font-semibold rounded-xl border-2 border-gray-200 hover:border-indigo-300 hover:bg-gray-50 transform hover:-translate-y-1 hover:shadow-xl transition-all duration-300 text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                </div>
                
                <!-- Image Section (Right on Desktop, Below text on Mobile) -->
                <div class="relative order-1 lg:order-2">
                    <div class="relative mx-auto max-w-lg lg:max-w-none">
                        <!-- Main Image Container -->
                        <div class="relative z-10 p-4 sm:p-6 lg:p-8">
                            <!-- Placeholder for main hero image -->
                            <div class="aspect-square lg:aspect-[4/3] bg-gradient-to-br from-indigo-100 via-purple-50 to-indigo-200 rounded-3xl shadow-2xl overflow-hidden relative">
                                <!-- Animated Background -->
                                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-600/20">
                                    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(99, 102, 241, 0.2) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(168, 85, 247, 0.2) 0%, transparent 50%);"></div>
                                </div>
                                
                                <!-- Center Icon/Illustration -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 mx-auto bg-white/90 backdrop-blur-sm rounded-2xl flex items-center justify-center shadow-xl mb-4 lg:mb-6">
                                            <svg class="w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="text-lg sm:text-xl lg:text-2xl font-bold text-white/90 mb-2">Digital Solutions</div>
                                        <div class="text-sm sm:text-base text-white/75">Teknologi Terdepan</div>
                                    </div>
                                </div>
                                
                                <!-- Floating Cards -->
                                <div class="absolute top-4 left-4 sm:top-6 sm:left-6">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-xl p-2 sm:p-3 shadow-lg transform rotate-3 hover:rotate-0 transition-transform duration-300">
                                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-green-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="absolute top-4 right-4 sm:top-6 sm:right-6">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-xl p-2 sm:p-3 shadow-lg transform -rotate-3 hover:rotate-0 transition-transform duration-300">
                                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="absolute bottom-4 left-4 sm:bottom-6 sm:left-6">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-xl p-2 sm:p-3 shadow-lg transform rotate-2 hover:rotate-0 transition-transform duration-300">
                                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Background Decorations -->
                        <div class="absolute inset-0 -z-10">
                            <div class="absolute top-8 left-8 w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full opacity-20 blur-xl"></div>
                            <div class="absolute bottom-8 right-8 w-16 h-16 sm:w-20 sm:h-20 lg:w-28 lg:h-28 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full opacity-20 blur-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 lg:mb-6">
                    Kenapa Memilih 
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Kami?
                    </span>
                </h2>
                <p class="text-base sm:text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Komitmen kami untuk memberikan layanan terbaik dengan standar internasional dan teknologi terdepan
                </p>
            </div>
            
            <!-- Features Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Feature 1 -->
                <div class="group bg-white rounded-2xl p-6 lg:p-8 border border-gray-100 hover:border-indigo-200 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl flex items-center justify-center mb-4 lg:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 lg:w-8 lg:h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3 lg:mb-4">Berpengalaman</h3>
                    <p class="text-gray-600 leading-relaxed text-sm lg:text-base">
                        Lebih dari 10 tahun membantu bisnis berkembang dengan solusi teknologi terdepan dan strategi yang terbukti efektif.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="group bg-white rounded-2xl p-6 lg:p-8 border border-gray-100 hover:border-indigo-200 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mb-4 lg:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 lg:w-8 lg:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3 lg:mb-4">Tim Profesional</h3>
                    <p class="text-gray-600 leading-relaxed text-sm lg:text-base">
                        Didukung tim ahli bersertifikat di bidang IT, digital marketing, dan konsultan bisnis dengan track record solid.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="group bg-white rounded-2xl p-6 lg:p-8 border border-gray-100 hover:border-indigo-200 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 sm:col-span-2 lg:col-span-1">
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl flex items-center justify-center mb-4 lg:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 lg:w-8 lg:h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3 lg:mb-4">Dukungan Penuh</h3>
                    <p class="text-gray-600 leading-relaxed text-sm lg:text-base">
                        Support 24/7, maintenance, dan solusi cepat kapanpun Anda membutuhkan bantuan untuk menjaga bisnis tetap berjalan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Custom animations for floating elements */
        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0, 0, 0);
            }
            40%, 43% {
                transform: translate3d(0, -10px, 0);
            }
            70% {
                transform: translate3d(0, -5px, 0);
            }
            90% {
                transform: translate3d(0, -2px, 0);
            }
        }
        
        .animate-bounce {
            animation: bounce 3s infinite;
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
@endsection
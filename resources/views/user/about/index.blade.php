@extends('user.layouts.app')

@section('title', 'About Us - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-50 to-blue-50 overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-20 left-20 w-80 h-80 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-4 sm:mb-6">
                    <span class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm font-medium bg-white/80 text-indigo-700 backdrop-blur-sm border border-indigo-100">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        About Our Company
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-6 lg:mb-8 leading-tight text-gray-900">
                    {{ $tentang->judul ?? 'Tentang Kami' }}
                </h1>
                <p class="text-base sm:text-lg lg:text-xl xl:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Mengenal lebih dekat perjalanan dan komitmen kami dalam memberikan solusi terbaik
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 sm:py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                
                <!-- Content Side -->
                <div class="space-y-6 lg:space-y-8">
                    <!-- Who We Are -->
                    <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2">
                        <div class="flex flex-col sm:flex-row sm:items-center mb-4 sm:mb-6">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl sm:rounded-2xl flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">Siapa Kami?</h2>
                        </div>
                        <p class="text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed">
                            {{ $tentang->deskripsi ?? 'Kami adalah perusahaan teknologi yang berdedikasi untuk memberikan solusi digital inovatif. Dengan pengalaman bertahun-tahun, kami memahami kebutuhan bisnis modern dan siap membantu Anda mencapai tujuan dengan teknologi terdepan.' }}
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2">
                        <div class="flex flex-col sm:flex-row sm:items-center mb-4 sm:mb-6">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl sm:rounded-2xl flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">Visi Kami</h2>
                        </div>
                        <p class="text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed">
                            {{ $tentang->visi ?? 'Menjadi perusahaan teknologi terdepan yang menghadirkan inovasi berkelanjutan untuk membantu bisnis berkembang di era digital.' }}
                        </p>
                    </div>

                    <!-- Mission -->
                    <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2">
                        <div class="flex flex-col sm:flex-row sm:items-center mb-4 sm:mb-6">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl sm:rounded-2xl flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">Misi Kami</h2>
                        </div>
                        <p class="text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed">
                            {{ $tentang->misi ?? 'Memberikan solusi teknologi terbaik dengan pendekatan personal, kualitas tinggi, dan dukungan berkelanjutan untuk memastikan kesuksesan setiap klien.' }}
                        </p>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="order-first lg:order-last">
                    <div class="relative lg:sticky lg:top-8">
                        <div class="relative z-10 group">
                            @if($tentang && $tentang->gambar)
                                <img src="{{ asset($tentang->gambar) }}" 
                                     alt="Tentang Kami" 
                                     class="rounded-2xl shadow-2xl w-full h-64 sm:h-80 lg:h-auto object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" 
                                     alt="Our Team" 
                                     class="rounded-2xl shadow-2xl w-full h-64 sm:h-80 lg:h-auto object-cover group-hover:scale-105 transition-transform duration-500">
                            @endif
                        </div>
                        
                        <!-- Background decorations -->
                        <div class="absolute -top-4 -left-4 sm:-top-8 sm:-left-8 w-16 h-16 sm:w-24 sm:h-24 lg:w-32 lg:h-32 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-2xl opacity-30 -z-10 animate-pulse"></div>
                        <div class="absolute -bottom-4 -right-4 sm:-bottom-8 sm:-right-8 w-12 h-12 sm:w-16 sm:h-16 lg:w-24 lg:h-24 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl opacity-30 -z-10 animate-pulse" style="animation-delay: 1s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-4 sm:mb-6">
                    Tim <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Profesional</span> Kami
                </h2>
                <p class="text-base sm:text-lg lg:text-xl xl:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Didukung oleh tim ahli berpengalaman yang siap memberikan yang terbaik
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Development Team -->
                <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 lg:w-10 lg:h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Development Team</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Expert developers dengan pengalaman 5+ tahun dalam berbagai teknologi modern</p>
                </div>

                <!-- Design Team -->
                <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 lg:w-10 lg:h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Design Team</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Creative designers untuk UI/UX yang memukau dan user-friendly</p>
                </div>

                <!-- Marketing Team -->
                <div class="group p-6 sm:p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 lg:hover:-translate-y-2 text-center sm:col-span-2 lg:col-span-1">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 lg:w-10 lg:h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Marketing Team</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Strategis digital marketing bersertifikat dengan hasil terbukti</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
@endsection
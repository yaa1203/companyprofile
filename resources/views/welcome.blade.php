@extends('user.layouts.app')

@section('title', 'Home - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 flex items-center">
        <!-- Simple background decoration -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-8 left-20 w-80 h-80 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-20 right-20 w-80 h-80 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>
        
        <div class="relative container mx-auto px-6 pb-12">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-indigo-700 backdrop-blur-sm border border-indigo-100">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>
                        Innovation & Excellence
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                    <span class="text-gray-900">Selamat Datang di</span>
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        MyCompany
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-12 leading-relaxed">
                    Solusi teknologi terdepan untuk mengakselerasi pertumbuhan bisnis Anda di era digital
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/about" class="group bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <span class="flex items-center justify-center space-x-2">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </a>
                    <a href="/contact" class="group bg-white hover:bg-gray-50 text-gray-900 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-indigo-300 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span>Hubungi Kami</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Kenapa Memilih <span class="text-indigo-600">Kami?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Komitmen kami untuk memberikan layanan terbaik dengan standar internasional
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Feature 1 -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Berpengalaman</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Lebih dari 10 tahun membantu bisnis berkembang dengan solusi teknologi terdepan dan strategi yang terbukti efektif.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Tim Profesional</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Didukung tim ahli bersertifikat di bidang IT, digital marketing, dan konsultan bisnis dengan track record solid.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Dukungan Penuh</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Support 24/7, maintenance, dan solusi cepat kapanpun Anda membutuhkan bantuan untuk menjaga bisnis tetap berjalan.
                    </p>
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
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
@endsection
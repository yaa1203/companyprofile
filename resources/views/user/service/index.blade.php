@extends('user.layouts.app')
@section('title', 'Services - MyCompany')
@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-50 to-blue-50 py-24 overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-20 left-20 w-80 h-80 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="relative container mx-auto px-6 pb-24">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-indigo-700 backdrop-blur-sm border border-indigo-100">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Our Services
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="text-gray-900">Layanan Kami</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Kami menyediakan berbagai layanan profesional untuk mendukung kesuksesan dan transformasi digital bisnis Anda
                </p>
            </div>
        </div>
    </section>
    
    <!-- View Toggle Section -->
    <section class="py-6 bg-white sticky top-0 z-10 shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex justify-center">
                <div class="inline-flex rounded-lg shadow-sm" role="group">
                    <button type="button" id="gridViewBtn" class="view-toggle-btn px-6 py-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Grid View
                    </button>
                    <button type="button" id="listViewBtn" class="view-toggle-btn px-6 py-3 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        List View
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Grid Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Solusi Lengkap untuk Bisnis Anda
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Dari konsep hingga implementasi, kami siap membantu mewujudkan visi digital perusahaan Anda
                </p>
            </div>
            
            <!-- Grid Container -->
            <div id="servicesContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @forelse($layanans as $index => $layanan)
                    <!-- Grid Card -->
                    <div class="service-card group bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl overflow-hidden">
                        <!-- Image Section -->
                        <div class="relative overflow-hidden">
                            @if($layanan->gambar)
                                <img src="{{ asset('storage/' . $layanan->gambar) }}" 
                                     alt="{{ $layanan->judul }}"
                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm0 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Service Number Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-sm text-indigo-600 w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">
                                {{ $layanan->judul }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                {{ $layanan->deskripsi }}
                            </p>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-16">
                        <div class="w-24 h-24 bg-gradient-to-r from-slate-300 to-slate-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1-2H8l-1 2H5V5z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Belum Ada Layanan</h3>
                        <p class="text-gray-600 max-w-md mx-auto">
                            Layanan kami sedang dalam tahap pengembangan. Hubungi kami untuk informasi lebih lanjut mengenai solusi yang kami tawarkan.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    
    <!-- Service Categories Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Kategori <span class="text-indigo-600">Layanan</span> Kami
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Berbagai kategori layanan untuk memenuhi kebutuhan bisnis Anda
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Development Services -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Development</h3>
                    <p class="text-gray-600">Pengembangan aplikasi web dan mobile dengan teknologi terkini</p>
                </div>
                <!-- Design Services -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Design</h3>
                    <p class="text-gray-600">UI/UX design yang memukau dan user-friendly untuk produk digital Anda</p>
                </div>
                <!-- Consulting Services -->
                <div class="group p-8 bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Consulting</h3>
                    <p class="text-gray-600">Konsultasi strategi digital untuk mengoptimalkan pertumbuhan bisnis</p>
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
        
        /* List View Styles */
        .list-view {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 100%;
        }
        
        .list-view .service-card {
            display: flex;
            flex-direction: row;
            height: auto;
            min-height: 200px;
            border-radius: 1rem;
            overflow: hidden;
        }
        
        .list-view .service-card .relative {
            width: 280px;
            height: 100%;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }
        
        .list-view .service-card img,
        .list-view .service-card .bg-gradient-to-br {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .list-view .service-card .p-6 {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1.5rem;
        }
        
        .list-view .service-card .text-2xl {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }
        
        .list-view .service-card .absolute {
            top: 1rem;
            left: 1rem;
            z-index: 10;
        }
        
        .list-view .service-card .absolute span {
            width: 2rem;
            height: 2rem;
            font-size: 0.875rem;
        }
        
        .list-view .service-card .text-gray-600 {
            font-size: 1rem;
            line-height: 1.5;
        }
        
        /* Responsive adjustments for list view */
        @media (max-width: 768px) {
            .list-view .service-card {
                flex-direction: column;
                height: auto;
            }
            
            .list-view .service-card .relative {
                width: 100%;
                height: 200px;
            }
            
            .list-view .service-card .p-6 {
                padding: 1rem;
            }
        }
        
        /* Active button style */
        .view-toggle-btn.active {
            background-color: #4F46E5;
            color: white;
            border-color: #4F46E5;
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gridViewBtn = document.getElementById('gridViewBtn');
            const listViewBtn = document.getElementById('listViewBtn');
            const servicesContainer = document.getElementById('servicesContainer');
            
            // Set initial active button
            gridViewBtn.classList.add('active');
            
            // Toggle to grid view
            gridViewBtn.addEventListener('click', function() {
                servicesContainer.classList.remove('list-view');
                gridViewBtn.classList.add('active');
                listViewBtn.classList.remove('active');
            });
            
            // Toggle to list view
            listViewBtn.addEventListener('click', function() {
                servicesContainer.classList.add('list-view');
                listViewBtn.classList.add('active');
                gridViewBtn.classList.remove('active');
            });
        });
    </script>
@endsection
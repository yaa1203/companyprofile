@extends('user.layouts.app')
@section('title', 'Portfolio - MyCompany')
@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 flex items-center">
        <!-- Background decoration matching home page -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-8 left-20 w-80 h-80 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-20 right-20 w-80 h-80 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>
        
        <div class="relative container mx-auto px-6 pb-24">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-indigo-700 backdrop-blur-sm border border-indigo-100">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>
                        Portfolio & Karya Kami
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                    <span class="text-gray-900">Portfolio</span>
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Terbaik
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-12 leading-relaxed">
                    Kumpulan karya dan proyek terbaik yang telah berhasil kami selesaikan dengan hasil yang membanggakan bersama klien-klien kami
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#portfolio-grid" class="group bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <span class="flex items-center justify-center space-x-2">
                            <span>Lihat Portfolio</span>
                            <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </span>
                    </a>
                    <a href="/contact" class="group bg-white hover:bg-gray-50 text-gray-900 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-indigo-300 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span>Konsultasi Proyek</span>
                        </span>
                    </a>
                </div>
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
    
    <!-- Portfolio Grid -->
    <section id="portfolio-grid" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Karya <span class="text-indigo-600">Terbaik Kami</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Dari konsep hingga implementasi, setiap proyek adalah cerminan komitmen kami terhadap kualitas dan inovasi
                </p>
            </div>
            
            <!-- Grid Container -->
            <div id="portfolioContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @forelse($portofolios as $index => $item)
                    <!-- Grid Card -->
                    <div class="portfolio-card group bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 overflow-hidden">
                        <!-- Portfolio Image -->
                        <div class="relative overflow-hidden">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" 
                                     alt="{{ $item->judul }}"
                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                                    <!-- Image Placeholder Icon -->
                                    <svg class="w-16 h-16 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4-5 4 4 4-6 4 7H4z"/>
                                    </svg>
                                </div>
                            @endif
                            <!-- Portfolio Number Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-sm text-indigo-600 w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                            </div>
                        </div>
                        <!-- Portfolio Content -->
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-16">
                        <div class="w-24 h-24 bg-gradient-to-r from-gray-300 to-gray-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4-5 4 4 4-6 4 7H4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Belum Ada Portfolio</h3>
                        <p class="text-gray-600 max-w-md mx-auto">
                            Portfolio kami sedang dalam tahap pengembangan. Hubungi kami untuk melihat contoh pekerjaan dan solusi yang kami tawarkan.
                        </p>
                    </div>
                @endforelse
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
        
        /* List View Styles */
        .list-view {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 100%;
        }
        
        .list-view .portfolio-card {
            display: flex;
            flex-direction: row;
            height: auto;
            min-height: 200px;
            border-radius: 1rem;
            overflow: hidden;
        }
        
        .list-view .portfolio-card .relative {
            width: 280px;
            height: 100%;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }
        
        .list-view .portfolio-card img,
        .list-view .portfolio-card .bg-gradient-to-br {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .list-view .portfolio-card .p-8 {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1.5rem;
        }
        
        .list-view .portfolio-card .text-2xl {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }
        
        .list-view .portfolio-card .absolute {
            top: 1rem;
            left: 1rem;
            z-index: 10;
        }
        
        .list-view .portfolio-card .absolute span {
            width: 2rem;
            height: 2rem;
            font-size: 0.875rem;
        }
        
        .list-view .portfolio-card .text-gray-600 {
            font-size: 1rem;
            line-height: 1.5;
        }
        
        /* Responsive adjustments for list view */
        @media (max-width: 768px) {
            .list-view .portfolio-card {
                flex-direction: column;
                height: auto;
            }
            
            .list-view .portfolio-card .relative {
                width: 100%;
                height: 200px;
            }
            
            .list-view .portfolio-card .p-8 {
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
            const portfolioContainer = document.getElementById('portfolioContainer');
            
            // Set initial active button
            gridViewBtn.classList.add('active');
            
            // Toggle to grid view
            gridViewBtn.addEventListener('click', function() {
                portfolioContainer.classList.remove('list-view');
                gridViewBtn.classList.add('active');
                listViewBtn.classList.remove('active');
            });
            
            // Toggle to list view
            listViewBtn.addEventListener('click', function() {
                portfolioContainer.classList.add('list-view');
                listViewBtn.classList.add('active');
                gridViewBtn.classList.remove('active');
            });
            
            // Smooth scroll for anchor links
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
        });
    </script>
@endsection
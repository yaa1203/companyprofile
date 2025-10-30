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
    <section class="py-6 bg-white/80 backdrop-blur-md sticky top-0 z-40 border-b border-slate-200">
        <div class="container mx-auto px-6">
            <div class="flex justify-center">
                <div class="inline-flex rounded-xl shadow-lg bg-slate-100 p-1" role="group">
                    <button type="button" id="gridViewBtn" class="view-toggle-btn active px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Grid View
                    </button>
                    <button type="button" id="listViewBtn" class="view-toggle-btn px-6 py-3 text-sm font-semibold rounded-lg transition-all duration-300 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        List View
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Grid -->
    <section id="portfolio-grid" class="py-20 bg-gradient-to-b from-white to-slate-50">
        <div class="container mx-auto px-6">
            <!-- Grid Container -->
            <div id="portfolioContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto mb-12">
                @forelse($portofolios as $index => $item)
                    <!-- Grid Card -->
                    <a href="{{ route('portfolio.show', $item->id) }}" class="portfolio-card group bg-white rounded-2xl border-2 border-slate-100 hover:border-indigo-300 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 overflow-hidden">
                        <!-- Portfolio Image -->
                        <div class="relative overflow-hidden aspect-video">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" 
                                     alt="{{ $item->judul }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <!-- Portfolio Number Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/95 backdrop-blur-md text-indigo-600 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold shadow-xl border-2 border-indigo-200">
                                    {{ str_pad(($portofolios->currentPage() - 1) * $portofolios->perPage() + $index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                            </div>
                        </div>
                        <!-- Portfolio Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-slate-600 leading-relaxed text-sm line-clamp-3 mb-4">
                                {{ $item->deskripsi }}
                            </p>
                            <!-- Read More Link -->
                            <div class="pt-4 border-t border-slate-100">
                                <span class="inline-flex items-center text-indigo-600 font-semibold text-sm group-hover:gap-2 transition-all duration-300">
                                    Lihat Detail
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-20">
                        <div class="inline-block mb-6">
                            <div class="w-32 h-32 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-3xl flex items-center justify-center mx-auto shadow-lg">
                                <svg class="w-16 h-16 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Belum Ada Portfolio</h3>
                        <p class="text-slate-600 max-w-md mx-auto mb-8 leading-relaxed">
                            Portfolio kami sedang dalam tahap pengembangan. Hubungi kami untuk melihat contoh pekerjaan dan solusi yang kami tawarkan.
                        </p>
                        <a href="/contact" class="inline-flex items-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($portofolios->hasPages())
            <div class="flex justify-center mt-12">
                <nav class="inline-flex rounded-xl shadow-lg bg-white border-2 border-slate-100 overflow-hidden">
                    {{-- Previous Button --}}
                    @if ($portofolios->onFirstPage())
                        <span class="px-4 py-3 text-slate-400 bg-slate-50 cursor-not-allowed flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </span>
                    @else
                        <a href="{{ $portofolios->previousPageUrl() }}" class="px-4 py-3 text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors flex items-center border-r border-slate-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach ($portofolios->getUrlRange(1, $portofolios->lastPage()) as $page => $url)
                        @if ($page == $portofolios->currentPage())
                            <span class="px-5 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold border-r border-slate-100">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-5 py-3 text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors font-medium border-r border-slate-100">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next Button --}}
                    @if ($portofolios->hasMorePages())
                        <a href="{{ $portofolios->nextPageUrl() }}" class="px-4 py-3 text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    @else
                        <span class="px-4 py-3 text-slate-400 bg-slate-50 cursor-not-allowed flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    @endif
                </nav>
            </div>

            <!-- Pagination Info -->
            <div class="text-center mt-6">
                <p class="text-sm text-slate-600">
                    Showing <span class="font-semibold text-indigo-600">{{ $portofolios->firstItem() }}</span> 
                    to <span class="font-semibold text-indigo-600">{{ $portofolios->lastItem() }}</span> 
                    of <span class="font-semibold text-indigo-600">{{ $portofolios->total() }}</span> portfolios
                </p>
            </div>
            @endif
        </div>
    </section>
    
    <style>
        @keyframes blob {
            0%, 100% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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
        .animate-fadeIn {
            animation: fadeIn 0.6s ease-out;
        }
        .animate-slideUp {
            animation: slideUp 0.8s ease-out;
        }
        .animation-delay-200 {
            animation-delay: 0.2s;
            animation-fill-mode: backwards;
        }
        .animation-delay-400 {
            animation-delay: 0.4s;
            animation-fill-mode: backwards;
        }
        
        /* View Toggle Button Styles */
        .view-toggle-btn {
            color: #64748b;
            background: transparent;
            border: none;
        }
        
        .view-toggle-btn.active {
            background: white;
            color: #4f46e5;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
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
            border-radius: 1.5rem;
            overflow: hidden;
        }
        
        .list-view .portfolio-card .relative {
            width: 320px;
            height: 100%;
            min-height: 240px;
            flex-shrink: 0;
        }
        
        .list-view .portfolio-card .aspect-video {
            aspect-ratio: auto;
            height: 100%;
        }
        
        .list-view .portfolio-card img,
        .list-view .portfolio-card .bg-gradient-to-br {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .list-view .portfolio-card .p-6 {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem;
        }
        
        .list-view .portfolio-card .text-xl {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .list-view .portfolio-card .text-sm {
            font-size: 1rem;
            line-height: 1.6;
        }
        
        .list-view .portfolio-card .line-clamp-3 {
            -webkit-line-clamp: 4;
        }
        
        .list-view .portfolio-card .absolute {
            top: 1rem;
            left: 1rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .list-view .portfolio-card {
                flex-direction: column;
            }
            
            .list-view .portfolio-card .relative {
                width: 100%;
                height: 200px;
                min-height: 200px;
            }
            
            .list-view .portfolio-card .aspect-video {
                aspect-ratio: 16/9;
                height: auto;
            }
            
            .list-view .portfolio-card .p-6 {
                padding: 1.5rem;
            }
        }
        
        /* Line clamp utilities */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gridViewBtn = document.getElementById('gridViewBtn');
            const listViewBtn = document.getElementById('listViewBtn');
            const portfolioContainer = document.getElementById('portfolioContainer');
            
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
                        const offset = 80;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add staggered animation on load
            const cards = document.querySelectorAll('.portfolio-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });
        });
    </script>
@endsection
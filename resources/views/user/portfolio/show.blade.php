@extends('user.layouts.app')
@section('title', $portfolio->judul . ' - MyCompany')
@section('content')

<style>
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
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
    .animate-slideUp { animation: slideUp 0.8s ease-out; }
    .animate-float { animation: float 3s ease-in-out infinite; }
</style>

<!-- Portfolio Detail Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-slate-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-6">
        <!-- Breadcrumb -->
        <div class="mb-8 animate-fadeIn">
            <nav class="flex items-center text-sm text-slate-600">
                <a href="/" class="hover:text-indigo-600 transition-colors">Home</a>
                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="/portfolio" class="hover:text-indigo-600 transition-colors">Portfolio</a>
                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-slate-900 font-semibold">{{ Str::limit($portfolio->judul, 50) }}</span>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="max-w-5xl mx-auto">
            <!-- Portfolio Image -->
            <div class="mb-12 animate-slideUp">
                <div class="relative group overflow-hidden rounded-3xl shadow-2xl">
                    @if($portfolio->gambar)
                        <img src="{{ asset('storage/' . $portfolio->gambar) }}" 
                             alt="{{ $portfolio->judul }}"
                             class="w-full h-auto max-h-[600px] object-cover">
                    @else
                        <div class="w-full h-96 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>

            <!-- Portfolio Info -->
            <div class="bg-white rounded-3xl shadow-2xl border-2 border-slate-100 p-10 mb-12 animate-slideUp">
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2 animate-pulse"></span>
                        Project Details
                    </span>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                    {{ $portfolio->judul }}
                </h1>

                <div class="prose prose-lg max-w-none">
                    <p class="text-slate-600 leading-relaxed text-lg whitespace-pre-line">
                        {{ $portfolio->deskripsi }}
                    </p>
                </div>

                <!-- Meta Info -->
                <div class="mt-8 pt-8 border-t-2 border-slate-100 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex items-start gap-3">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Date</h3>
                            <p class="text-slate-600 text-sm">{{ $portfolio->created_at->format('F Y') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Category</h3>
                            <p class="text-slate-600 text-sm">Project Portfolio</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Status</h3>
                            <p class="text-slate-600 text-sm">Completed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-16 animate-slideUp">
                @if($previousPortfolio)
                <a href="{{ route('portfolio.show', $previousPortfolio->id) }}" 
                   class="group bg-white hover:bg-gradient-to-r hover:from-indigo-50 hover:to-purple-50 rounded-2xl border-2 border-slate-200 hover:border-indigo-300 p-5 transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-slate-100 group-hover:bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors">
                            <svg class="w-5 h-5 text-slate-600 group-hover:text-indigo-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-1">Previous Project</p>
                            <h3 class="font-semibold text-sm text-slate-900 group-hover:text-indigo-600 transition-colors line-clamp-1">
                                {{ $previousPortfolio->judul }}
                            </h3>
                        </div>
                    </div>
                </a>
                @else
                <div></div>
                @endif

                @if($nextPortfolio)
                <a href="{{ route('portfolio.show', $nextPortfolio->id) }}" 
                   class="group bg-white hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 rounded-2xl border-2 border-slate-200 hover:border-purple-300 p-5 transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3 md:flex-row-reverse md:text-right">
                        <div class="w-10 h-10 bg-slate-100 group-hover:bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors">
                            <svg class="w-5 h-5 text-slate-600 group-hover:text-purple-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-1">Next Project</p>
                            <h3 class="font-semibold text-sm text-slate-900 group-hover:text-purple-600 transition-colors line-clamp-1">
                                {{ $nextPortfolio->judul }}
                            </h3>
                        </div>
                    </div>
                </a>
                @endif
            </div>

            <!-- Related Portfolios -->
            @if($relatedPortfolios->count() > 0)
            <div class="animate-slideUp">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                        Related <span class="text-indigo-600">Projects</span>
                    </h2>
                    <p class="text-lg text-slate-600">Explore more of our amazing work</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    @foreach($relatedPortfolios as $related)
                    <a href="{{ route('portfolio.show', $related->id) }}" 
                       class="group bg-white rounded-2xl border-2 border-slate-100 hover:border-indigo-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 overflow-hidden">
                        <div class="relative overflow-hidden aspect-video">
                            @if($related->gambar)
                                <img src="{{ asset('storage/' . $related->gambar) }}" 
                                     alt="{{ $related->judul }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-slate-900 group-hover:text-indigo-600 transition-colors mb-2 line-clamp-2">
                                {{ $related->judul }}
                            </h3>
                            <p class="text-sm text-slate-600 line-clamp-2">
                                {{ $related->deskripsi }}
                            </p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Back to Portfolio Button -->
            <div class="text-center mt-16">
                <a href="/portfolio" 
                   class="inline-flex items-center bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                    </svg>
                    Back to Portfolio
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add staggered animation on load
        const elements = document.querySelectorAll('.animate-slideUp');
        elements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                element.style.transition = 'all 0.8s ease';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, 100 + (index * 150));
        });
    });
</script>

@endsection
@extends('admin.layouts.app')

@section('title', 'Tentang Kami')
@section('breadcrumb', 'Kelola Konten / Tentang Kami')
@section('page-title', 'Tentang Kami')
@section('page-description', 'Kelola informasi perusahaan, visi, misi dan profil lengkap')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.5s ease;
    }
    
    .animate-slideUp {
        animation: slideUp 0.6s ease;
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>

@if(session('success'))
    <div class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 rounded-xl border-none p-4 mb-6 border-l-4 border-green-500 animate-fadeIn">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden animate-slideUp">
    @if($tentang)
        <!-- Header Section -->
        <div class="relative bg-gradient-to-br from-indigo-500 via-purple-600 to-indigo-700 p-8 md:p-10 overflow-hidden">
            <!-- Decorative Background Elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24 blur-2xl"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white text-2xl mr-5 shadow-lg animate-float">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-white m-0 mb-2">{{ $tentang->judul }}</h2>
                        <p class="text-indigo-100 text-sm m-0">Profil & Informasi Perusahaan</p>
                    </div>
                </div>
                <a href="{{ route('tentang.edit') }}" class="bg-white/20 backdrop-blur-md hover:bg-white/30 text-white rounded-full px-6 py-3 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center border border-white/30">
                    <i class="bi bi-pencil-square mr-2 text-lg"></i>
                    Edit Konten
                </a>
            </div>
        </div>

        <!-- Body Content -->
        <div class="p-8 md:p-10">
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
                @if($tentang->deskripsi)
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 border border-blue-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center text-white">
                            <i class="bi bi-file-text text-xl"></i>
                        </div>
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-sm font-semibold text-blue-600 uppercase tracking-wide mb-1">Deskripsi</h3>
                    <p class="text-blue-900 font-bold text-lg">Tersedia</p>
                </div>
                @endif
                
                @if($tentang->visi)
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 border border-purple-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center text-white">
                            <i class="bi bi-eye-fill text-xl"></i>
                        </div>
                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wide mb-1">Visi</h3>
                    <p class="text-purple-900 font-bold text-lg">Tersedia</p>
                </div>
                @endif
                
                @if($tentang->misi)
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 border border-green-200 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center text-white">
                            <i class="bi bi-bullseye text-xl"></i>
                        </div>
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-sm font-semibold text-green-600 uppercase tracking-wide mb-1">Misi</h3>
                    <p class="text-green-900 font-bold text-lg">Tersedia</p>
                </div>
                @endif
            </div>

            <!-- Deskripsi Section -->
            @if($tentang->deskripsi)
            <div class="mb-8 bg-gradient-to-br from-slate-50 to-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center mb-5 pb-4 border-b-2 border-slate-200">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white mr-3 shadow-md">
                        <i class="bi bi-file-text-fill text-lg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 m-0">Deskripsi Perusahaan</h3>
                </div>
                <div class="text-slate-600 leading-relaxed text-base">
                    <p class="m-0 whitespace-pre-line">{{ $tentang->deskripsi }}</p>
                </div>
            </div>
            @endif

            <!-- Visi & Misi Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Visi Section -->
                @if($tentang->visi)
                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 border border-purple-200 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-5 pb-4 border-b-2 border-purple-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center text-white mr-3 shadow-md">
                            <i class="bi bi-eye-fill text-lg"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 m-0">Visi Perusahaan</h3>
                    </div>
                    <div class="text-slate-600 leading-relaxed text-base">
                        <p class="m-0 whitespace-pre-line">{{ $tentang->visi }}</p>
                    </div>
                </div>
                @endif

                <!-- Misi Section -->
                @if($tentang->misi)
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 border border-green-200 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="flex items-center mb-5 pb-4 border-b-2 border-green-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center text-white mr-3 shadow-md">
                            <i class="bi bi-bullseye text-lg"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 m-0">Misi Perusahaan</h3>
                    </div>
                    <div class="text-slate-600 leading-relaxed text-base">
                        <p class="m-0 whitespace-pre-line">{{ $tentang->misi }}</p>
                    </div>
                </div>
                @endif
            </div>

            <!-- Gambar Section -->
            @if($tentang->gambar)
            <div class="bg-gradient-to-br from-amber-50 to-white rounded-2xl p-8 border border-amber-200 shadow-sm">
                <div class="flex items-center mb-6 pb-4 border-b-2 border-amber-200">
                    <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center text-white mr-3 shadow-md">
                        <i class="bi bi-image-fill text-lg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 m-0">Gambar Perusahaan</h3>
                </div>
                <div class="text-center">
                    <div class="inline-block relative group">
                        <img src="{{ asset($tentang->gambar) }}" 
                             alt="{{ $tentang->judul }}" 
                             class="max-w-full h-auto max-h-[500px] rounded-2xl shadow-xl border-4 border-white object-cover transition-all duration-300 group-hover:shadow-2xl group-hover:-translate-y-1">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <p class="text-sm text-slate-500 mt-4 italic">{{ $tentang->judul }}</p>
                </div>
            </div>
            @endif
        </div>

    @else
        <!-- Empty State -->
        <div class="text-center py-24 px-8">
            <div class="inline-block mb-6">
                <div class="w-32 h-32 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-3xl flex items-center justify-center animate-float">
                    <i class="bi bi-building text-6xl text-indigo-400"></i>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-slate-700 mb-3">Belum Ada Data Tentang Kami</h3>
            <p class="text-base text-slate-500 mb-8 max-w-2xl mx-auto leading-relaxed">
                Mulai dengan menambahkan informasi perusahaan, visi, misi, dan profil lengkap untuk memberikan kesan profesional kepada pengunjung website Anda.
            </p>
            <a href="{{ route('tentang.create') }}" class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full px-8 py-4 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-1 text-base">
                <i class="bi bi-plus-circle mr-2 text-xl"></i>
                Buat Konten Tentang Kami
            </a>
        </div>
    @endif
</div>

<script>
    // Add staggered animation on load
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.bg-gradient-to-br');
        sections.forEach((section, index) => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                section.style.transition = 'all 0.5s ease';
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }, 100 + (index * 100));
        });
    });
</script>

@endsection
@extends('admin.layouts.app')

@section('title', 'Layanan')
@section('page-title', 'Kelola Layanan')
@section('page-description', 'Kelola semua layanan yang ditawarkan perusahaan Anda')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.3s ease;
    }
    
    .animate-slideUp {
        animation: slideUp 0.4s ease;
    }
    
    .animate-pulse-custom {
        animation: pulse 2s ease infinite;
    }
</style>

@if(session('success'))
    <div class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 rounded-xl border-none p-4 mb-6 border-l-4 border-green-500">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif

<!-- Header Section -->
<div class="bg-white rounded-2xl p-6 mb-8 shadow-lg border border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="flex items-center">
        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white text-xl mr-4 shadow-lg">
            <i class="bi bi-tools"></i>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-800 m-0">Kelola Layanan</h3>
            <p class="text-sm text-slate-500 m-0">Total {{ count($layanans) }} layanan tersedia</p>
        </div>
    </div>
    <a href="{{ route('layanan.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full px-6 py-3 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center">
        <i class="bi bi-plus-circle mr-2 text-base"></i>
        Tambah Layanan Baru
    </a>
</div>

@if(count($layanans) > 0)
    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach($layanans as $index => $layanan)
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl relative">
                <div class="relative h-56 overflow-hidden group">
                    @if($layanan->gambar)
                        <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->judul }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-gradient-to-r from-green-500 to-green-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                            <i class="bi bi-image"></i> Bergambar
                        </div>
                    @else
                        <img src="https://via.placeholder.com/600x400/6366f1/ffffff?text=No+Image" alt="Default" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-gradient-to-r from-slate-500 to-slate-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                            <i class="bi bi-image-fill"></i> No Image
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <div class="p-6">
                    <h5 class="text-xl font-bold text-slate-800 mb-3 line-clamp-2 leading-tight">{{ $layanan->judul }}</h5>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-3 mb-5">{{ Str::limit($layanan->deskripsi, 120) }}</p>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="flex-1 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-center rounded-lg px-4 py-2.5 text-sm font-semibold shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center">
                            <i class="bi bi-pencil-square mr-1.5"></i>
                            Edit
                        </a>
                        <button onclick="deleteService({{ $layanan->id }}, '{{ addslashes($layanan->judul) }}')" class="flex-1 bg-gradient-to-r from-red-500 to-red-600 text-white text-center rounded-lg px-4 py-2.5 text-sm font-semibold shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center">
                            <i class="bi bi-trash3 mr-1.5"></i>
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <!-- Empty State -->
    <div class="text-center py-20 px-8 bg-white rounded-3xl shadow-xl border border-gray-200">
        <div class="text-8xl text-gray-300 mb-6">
            <i class="bi bi-tools"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-600 mb-3">Belum Ada Layanan</h3>
        <p class="text-base text-slate-500 mb-8 max-w-lg mx-auto leading-relaxed">
            Mulai tambahkan layanan-layanan yang ditawarkan perusahaan Anda. 
            Layanan yang menarik akan membantu menarik perhatian calon klien dan meningkatkan kredibilitas bisnis.
        </p>
        <a href="{{ route('layanan.create') }}" class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full px-6 py-3 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5">
            <i class="bi bi-plus-circle mr-2"></i>
            Tambah Layanan Pertama
        </a>
    </div>
@endif

<!-- Modern Delete Modal -->
<div class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-[9999] animate-fadeIn justify-center items-center" id="deleteModalOverlay">
    <div class="bg-white rounded-3xl max-w-md w-11/12 overflow-hidden shadow-2xl animate-slideUp">
        <div class="bg-gradient-to-r from-red-100 to-red-200 p-8 text-center relative">
            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse-custom shadow-xl">
                <i class="bi bi-trash3-fill text-4xl text-white"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800 m-0">Hapus Layanan?</h3>
        </div>
        
        <div class="p-8">
            <div class="bg-slate-50 rounded-xl p-4 mb-5 border-l-4 border-red-500">
                <div class="text-xs text-slate-500 uppercase tracking-wide mb-1">Layanan yang akan dihapus:</div>
                <div class="text-lg font-semibold text-slate-800 break-words" id="deleteItemName"></div>
            </div>
            
            <div class="flex items-start bg-amber-50 rounded-xl p-4 mb-6 border-l-4 border-amber-500">
                <i class="bi bi-exclamation-triangle-fill text-amber-500 text-xl mr-3 mt-0.5"></i>
                <div class="flex-1">
                    <div class="font-semibold text-amber-900 mb-1 text-sm">Perhatian!</div>
                    <p class="text-xs text-amber-800 leading-relaxed m-0">
                        Tindakan ini bersifat permanen dan tidak dapat dibatalkan. 
                        Semua data dan gambar terkait akan dihapus secara otomatis.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-3">
                <button class="flex-1 bg-gray-100 text-slate-600 border-none rounded-xl px-6 py-3.5 text-sm font-semibold transition-all duration-300 hover:bg-gray-200 hover:-translate-y-0.5 flex items-center justify-center" onclick="closeDeleteModal()">
                    <i class="bi bi-x-circle mr-2 text-base"></i>
                    Batal
                </button>
                <button class="flex-1 bg-gradient-to-r from-red-500 to-red-600 text-white border-none rounded-xl px-6 py-3.5 text-sm font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center" onclick="confirmDelete()">
                    <i class="bi bi-trash3 mr-2 text-base"></i>
                    Ya, Hapus
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Hidden delete form -->
<form id="deleteForm" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>

<script>
    let serviceToDelete = { id: null, title: '' };
    
    // Show delete modal
    function deleteService(id, title) {
        serviceToDelete = { id, title };
        document.getElementById('deleteItemName').textContent = title;
        document.getElementById('deleteModalOverlay').classList.remove('hidden');
        document.getElementById('deleteModalOverlay').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    // Close delete modal
    function closeDeleteModal() {
        document.getElementById('deleteModalOverlay').classList.add('hidden');
        document.getElementById('deleteModalOverlay').classList.remove('flex');
        document.body.style.overflow = 'auto';
        serviceToDelete = { id: null, title: '' };
    }
    
    // Confirm delete
    function confirmDelete() {
        if (serviceToDelete.id) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/layanan/${serviceToDelete.id}`;
            form.submit();
        }
    }
    
    // Close modal when clicking overlay
    document.getElementById('deleteModalOverlay').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });
    
    // Close modal with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
    
    // Add staggered animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.grid > div');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>
@endsection
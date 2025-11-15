@extends('admin.layouts.app')

@section('title', 'Daftar Kontak')
@section('page-title', 'Kelola Pesan Kontak')
@section('page-description', 'Lihat dan kelola semua pesan masuk dari pengunjung website')

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
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.5s ease;
    }
    
    .animate-slideUp {
        animation: slideUp 0.6s ease;
    }
    
    .animate-slideIn {
        animation: slideIn 0.5s ease;
    }
    
    .delete-modal-overlay.active {
        display: flex;
    }
</style>

@if(session('success'))
    <div class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 rounded-xl border-none p-4 mb-6 border-l-4 border-green-500 animate-slideIn">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif

<!-- Header Section -->
<div class="bg-white rounded-2xl p-6 mb-8 shadow-lg border border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4 relative overflow-hidden animate-slideUp">
    <!-- Decorative Top Border -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-red-500 to-rose-600"></div>
    
    <div class="flex items-center">
        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-rose-600 rounded-xl flex items-center justify-center text-white text-xl mr-4 shadow-lg">
            <i class="bi bi-envelope-fill"></i>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-800 m-0">Pesan Masuk</h3>
            <p class="text-sm text-slate-500 m-0">Kelola semua pesan dari pengunjung</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-red-500 to-rose-600 text-white rounded-full px-5 py-2.5 font-semibold flex items-center gap-2 shadow-md">
        <i class="bi bi-collection"></i>
        Total: {{ $kontaks->total() }} pesan
    </div>
</div>

<!-- Filter Section -->
<div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-6 mb-6 border border-gray-200 animate-slideUp">
    <div class="flex flex-col md:flex-row items-center gap-4">
        <div class="flex items-center gap-2">
            <i class="bi bi-funnel-fill text-indigo-500 text-lg"></i>
            <span class="font-semibold text-slate-700">Filter:</span>
        </div>
        <input 
            type="text" 
            id="searchInput"
            class="flex-1 px-4 py-2.5 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-300 outline-none bg-white" 
            placeholder="Cari berdasarkan nama atau email...">
        <select class="px-4 py-2.5 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all duration-300 outline-none bg-white font-medium">
            <option>Semua waktu</option>
            <option>Hari ini</option>
            <option>Minggu ini</option>
            <option>Bulan ini</option>
        </select>
    </div>
</div>

<!-- Table View -->
<div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-200 animate-slideUp" id="tableView">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-slate-50 to-gray-100 border-b-2 border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left font-bold text-slate-700 uppercase text-xs tracking-wide">#</th>
                    <th class="px-6 py-4 text-left font-bold text-slate-700 uppercase text-xs tracking-wide">Nama</th>
                    <th class="px-6 py-4 text-left font-bold text-slate-700 uppercase text-xs tracking-wide">Email</th>
                    <th class="px-6 py-4 text-left font-bold text-slate-700 uppercase text-xs tracking-wide">Pesan</th>
                    <th class="px-6 py-4 text-left font-bold text-slate-700 uppercase text-xs tracking-wide">Tanggal</th>
                    <th class="px-6 py-4 text-center font-bold text-slate-700 uppercase text-xs tracking-wide">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kontaks as $kontak)
                    <tr class="border-b border-gray-100 transition-all duration-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-gray-50 table-row">
                        <td class="px-6 py-4">
                            <span class="bg-slate-100 text-slate-600 font-semibold text-xs px-2.5 py-1 rounded-md inline-block min-w-[32px] text-center">
                                {{ $loop->iteration + ($kontaks->currentPage() - 1) * $kontaks->perPage() }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2 font-semibold text-slate-800 contact-name">
                                <span class="w-2 h-2 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full"></span>
                                {{ $kontak->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-indigo-600 font-medium contact-email">{{ $kontak->email }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-slate-600 max-w-xs">{{ Str::limit($kontak->message, 80) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-slate-600 text-sm font-medium">{{ $kontak->created_at->format('d M Y') }}</div>
                            <div class="text-slate-400 text-xs">{{ $kontak->created_at->format('H:i') }} WIB</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2 justify-center">
                                <a href="{{ route('kontak.show', $kontak) }}" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-3 py-2 rounded-lg text-xs font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-1">
                                    <i class="bi bi-eye"></i>
                                    Lihat
                                </a>
                                <button onclick="deleteContact({{ $kontak->id }}, '{{ addslashes($kontak->name) }}')" class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-2 rounded-lg text-xs font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-1">
                                    <i class="bi bi-trash"></i>
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12">
                            <div class="text-center">
                                <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
                                <h3 class="text-xl font-semibold text-slate-600 mb-2">Belum Ada Pesan Masuk</h3>
                                <p class="text-slate-500">Belum ada pesan dari pengunjung website. Pesan akan muncul di sini ketika ada yang menghubungi Anda.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Card View -->
<div class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 animate-slideUp" id="cardView">
    @forelse($kontaks as $kontak)
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl table-row">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full"></span>
                    <span class="font-bold text-slate-800 contact-name">{{ $kontak->name }}</span>
                </div>
                <span class="bg-slate-100 text-slate-600 font-semibold text-xs px-2.5 py-1 rounded-md">
                    #{{ $loop->iteration + ($kontaks->currentPage() - 1) * $kontaks->perPage() }}
                </span>
            </div>
            
            <div class="mb-4">
                <div class="flex items-center gap-2 text-sm mb-2">
                    <i class="bi bi-envelope text-indigo-500"></i>
                    <span class="text-indigo-600 font-medium contact-email">{{ $kontak->email }}</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i class="bi bi-calendar3"></i>
                    <span>{{ $kontak->created_at->format('d M Y, H:i') }} WIB</span>
                </div>
            </div>
            
            <div class="bg-slate-50 rounded-xl p-3 mb-4">
                <p class="text-slate-600 text-sm line-clamp-3">{{ $kontak->message }}</p>
            </div>
            
            <div class="flex gap-2">
                <a href="{{ route('kontak.show', $kontak) }}" class="flex-1 bg-gradient-to-r from-blue-500 to-blue-600 text-white text-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                    <i class="bi bi-eye mr-1"></i> Lihat
                </a>
                <button onclick="deleteContact({{ $kontak->id }}, '{{ addslashes($kontak->name) }}')" class="flex-1 bg-gradient-to-r from-red-500 to-red-600 text-white text-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                    <i class="bi bi-trash mr-1"></i> Hapus
                </button>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-12">
            <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-semibold text-slate-600 mb-2">Belum Ada Pesan Masuk</h3>
            <p class="text-slate-500">Belum ada pesan dari pengunjung website.</p>
        </div>
    @endforelse
</div>

<!-- Pagination -->
@if($kontaks->hasPages())
    <div class="flex justify-center mt-8">
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-2">
            {{ $kontaks->links() }}
        </div>
    </div>
@endif

<!-- Modern Delete Modal -->
<div class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-[9999] animate-fadeIn justify-center items-center" id="deleteModalOverlay">
    <div class="bg-white rounded-3xl max-w-md w-11/12 overflow-hidden shadow-2xl animate-slideUp">
        <div class="bg-gradient-to-r from-red-100 to-red-200 p-8 text-center relative">
            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-xl">
                <i class="bi bi-trash3-fill text-4xl text-white"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800 m-0">Hapus Pesan?</h3>
        </div>
        
        <div class="p-8">
            <div class="bg-slate-50 rounded-xl p-4 mb-5 border-l-4 border-red-500">
                <div class="text-xs text-slate-500 uppercase tracking-wide mb-1">Pesan dari:</div>
                <div class="text-lg font-semibold text-slate-800 break-words" id="deleteItemName"></div>
            </div>
            
            <div class="flex items-start bg-amber-50 rounded-xl p-4 mb-6 border-l-4 border-amber-500">
                <i class="bi bi-exclamation-triangle-fill text-amber-500 text-xl mr-3 mt-0.5"></i>
                <div class="flex-1">
                    <div class="font-semibold text-amber-900 mb-1 text-sm">Perhatian!</div>
                    <p class="text-xs text-amber-800 leading-relaxed m-0">
                        Tindakan ini bersifat permanen dan tidak dapat dibatalkan. 
                        Pesan akan dihapus secara otomatis dari database.
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
    let contactToDelete = { id: null, name: '' };
    
    // Toggle between table and card view
    function toggleView(view) {
        const tableView = document.getElementById('tableView');
        const cardView = document.getElementById('cardView');
        const tableBtn = document.getElementById('tableBtn');
        const cardBtn = document.getElementById('cardBtn');
        
        if (view === 'table') {
            tableView.classList.remove('hidden');
            cardView.classList.add('hidden');
            tableBtn.classList.add('bg-white', 'text-indigo-500', 'shadow-md');
            tableBtn.classList.remove('bg-transparent', 'text-slate-500');
            cardBtn.classList.add('bg-transparent', 'text-slate-500');
            cardBtn.classList.remove('bg-white', 'text-indigo-500', 'shadow-md');
        } else {
            tableView.classList.add('hidden');
            cardView.classList.remove('hidden');
            cardBtn.classList.add('bg-white', 'text-indigo-500', 'shadow-md');
            cardBtn.classList.remove('bg-transparent', 'text-slate-500');
            tableBtn.classList.add('bg-transparent', 'text-slate-500');
            tableBtn.classList.remove('bg-white', 'text-indigo-500', 'shadow-md');
        }
    }
    
    // Show delete modal
    function deleteContact(id, name) {
        contactToDelete = { id, name };
        document.getElementById('deleteItemName').textContent = name;
        document.getElementById('deleteModalOverlay').classList.remove('hidden');
        document.getElementById('deleteModalOverlay').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    // Close delete modal
    function closeDeleteModal() {
        document.getElementById('deleteModalOverlay').classList.add('hidden');
        document.getElementById('deleteModalOverlay').classList.remove('flex');
        document.body.style.overflow = 'auto';
        contactToDelete = { id: null, name: '' };
    }
    
    // Confirm delete
    function confirmDelete() {
        if (contactToDelete.id) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/kontak/${contactToDelete.id}`;
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
    
    // Add animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.table-row');
        rows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                row.style.transition = 'all 0.5s ease';
                row.style.opacity = '1';
                row.style.transform = 'translateY(0)';
            }, index * 50);
        });
    });
    
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('.table-row');
        
        rows.forEach(row => {
            const name = row.querySelector('.contact-name').textContent.toLowerCase();
            const email = row.querySelector('.contact-email').textContent.toLowerCase();
            
            if (name.includes(searchTerm) || email.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

@endsection
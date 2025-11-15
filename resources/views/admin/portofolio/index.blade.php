@extends('admin.layouts.app')

@section('title', 'Daftar Portofolio')
@section('page-title', 'Kelola Portofolio')
@section('page-description', 'Kelola semua portofolio dan karya terbaik perusahaan Anda')

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
    
    .delete-modal-overlay.active {
        display: flex;
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
        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center text-white text-xl mr-4 shadow-lg">
            <i class="bi bi-images"></i>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-800 m-0">Kelola Portofolio</h3>
            <p class="text-sm text-slate-500 m-0">Total {{ count($portofolios) }} portofolio tersimpan</p>
        </div>
    </div>
    <a href="{{ route('portofolio.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full px-6 py-3 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center">
        <i class="bi bi-plus-circle mr-2 text-base"></i>
        Tambah Portofolio Baru
    </a>
</div>

@if(count($portofolios) > 0)
    <!-- View Toggle & Statistics -->
    <div class="bg-white rounded-xl p-5 mb-6 shadow-lg border border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="flex bg-gray-100 rounded-lg p-1">
            <button class="toggle-btn bg-white text-indigo-500 shadow-md border-none px-4 py-2 rounded-md font-medium transition-all duration-300 flex items-center" onclick="toggleView('grid')" id="gridBtn">
                <i class="bi bi-grid-3x3 mr-2"></i>
                Grid View
            </button>
            <button class="toggle-btn bg-transparent text-slate-500 border-none px-4 py-2 rounded-md font-medium transition-all duration-300 flex items-center" onclick="toggleView('table')" id="tableBtn">
                <i class="bi bi-table mr-2"></i>
                Table View
            </button>
        </div>
        <div class="flex gap-6 items-center">
            <div class="text-center">
                <div class="text-xl font-bold text-slate-800">{{ count($portofolios) }}</div>
                <div class="text-xs text-slate-500 uppercase tracking-wide">Total Portfolio</div>
            </div>
        </div>
    </div>

    <!-- Grid View -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8" id="gridView">
        @foreach($portofolios as $index => $p)
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl relative">
                <div class="relative h-48 overflow-hidden group">
                    @if($p->gambar)
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->judul }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute top-3 right-3 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                            <i class="bi bi-image"></i> Bergambar
                        </div>
                    @else
                        <img src="https://via.placeholder.com/400x200/f59e0b/ffffff?text=No+Image" alt="Default" class="w-full h-full object-cover">
                        <div class="absolute top-3 right-3 bg-gradient-to-r from-slate-500 to-slate-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                            <i class="bi bi-image-alt"></i> No Image
                        </div>
                    @endif
                </div>
                
                <div class="p-5">
                    <h5 class="text-lg font-bold text-slate-800 mb-2 line-clamp-2">{{ $p->judul }}</h5>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-3 mb-4">{{ Str::limit($p->deskripsi, 120) }}</p>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-2 pt-3 border-t border-gray-100">
                        <a href="{{ route('portofolio.edit', $p) }}" class="flex-1 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-center rounded-lg px-4 py-2.5 text-sm font-semibold shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center">
                            <i class="bi bi-pencil-square mr-1.5"></i>
                            Edit
                        </a>
                        <button onclick="deletePortfolio({{ $p->id }}, '{{ addslashes($p->judul) }}')" class="flex-1 bg-gradient-to-r from-red-500 to-red-600 text-white text-center rounded-lg px-4 py-2.5 text-sm font-semibold shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center">
                            <i class="bi bi-trash3 mr-1.5"></i>
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Table View -->
    <div class="hidden bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-200" id="tableView">
        <table class="w-full text-sm">
            <thead class="bg-gradient-to-r from-slate-50 to-gray-200">
                <tr>
                    <th class="border-none p-5 font-semibold text-slate-800 uppercase text-xs tracking-wide text-left" width="5%">#</th>
                    <th class="border-none p-5 font-semibold text-slate-800 uppercase text-xs tracking-wide text-left" width="25%">Judul</th>
                    <th class="border-none p-5 font-semibold text-slate-800 uppercase text-xs tracking-wide text-left" width="35%">Deskripsi</th>
                    <th class="border-none p-5 font-semibold text-slate-800 uppercase text-xs tracking-wide text-left" width="15%">Gambar</th>
                    <th class="border-none p-5 font-semibold text-slate-800 uppercase text-xs tracking-wide text-left" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portofolios as $p)
                <tr class="border-b border-gray-100 transition-colors duration-300 hover:bg-slate-50">
                    <td class="border-none p-4 align-middle"><strong>{{ $loop->iteration }}</strong></td>
                    <td class="border-none p-4 align-middle">
                        <div class="font-semibold text-slate-800">{{ $p->judul }}</div>
                    </td>
                    <td class="border-none p-4 align-middle">
                        <div class="text-slate-500 leading-relaxed">
                            {{ Str::limit($p->deskripsi, 80) }}
                        </div>
                    </td>
                    <td class="border-none p-4 align-middle">
                        @if($p->gambar)
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->judul }}" class="w-15 h-15 rounded-lg object-cover shadow-md">
                        @else
                            <div class="w-15 h-15 bg-gray-100 rounded-lg flex items-center justify-center text-slate-500 text-xs">
                                <i class="bi bi-image"></i>
                            </div>
                        @endif
                    </td>
                    <td class="border-none p-4 align-middle">
                        <div class="flex gap-2">
                            <a href="{{ route('portofolio.edit', $p) }}" class="bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-md px-3 py-1.5 text-xs font-medium transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg flex items-center">
                                <i class="bi bi-pencil-square me-1"></i>
                                Edit
                            </a>
                            <button class="bg-gradient-to-r from-red-500 to-red-600 text-white rounded-md px-3 py-1.5 text-xs font-medium transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg flex items-center" onclick="deletePortfolio({{ $p->id }}, '{{ $p->judul }}')">
                                <i class="bi bi-trash3 me-1"></i>
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-2">
            {{ $portofolios->links() }}
        </div>
    </div>

@else
    <!-- Empty State -->
    <div class="text-center py-20 px-8 bg-white rounded-3xl shadow-xl border border-gray-200">
        <div class="text-8xl text-gray-300 mb-6">
            <i class="bi bi-images"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-600 mb-3">Belum Ada Portofolio</h3>
        <p class="text-base text-slate-500 mb-8 max-w-lg mx-auto leading-relaxed">
            Mulai showcase karya terbaik perusahaan Anda dengan menambahkan portofolio. 
            Portofolio yang menarik akan membantu membangun kredibilitas dan menarik perhatian calon klien.
        </p>
        <a href="{{ route('portofolio.create') }}" class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full px-6 py-3 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5">
            <i class="bi bi-plus-circle mr-2"></i>
            Tambah Portofolio Pertama
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
            <h3 class="text-2xl font-bold text-slate-800 m-0">Hapus Portofolio?</h3>
        </div>
        
        <div class="p-8">
            <div class="bg-slate-50 rounded-xl p-4 mb-5 border-l-4 border-red-500">
                <div class="text-xs text-slate-500 uppercase tracking-wide mb-1">Portofolio yang akan dihapus:</div>
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
    let portfolioToDelete = { id: null, title: '' };
    
    // Toggle between grid and table view
    function toggleView(view) {
        const gridView = document.getElementById('gridView');
        const tableView = document.getElementById('tableView');
        const gridBtn = document.getElementById('gridBtn');
        const tableBtn = document.getElementById('tableBtn');
        
        if (view === 'grid') {
            gridView.classList.remove('hidden');
            tableView.classList.add('hidden');
            gridBtn.classList.add('bg-white', 'text-indigo-500', 'shadow-md');
            gridBtn.classList.remove('bg-transparent', 'text-slate-500');
            tableBtn.classList.add('bg-transparent', 'text-slate-500');
            tableBtn.classList.remove('bg-white', 'text-indigo-500', 'shadow-md');
        } else {
            gridView.classList.add('hidden');
            tableView.classList.remove('hidden');
            tableBtn.classList.add('bg-white', 'text-indigo-500', 'shadow-md');
            tableBtn.classList.remove('bg-transparent', 'text-slate-500');
            gridBtn.classList.add('bg-transparent', 'text-slate-500');
            gridBtn.classList.remove('bg-white', 'text-indigo-500', 'shadow-md');
        }
    }
    
    // Show delete modal
    function deletePortfolio(id, title) {
        portfolioToDelete = { id, title };
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
        portfolioToDelete = { id: null, title: '' };
    }
    
    // Confirm delete
    function confirmDelete() {
        if (portfolioToDelete.id) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/portofolio/${portfolioToDelete.id}`;
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
</script>
@endsection
@extends('admin.layouts.app')

@section('title', 'Daftar Portofolio')
@section('breadcrumb', 'Kelola Konten / Portofolio')
@section('page-title', 'Kelola Portofolio')
@section('page-description', 'Kelola semua portofolio dan karya terbaik perusahaan Anda')

@section('content')
<style>
    .header-section {
        background: white;
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 32px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .header-info {
        display: flex;
        align-items: center;
    }
    
    .header-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #f59e0b, #d97706);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        margin-right: 16px;
        box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
    }
    
    .header-text h3 {
        margin: 0;
        font-size: 20px;
        font-weight: 700;
        color: #1e293b;
    }
    
    .header-text p {
        margin: 0;
        font-size: 14px;
        color: #64748b;
    }
    
    .add-btn {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: white;
        border: none;
        border-radius: 25px;
        padding: 12px 24px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
    }
    
    .add-btn:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(99, 102, 241, 0.4);
    }
    
    .add-btn i {
        margin-right: 8px;
        font-size: 16px;
    }
    
    .view-toggle {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 24px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .toggle-buttons {
        display: flex;
        background: #f1f5f9;
        border-radius: 8px;
        padding: 4px;
    }
    
    .toggle-btn {
        background: transparent;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        color: #64748b;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    
    .toggle-btn.active {
        background: white;
        color: #6366f1;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .toggle-btn i {
        margin-right: 6px;
    }
    
    .stats-info {
        display: flex;
        gap: 24px;
        align-items: center;
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        font-size: 20px;
        font-weight: 700;
        color: #1e293b;
    }
    
    .stat-label {
        font-size: 12px;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    /* Grid View */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
        margin-bottom: 32px;
    }
    
    .portfolio-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .portfolio-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
    }
    
    .portfolio-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .portfolio-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
    }
    
    .portfolio-card:hover .portfolio-image img {
        transform: scale(1.05);
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
        opacity: 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .portfolio-card:hover .image-overlay {
        opacity: 1;
    }
    
    .overlay-actions {
        display: flex;
        gap: 12px;
    }
    
    .overlay-btn {
        background: rgba(255, 255, 255, 0.9);
        color: #1e293b;
        border: none;
        border-radius: 25px;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        cursor: pointer;
        text-decoration: none;
        display: flex;
        align-items: center;
    }
    
    .overlay-btn:hover {
        background: white;
        transform: translateY(-2px);
        color: #1e293b;
    }
    
    .overlay-btn i {
        margin-right: 6px;
    }
    
    .portfolio-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
    }
    
    .portfolio-content {
        padding: 20px;
    }
    
    .portfolio-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 8px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .portfolio-description {
        color: #64748b;
        font-size: 14px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Table View */
    .portfolio-table {
        display: none;
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
    }
    
    .portfolio-table.active {
        display: block;
    }
    
    .table-modern {
        margin: 0;
        font-size: 14px;
    }
    
    .table-modern thead {
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    }
    
    .table-modern thead th {
        border: none;
        padding: 20px 16px;
        font-weight: 600;
        color: #1e293b;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.5px;
    }
    
    .table-modern tbody tr {
        border-bottom: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: #f8fafc;
    }
    
    .table-modern tbody td {
        border: none;
        padding: 16px;
        vertical-align: middle;
    }
    
    .table-image {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .table-actions {
        display: flex;
        gap: 8px;
    }
    
    .btn-edit-table {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        border: none;
        border-radius: 6px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
        display: flex;
        align-items: center;
    }
    
    .btn-edit-table:hover {
        color: white;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
    }
    
    .btn-delete-table {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        border: none;
        border-radius: 6px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .btn-delete-table:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }
    
    .empty-state {
        text-align: center;
        padding: 80px 32px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
    }
    
    .empty-icon {
        font-size: 80px;
        color: #cbd5e1;
        margin-bottom: 24px;
    }
    
    .empty-title {
        font-size: 24px;
        font-weight: 700;
        color: #475569;
        margin-bottom: 12px;
    }
    
    .empty-description {
        font-size: 16px;
        color: #64748b;
        margin-bottom: 32px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }
    
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 32px;
    }
    
    .pagination {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        padding: 8px;
    }
    
    @media (max-width: 768px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        
        .header-section {
            flex-direction: column;
            text-align: center;
            gap: 16px;
        }
        
        .view-toggle {
            flex-direction: column;
            gap: 16px;
        }
        
        .stats-info {
            justify-content: center;
        }
        
        .portfolio-content {
            padding: 16px;
        }
        
        .empty-state {
            padding: 60px 20px;
        }
        
        .table-modern {
            font-size: 12px;
        }
        
        .table-modern thead th {
            padding: 12px 8px;
        }
        
        .table-modern tbody td {
            padding: 12px 8px;
        }
    }
</style>

@if(session('success'))
    <div class="alert alert-success" style="border-radius: 12px; border: none; padding: 16px 20px; margin-bottom: 24px; background: linear-gradient(135deg, #d1fae5, #a7f3d0); color: #065f46; border-left: 4px solid #10b981;">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif

<!-- Header Section -->
<div class="header-section">
    <div class="header-info">
        <div class="header-icon">
            <i class="bi bi-images"></i>
        </div>
        <div class="header-text">
            <h3>Kelola Portofolio</h3>
            <p>Total {{ count($portofolios) }} portofolio tersimpan</p>
        </div>
    </div>
    <a href="{{ route('portofolio.create') }}" class="add-btn">
        <i class="bi bi-plus-circle"></i>
        Tambah Portofolio Baru
    </a>
</div>

@if(count($portofolios) > 0)
    <!-- View Toggle & Statistics -->
    <div class="view-toggle">
        <div class="toggle-buttons">
            <button class="toggle-btn active" onclick="toggleView('grid')" id="gridBtn">
                <i class="bi bi-grid-3x3"></i>
                Grid View
            </button>
            <button class="toggle-btn" onclick="toggleView('table')" id="tableBtn">
                <i class="bi bi-table"></i>
                Table View
            </button>
        </div>
        <div class="stats-info">
            <div class="stat-item">
                <div class="stat-number">{{ count($portofolios) }}</div>
                <div class="stat-label">Total Portfolio</div>
            </div>
        </div>
    </div>

    <!-- Grid View -->
    <div class="portfolio-grid" id="gridView">
        @foreach($portofolios as $index => $p)
            <div class="portfolio-card" style="animation-delay: {{ $index * 0.1 }}s">
                <div class="portfolio-image">
                    @if($p->gambar)
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->judul }}">
                        <div class="portfolio-badge">
                            <i class="bi bi-image"></i> Bergambar
                        </div>
                    @else
                        <img src="https://via.placeholder.com/400x200/f59e0b/ffffff?text=No+Image" alt="Default">
                        <div class="portfolio-badge" style="background: linear-gradient(135deg, #64748b, #475569);">
                            <i class="bi bi-image-alt"></i> No Image
                        </div>
                    @endif
                    
                    <div class="image-overlay">
                        <div class="overlay-actions">
                            <a href="{{ route('portofolio.edit', $p) }}" class="overlay-btn">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                            <button class="overlay-btn" onclick="deletePortfolio({{ $p->id }}, '{{ $p->judul }}')">
                                <i class="bi bi-trash3"></i>
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-content">
                    <h5 class="portfolio-title">{{ $p->judul }}</h5>
                    <p class="portfolio-description">{{ Str::limit($p->deskripsi, 120) }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Table View -->
    <div class="portfolio-table" id="tableView">
        <table class="table table-modern">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="25%">Judul</th>
                    <th width="35%">Deskripsi</th>
                    <th width="15%">Gambar</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portofolios as $p)
                <tr>
                    <td><strong>{{ $loop->iteration }}</strong></td>
                    <td>
                        <div style="font-weight: 600; color: #1e293b;">{{ $p->judul }}</div>
                    </td>
                    <td>
                        <div style="color: #64748b; line-height: 1.4;">
                            {{ Str::limit($p->deskripsi, 80) }}
                        </div>
                    </td>
                    <td>
                        @if($p->gambar)
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->judul }}" class="table-image">
                        @else
                            <div style="width: 60px; height: 60px; background: #f1f5f9; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 12px;">
                                <i class="bi bi-image"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ route('portofolio.edit', $p) }}" class="btn-edit-table">
                                <i class="bi bi-pencil-square me-1"></i>
                                Edit
                            </a>
                            <button class="btn-delete-table" onclick="deletePortfolio({{ $p->id }}, '{{ $p->judul }}')">
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
    <div class="pagination-wrapper">
        {{ $portofolios->links() }}
    </div>

@else
    <!-- Empty State -->
    <div class="empty-state">
        <div class="empty-icon">
            <i class="bi bi-images"></i>
        </div>
        <h3 class="empty-title">Belum Ada Portofolio</h3>
        <p class="empty-description">
            Mulai showcase karya terbaik perusahaan Anda dengan menambahkan portofolio. 
            Portofolio yang menarik akan membantu membangun kredibilitas dan menarik perhatian calon klien.
        </p>
        <a href="{{ route('portofolio.create') }}" class="add-btn">
            <i class="bi bi-plus-circle"></i>
            Tambah Portofolio Pertama
        </a>
    </div>
@endif

<!-- Hidden delete form -->
<form id="deleteForm" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<script>
    // Toggle between grid and table view
    function toggleView(view) {
        const gridView = document.getElementById('gridView');
        const tableView = document.getElementById('tableView');
        const gridBtn = document.getElementById('gridBtn');
        const tableBtn = document.getElementById('tableBtn');
        
        if (view === 'grid') {
            gridView.style.display = 'grid';
            tableView.classList.remove('active');
            gridBtn.classList.add('active');
            tableBtn.classList.remove('active');
            
            // Animate grid items
            const cards = gridView.querySelectorAll('.portfolio-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.4s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 50);
            });
        } else {
            gridView.style.display = 'none';
            tableView.classList.add('active');
            gridBtn.classList.remove('active');
            tableBtn.classList.add('active');
            
            // Animate table rows
            const rows = tableView.querySelectorAll('tbody tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '1';
                    row.style.transform = 'translateX(0)';
                }, index * 50);
            });
        }
        
        // Save preference to localStorage
        localStorage.setItem('portfolioView', view);
    }
    
    // Load saved view preference
    document.addEventListener('DOMContentLoaded', function() {
        const savedView = localStorage.getItem('portfolioView') || 'grid';
        toggleView(savedView);
        
        // Animate cards on initial load
        const cards = document.querySelectorAll('.portfolio-card');
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
    
    // Enhanced delete function
    function deletePortfolio(id, title) {
        if (confirm(`🗑️ HAPUS PORTOFOLIO\n\n` +
                   `Apakah Anda yakin ingin menghapus "${title}"?\n\n` +
                   `⚠️ Tindakan ini tidak dapat dibatalkan!\n\n` +
                   `Klik OK untuk melanjutkan atau Cancel untuk membatalkan.`)) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/portofolio/${id}`;
            form.submit();
        }
    }
    
    // Add hover effects
    document.querySelectorAll('.portfolio-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
</script>
@endsection
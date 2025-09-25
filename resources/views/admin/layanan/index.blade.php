@extends('admin.layouts.app')

@section('title', 'Layanan')
@section('breadcrumb', 'Kelola Konten / Layanan')
@section('page-title', 'Kelola Layanan')
@section('page-description', 'Kelola semua layanan yang ditawarkan perusahaan Anda')

@section('content')
<style>
    .header-actions {
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
        background: linear-gradient(135deg, #10b981, #059669);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        margin-right: 16px;
        box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
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
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 24px;
        margin-bottom: 32px;
    }
    
    .service-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
    }
    
    .service-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }
    
    .service-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
    }
    
    .service-card:hover .service-image img {
        transform: scale(1.05);
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
        opacity: 0;
        transition: all 0.3s ease;
    }
    
    .service-card:hover .image-overlay {
        opacity: 1;
    }
    
    .service-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    }
    
    .service-content {
        padding: 24px;
    }
    
    .service-title {
        font-size: 20px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .service-description {
        color: #64748b;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .service-actions {
        display: flex;
        gap: 12px;
        margin-top: auto;
    }
    
    .btn-edit {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        flex: 1;
        justify-content: center;
    }
    
    .btn-edit:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(245, 158, 11, 0.3);
    }
    
    .btn-edit i {
        margin-right: 6px;
        font-size: 14px;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        flex: 1;
        justify-content: center;
        cursor: pointer;
    }
    
    .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(239, 68, 68, 0.3);
    }
    
    .btn-delete i {
        margin-right: 6px;
        font-size: 14px;
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
    
    .stats-bar {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 24px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .stat-item {
        text-align: center;
        padding: 0 24px;
        border-right: 1px solid #e2e8f0;
    }
    
    .stat-item:last-child {
        border-right: none;
    }
    
    .stat-number {
        font-size: 28px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 4px;
    }
    
    .stat-label {
        font-size: 14px;
        color: #64748b;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        
        .header-actions {
            flex-direction: column;
            text-align: center;
            gap: 16px;
        }
        
        .service-content {
            padding: 20px;
        }
        
        .service-actions {
            flex-direction: column;
        }
        
        .empty-state {
            padding: 60px 20px;
        }
        
        .empty-icon {
            font-size: 60px;
        }
        
        .empty-title {
            font-size: 20px;
        }
        
        .stats-bar {
            flex-direction: column;
            gap: 16px;
        }
        
        .stat-item {
            border-right: none;
            border-bottom: 1px solid #e2e8f0;
            padding: 16px 0;
        }
        
        .stat-item:last-child {
            border-bottom: none;
        }
    }
    
    /* Animation classes */
    .fade-in {
        animation: fadeInUp 0.6s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .stagger-animation {
        animation-delay: var(--delay);
    }
</style>

@if(session('success'))
    <div class="alert alert-success" style="border-radius: 12px; border: none; padding: 16px 20px; margin-bottom: 24px; background: linear-gradient(135deg, #d1fae5, #a7f3d0); color: #065f46; border-left: 4px solid #10b981;">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif

<!-- Header Actions -->
<div class="header-actions fade-in">
    <div class="header-info">
        <div class="header-icon">
            <i class="bi bi-tools"></i>
        </div>
        <div class="header-text">
            <h3>Kelola Layanan</h3>
            <p>Total {{ count($layanans) }} layanan tersedia</p>
        </div>
    </div>
    <a href="{{ route('layanan.create') }}" class="add-btn">
        <i class="bi bi-plus-circle"></i>
        Tambah Layanan Baru
    </a>
</div>

@if(count($layanans) > 0)
    <!-- Services Grid -->
    <div class="services-grid">
        @foreach($layanans as $index => $layanan)
            <div class="service-card fade-in stagger-animation" style="--delay: {{ $index * 0.1 }}s">
                <div class="service-image">
                    @if($layanan->gambar)
                        <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->judul }}">
                        <div class="service-badge">
                            <i class="bi bi-image"></i> Bergambar
                        </div>
                    @else
                        <img src="https://via.placeholder.com/600x400/6366f1/ffffff?text=No+Image" 
                             alt="Default Image">
                        <div class="service-badge" style="background: linear-gradient(135deg, #64748b, #475569);">
                            <i class="bi bi-image-fill"></i> No Image
                        </div>
                    @endif
                    <div class="image-overlay"></div>
                </div>
                
                <div class="service-content">
                    <h5 class="service-title">{{ $layanan->judul }}</h5>
                    <p class="service-description">{{ Str::limit($layanan->deskripsi, 120) }}</p>
                    
                    <div class="service-actions">
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn-edit">
                            <i class="bi bi-pencil-square"></i>
                            Edit
                        </a>
                        <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" class="d-inline flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete w-100" 
                                    onclick="return confirm('⚠️ Apakah Anda yakin ingin menghapus layanan ini?\n\nLayanan: {{ $layanan->judul }}\n\nTindakan ini tidak dapat dibatalkan!')">
                                <i class="bi bi-trash3"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <!-- Empty State -->
    <div class="empty-state fade-in">
        <div class="empty-icon">
            <i class="bi bi-tools"></i>
        </div>
        <h3 class="empty-title">Belum Ada Layanan</h3>
        <p class="empty-description">
            Mulai tambahkan layanan-layanan yang ditawarkan perusahaan Anda. 
            Layanan yang menarik akan membantu menarik perhatian calon klien dan meningkatkan kredibilitas bisnis.
        </p>
        <a href="{{ route('layanan.create') }}" class="add-btn">
            <i class="bi bi-plus-circle"></i>
            Tambah Layanan Pertama
        </a>
    </div>
@endif

<script>
    // Add staggered animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.service-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
        
        // Add hover sound effect (optional)
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
    
    // Enhanced delete confirmation
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const form = this.closest('form');
            const serviceName = this.dataset.serviceName || 'layanan ini';
            
            // Custom confirmation dialog
            if (confirm(`🗑️ HAPUS LAYANAN\n\n` +
                       `Apakah Anda yakin ingin menghapus "${serviceName}"?\n\n` +
                       `⚠️ Tindakan ini tidak dapat dibatalkan!\n\n` +
                       `Klik OK untuk melanjutkan atau Cancel untuk membatalkan.`)) {
                form.submit();
            }
        });
    });
</script>
@endsection
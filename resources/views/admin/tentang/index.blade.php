@extends('admin.layouts.app')
@section('title', 'Tentang Kami')
@section('breadcrumb', 'Kelola Konten / Tentang Kami')
@section('page-title', 'Tentang Kami')
@section('page-description', 'Kelola informasi perusahaan, visi, misi dan profil lengkap')
@section('content')
<style>
    .content-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .content-card:hover {
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: white;
        padding: 24px 32px;
        border: none;
        position: relative;
        overflow: hidden;
    }
    
    .card-header-custom::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-20px, -20px) scale(1.1);
        }
    }
    
    .header-content {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .header-title {
        font-size: 24px;
        font-weight: 700;
        margin: 0;
        display: flex;
        align-items: center;
    }
    
    .header-title i {
        margin-right: 12px;
        font-size: 28px;
    }
    
    .edit-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        padding: 10px 20px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
    }
    
    .edit-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    
    .edit-btn i {
        margin-right: 8px;
    }
    
    .card-body-custom {
        padding: 32px;
    }
    
    .info-section {
        margin-bottom: 32px;
    }
    
    .info-section:last-child {
        margin-bottom: 0;
    }
    
    .section-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        padding-bottom: 8px;
        border-bottom: 2px solid #e2e8f0;
    }
    
    .section-title i {
        margin-right: 10px;
        color: #6366f1;
        font-size: 20px;
    }
    
    .section-content {
        font-size: 16px;
        line-height: 1.7;
        color: #475569;
        background: #f8fafc;
        padding: 20px;
        border-radius: 12px;
        border-left: 4px solid #6366f1;
        margin-top: 16px;
    }
    
    .image-container {
        text-align: center;
        margin-top: 24px;
        position: relative;
        max-width: 600px; /* Menambahkan batas maksimum lebar kontainer gambar */
        margin-left: auto;
        margin-right: auto; /* Pusatkan kontainer gambar */
    }
    
    .company-image {
        max-width: 100%; /* Maksimal lebar kontainer */
        height: auto;
        max-height: 400px; /* Batasi tinggi maksimum gambar */
        object-fit: cover; /* Pastikan gambar proporsional */
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        border: 4px solid #e2e8f0;
        display: block; /* Menghilangkan spasi di bawah gambar */
    }
    
    .company-image:hover {
        transform: scale(1.02);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
    }
    
    .image-caption {
        font-size: 14px;
        color: #64748b;
        margin-top: 12px;
        font-style: italic;
    }
    
    .empty-state {
        text-align: center;
        padding: 60px 32px;
        color: #64748b;
    }
    
    .empty-icon {
        font-size: 64px;
        color: #cbd5e1;
        margin-bottom: 16px;
    }
    
    .empty-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #475569;
    }
    
    .empty-description {
        font-size: 16px;
        margin-bottom: 24px;
    }
    
    .create-btn {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: white;
        border: none;
        border-radius: 25px;
        padding: 12px 24px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
    }
    
    .create-btn:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(99, 102, 241, 0.4);
    }
    
    .create-btn i {
        margin-right: 8px;
    }
    
    .alert-custom {
        border-radius: 12px;
        border: none;
        padding: 16px 20px;
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d1fae5, #a7f3d0);
        color: #065f46;
        border-left: 4px solid #10b981;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 32px;
    }
    
    .stat-card {
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #e2e8f0;
    }
    
    .stat-icon {
        font-size: 24px;
        color: #6366f1;
        margin-bottom: 8px;
    }
    
    .stat-label {
        font-size: 14px;
        color: #64748b;
        font-weight: 500;
    }
    
    .stat-value {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
    }
    
    @media (max-width: 768px) {
        .card-body-custom {
            padding: 24px 20px;
        }
        
        .card-header-custom {
            padding: 20px;
        }
        
        .header-content {
            flex-direction: column;
            text-align: center;
            gap: 16px;
        }
        
        .header-title {
            font-size: 20px;
        }
        
        .section-content {
            padding: 16px;
        }
        
        .empty-state {
            padding: 40px 20px;
        }
        
        .image-container {
            max-width: 100%; /* Di mobile, gunakan seluruh lebar kontainer */
        }
    }
</style>
@if(session('success'))
    <div class="alert alert-success alert-custom">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
    </div>
@endif
<div class="content-card">
    @if($tentang)
        <!-- Header Card -->
        <div class="card-header-custom">
            <div class="header-content">
                <h2 class="header-title">
                    <i class="bi bi-building"></i>
                    {{ $tentang->judul }}
                </h2>
                <a href="{{ route('tentang.edit') }}" class="edit-btn">
                    <i class="bi bi-pencil-square"></i>
                    Edit Konten
                </a>
            </div>
        </div>
        <!-- Body Card -->
        <div class="card-body-custom">
            <!-- Deskripsi Section -->
            @if($tentang->deskripsi)
            <div class="info-section">
                <h3 class="section-title">
                    <i class="bi bi-card-text"></i>
                    Deskripsi Perusahaan
                </h3>
                <div class="section-content">
                    {{ $tentang->deskripsi }}
                </div>
            </div>
            @endif
            <!-- Visi Section -->
            @if($tentang->visi)
            <div class="info-section">
                <h3 class="section-title">
                    <i class="bi bi-eye"></i>
                    Visi Perusahaan
                </h3>
                <div class="section-content">
                    {{ $tentang->visi }}
                </div>
            </div>
            @endif
            <!-- Misi Section -->
            @if($tentang->misi)
            <div class="info-section">
                <h3 class="section-title">
                    <i class="bi bi-target"></i>
                    Misi Perusahaan
                </h3>
                <div class="section-content">
                    {{ $tentang->misi }}
                </div>
            </div>
            @endif
            <!-- Gambar Section -->
            @if($tentang->gambar)
            <div class="info-section">
                <h3 class="section-title">
                    <i class="bi bi-image"></i>
                    Gambar Perusahaan
                </h3>
                <div class="image-container">
                    <img src="{{ asset($tentang->gambar) }}" 
                         alt="{{ $tentang->judul }}" 
                         class="company-image">
                    <p class="image-caption">Gambar: {{ $tentang->judul }}</p>
                </div>
            </div>
            @endif
        </div>
    @else
        <!-- Empty State -->
        <div class="empty-state">
            <div class="empty-icon">
                <i class="bi bi-building"></i>
            </div>
            <h3 class="empty-title">Belum Ada Data Tentang Kami</h3>
            <p class="empty-description">
                Mulai dengan menambahkan informasi perusahaan, visi, misi, dan profil lengkap untuk memberikan kesan profesional kepada pengunjung.
            </p>
            <a href="{{ route('tentang.create') }}" class="create-btn">
                <i class="bi bi-plus-circle"></i>
                Buat Konten Tentang Kami
            </a>
        </div>
    @endif
</div>
<script>
    // Add animation on load
    document.addEventListener('DOMContentLoaded', function() {
        const card = document.querySelector('.content-card');
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);
        
        // Animate sections
        const sections = document.querySelectorAll('.info-section');
        sections.forEach((section, index) => {
            section.style.opacity = '0';
            section.style.transform = 'translateX(-30px)';
            
            setTimeout(() => {
                section.style.transition = 'all 0.5s ease';
                section.style.opacity = '1';
                section.style.transform = 'translateX(0)';
            }, 200 + (index * 100));
        });
    });
</script>
@endsection
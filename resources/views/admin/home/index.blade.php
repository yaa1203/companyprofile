@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('page-title', 'Dashboard Admin')
@section('page-description', 'Selamat datang di panel administrasi')

@section('content')
<style>
    /* Global Styles */
    * {
        box-sizing: border-box;
    }

    .dashboard-container {
        min-height: 100vh;
        background: #f8fafc;
        padding: 15px 0;
    }

    /* Welcome Section - Minimized */
    .welcome-section {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        color: white;
        border-radius: 12px;
        padding: 20px 24px;
        margin-bottom: 24px;
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.15);
    }
    
    .welcome-content {
        text-align: center;
    }
    
    .welcome-title {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 6px;
        line-height: 1.3;
    }
    
    .welcome-subtitle {
        font-size: 14px;
        opacity: 0.9;
        margin: 0;
        font-weight: 400;
    }

    /* Statistics Grid - Compact */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 16px;
        margin-bottom: 24px;
    }
    
    .stats-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .stats-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--card-gradient);
        border-radius: 12px 12px 0 0;
    }
    
    .stats-card.primary {
        --card-gradient: #3b82f6;
    }
    
    .stats-card.success {
        --card-gradient: #10b981;
    }
    
    .stats-card.warning {
        --card-gradient: #f59e0b;
    }
    
    .stats-card.danger {
        --card-gradient: #ef4444;
    }
    
    .stats-header {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .stats-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: white;
        background: var(--card-gradient);
        margin-right: 12px;
    }
    
    .stats-title {
        font-size: 14px;
        font-weight: 600;
        color: #64748b;
        margin: 0;
    }
    
    .stats-number {
        font-size: 24px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        line-height: 1;
    }
    
    .stats-link {
        display: inline-flex;
        align-items: center;
        color: var(--card-gradient);
        text-decoration: none;
        font-weight: 500;
        font-size: 13px;
        transition: all 0.2s ease;
    }
    
    .stats-link:hover {
        color: #374151;
        transform: translateX(4px);
    }
    
    .stats-link i {
        margin-left: 4px;
        font-size: 12px;
    }

    /* Dashboard Grid Layout - Simplified */
    .dashboard-grid {
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 24px;
        margin-top: 24px;
    }

    /* Quick Actions - Compact */
    .quick-actions {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
        height: fit-content;
    }
    
    .quick-actions-title {
        font-size: 16px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
    }
    
    .quick-actions-title i {
        margin-right: 8px;
        color: #6366f1;
        font-size: 18px;
    }
    
    .action-btn {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 16px;
        text-decoration: none;
        color: #475569;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .action-btn:hover {
        background: #6366f1;
        color: white;
        transform: translateX(4px);
        border-color: #6366f1;
    }
    
    .action-btn i {
        margin-right: 12px;
        font-size: 16px;
        width: 16px;
        text-align: center;
    }
    
    .action-btn:last-child {
        margin-bottom: 0;
    }

    .action-content {
        flex: 1;
    }

    .action-title {
        font-weight: 600;
        margin-bottom: 2px;
    }

    .action-subtitle {
        font-size: 12px;
        opacity: 0.7;
    }

    /* Recent Activity - Compact */
    .recent-activity {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
    }

    .recent-activity-title {
        font-size: 16px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
    }

    .recent-activity-title i {
        margin-right: 8px;
        color: #10b981;
        font-size: 18px;
    }

    .activity-item {
        background: #f8fafc;
        border: 1px solid #f1f5f9;
        border-radius: 8px;
        padding: 12px 16px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
        position: relative;
    }

    .activity-item:hover {
        background: #f1f5f9;
        transform: translateX(4px);
    }

    .activity-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--activity-color);
        border-radius: 0 4px 4px 0;
    }

    .activity-item.new { --activity-color: #10b981; }
    .activity-item.updated { --activity-color: #3b82f6; }
    .activity-item.deleted { --activity-color: #ef4444; }

    .activity-icon {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        font-size: 12px;
        color: white;
        background: var(--activity-color);
    }

    .activity-content {
        flex: 1;
    }

    .activity-title {
        font-weight: 600;
        color: #1e293b;
        font-size: 13px;
        margin-bottom: 2px;
    }

    .activity-time {
        font-size: 11px;
        color: #64748b;
    }

    /* Responsive Design */
    @media (max-width: 2000px) {
        .dashboard-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
        
        .welcome-section {
            padding: 16px 20px;
            margin-bottom: 16px;
            border-radius: 8px;
        }
        
        .welcome-title {
            font-size: 18px;
        }

        .welcome-subtitle {
            font-size: 13px;
        }

        .stats-card {
            padding: 16px;
        }
        
        .stats-number {
            font-size: 20px;
        }

        .quick-actions, .recent-activity {
            padding: 16px;
        }
    }

    @media (max-width: 480px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
        
        .dashboard-container {
            padding: 10px 0;
        }
    }

    /* Loading Animation - Simplified */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(248, 250, 252, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .spinner {
        width: 32px;
        height: 32px;
        border: 3px solid #e2e8f0;
        border-top: 3px solid #6366f1;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="dashboard-container">
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner"></div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-content">
            <h1 class="welcome-title">Selamat Datang, {{ \App\Models\Admin::find(session('admin_id'))->name ?? 'Admin' }}!</h1>
            <p class="welcome-subtitle">Kelola seluruh konten website Anda dengan mudah</p>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <!-- Tentang -->
        <div class="stats-card primary">
            <div class="stats-header">
                <div class="stats-icon">
                    <i class="bi bi-building"></i>
                </div>
                <h5 class="stats-title">Halaman Tentang</h5>
            </div>
            <div class="stats-number">{{ $totalTentang }}</div>
            <a href="{{ route('tentang.index') }}" class="stats-link">
                Kelola Data
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Layanan -->
        <div class="stats-card success">
            <div class="stats-header">
                <div class="stats-icon">
                    <i class="bi bi-tools"></i>
                </div>
                <h5 class="stats-title">Layanan</h5>
            </div>
            <div class="stats-number">{{ $totalLayanan }}</div>
            <a href="{{ route('layanan.index') }}" class="stats-link">
                Kelola Layanan
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Portofolio -->
        <div class="stats-card warning">
            <div class="stats-header">
                <div class="stats-icon">
                    <i class="bi bi-images"></i>
                </div>
                <h5 class="stats-title">Portofolio</h5>
            </div>
            <div class="stats-number">{{ $totalPortofolio }}</div>
            <a href="{{ route('portofolio.index') }}" class="stats-link">
                Kelola Portofolio
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Kontak -->
        <div class="stats-card danger">
            <div class="stats-header">
                <div class="stats-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <h5 class="stats-title">Pesan Masuk</h5>
            </div>
            <div class="stats-number">{{ $totalKontak }}</div>
            <a href="{{ route('kontak.index') }}" class="stats-link">
                Lihat Pesan
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Dashboard Grid -->
    <div class="dashboard-grid">
        <!-- Quick Actions -->
        <div class="quick-actions">
            <h3 class="quick-actions-title">
                <i class="bi bi-lightning-fill"></i>
                Aksi Cepat
            </h3>
            
            <a href="{{ route('tentang.index') }}" class="action-btn">
                <i class="bi bi-plus-lg"></i>
                <div class="action-content">
                    <div class="action-title">Cek About</div>
                    <div class="action-subtitle">Lihat halaman tentang baru</div>
                </div>
            </a>
            
            <a href="{{ route('layanan.create') }}" class="action-btn">
                <i class="bi bi-plus-lg"></i>
                <div class="action-content">
                    <div class="action-title">Tambah Layanan</div>
                    <div class="action-subtitle">Buat layanan baru</div>
                </div>
            </a>
            
            <a href="{{ route('portofolio.create') }}" class="action-btn">
                <i class="bi bi-plus-lg"></i>
                <div class="action-content">
                    <div class="action-title">Tambah Portofolio</div>
                    <div class="action-subtitle">Upload karya terbaru</div>
                </div>
            </a>
            
            <a href="{{ route('kontak.index') }}" class="action-btn">
                <i class="bi bi-envelope"></i>
                <div class="action-content">
                    <div class="action-title">Cek Pesan</div>
                    <div class="action-subtitle">Lihat pesan terbaru</div>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    // Hide loading overlay after page loads
    window.addEventListener('load', function() {
        const loadingOverlay = document.getElementById('loadingOverlay');
        loadingOverlay.style.opacity = '0';
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
        }, 300);
    });

    // Simple animation on load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.stats-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });

    // Console welcome message
    console.log(`🎉 Welcome to Admin Dashboard - Minimalist Version!`);
</script>
@endsection
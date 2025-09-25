@extends('admin.layouts.app')

@section('title', 'Detail Pesan')
@section('breadcrumb', 'Kontak > Detail')
@section('page-title', 'Detail Pesan')
@section('page-description', 'Lihat detail lengkap pesan dari pengunjung website')

@section('content')
<style>
    .detail-container {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        position: relative;
        margin-bottom: 24px;
    }
    
    .detail-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    }
    
    .detail-header {
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        padding: 32px;
        border-bottom: 1px solid #e2e8f0;
        position: relative;
    }
    
    .detail-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        border-radius: 2px;
    }
    
    .detail-title {
        display: flex;
        align-items: center;
        font-size: 28px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 8px;
    }
    
    .detail-title i {
        margin-right: 16px;
        color: #3b82f6;
        font-size: 32px;
    }
    
    .detail-subtitle {
        color: #64748b;
        font-size: 16px;
        margin: 0;
    }
    
    .detail-content {
        padding: 32px;
    }
    
    .sender-info {
        background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
        border: 2px solid #bae6fd;
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 32px;
        position: relative;
        overflow: hidden;
    }
    
    .sender-info::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: rgba(59, 130, 246, 0.05);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-30px, -20px) scale(1.1);
        }
    }
    
    .sender-info-content {
        position: relative;
        z-index: 1;
    }
    
    .sender-info h3 {
        color: #0f172a;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
    }
    
    .sender-info h3 i {
        margin-right: 10px;
        color: #3b82f6;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .info-item {
        background: white;
        border-radius: 12px;
        padding: 20px;
        border: 1px solid #e1e7ef;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }
    
    .info-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        border-color: #3b82f6;
    }
    
    .info-label {
        font-size: 12px;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }
    
    .info-label i {
        margin-right: 6px;
        color: #3b82f6;
    }
    
    .info-value {
        font-size: 16px;
        font-weight: 600;
        color: #0f172a;
        word-break: break-all;
    }
    
    .message-section {
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 32px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }
    
    .message-header {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        padding: 20px 24px;
        border-bottom: 2px solid #f59e0b;
    }
    
    .message-header h4 {
        color: #92400e;
        font-size: 18px;
        font-weight: 700;
        margin: 0;
        display: flex;
        align-items: center;
    }
    
    .message-header h4 i {
        margin-right: 10px;
        color: #f59e0b;
    }
    
    .message-body {
        padding: 24px;
        background: #fefefe;
        position: relative;
    }
    
    .message-text {
        font-size: 16px;
        line-height: 1.8;
        color: #374151;
        margin: 0;
        white-space: pre-wrap;
        word-wrap: break-word;
        position: relative;
        padding: 20px;
        background: white;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.02);
    }
    
    .message-text::before {
        content: '"';
        position: absolute;
        top: -10px;
        left: 16px;
        font-size: 60px;
        color: #d1d5db;
        font-family: Georgia, serif;
        line-height: 1;
    }
    
    .action-buttons {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        justify-content: flex-start;
        padding: 0 32px 32px;
    }
    
    .btn-back {
        background: linear-gradient(135deg, #64748b, #475569);
        color: white;
        padding: 16px 24px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }
    
    .btn-back:hover {
        background: linear-gradient(135deg, #475569, #334155);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(100, 116, 139, 0.4);
        color: white;
    }
    
    .btn-reply {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
        padding: 16px 24px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }
    
    .btn-reply:hover {
        background: linear-gradient(135deg, #059669, #047857);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 16px 24px;
        border-radius: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }
    
    .btn-delete:hover {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(239, 68, 68, 0.4);
    }
    
    .timestamp-badge {
        background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 12px;
    }
    
    .status-badge {
        background: linear-gradient(135deg, #06d6a0, #118bee);
        color: white;
        padding: 6px 12px;
        border-radius: 16px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: inline-block;
        margin-top: 8px;
    }
    
    @media (max-width: 768px) {
        .detail-header, .detail-content {
            padding: 20px;
        }
        
        .detail-title {
            font-size: 24px;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        
        .action-buttons {
            padding: 0 20px 20px;
            flex-direction: column;
        }
        
        .action-buttons > * {
            width: 100%;
            justify-content: center;
        }
        
        .sender-info, .message-body {
            padding: 16px;
        }
    }
</style>

<div class="detail-container">
    <!-- Header -->
    <div class="detail-header">
        <h2 class="detail-title">
            <i class="bi bi-envelope-open"></i>
            Detail Pesan Masuk
        </h2>
        <p class="detail-subtitle">Informasi lengkap tentang pesan dari pengunjung website</p>
    </div>

    <!-- Content -->
    <div class="detail-content">
        <!-- Sender Information -->
        <div class="sender-info">
            <div class="sender-info-content">
                <h3>
                    <i class="bi bi-person-circle"></i>
                    Informasi Pengirim
                </h3>
                
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="bi bi-person"></i>
                            Nama Lengkap
                        </div>
                        <div class="info-value">{{ $kontak->name }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">
                            <i class="bi bi-envelope"></i>
                            Email Address
                        </div>
                        <div class="info-value">{{ $kontak->email }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">
                            <i class="bi bi-calendar"></i>
                            Tanggal Dikirim
                        </div>
                        <div class="info-value">{{ $kontak->created_at->format('d F Y') }}</div>
                        <div class="timestamp-badge">
                            <i class="bi bi-clock"></i>
                            {{ $kontak->created_at->format('H:i') }} WIB
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">
                            <i class="bi bi-hourglass-split"></i>
                            Waktu Berlalu
                        </div>
                        <div class="info-value">{{ $kontak->created_at->diffForHumans() }}</div>
                        <div class="status-badge">
                            @if($kontak->created_at->isToday())
                                Hari Ini
                            @elseif($kontak->created_at->isYesterday())
                                Kemarin
                            @else
                                {{ $kontak->created_at->diffInDays() }} hari lalu
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Content -->
        <div class="message-section">
            <div class="message-header">
                <h4>
                    <i class="bi bi-chat-quote"></i>
                    Isi Pesan
                </h4>
            </div>
            <div class="message-body">
                <p class="message-text">{{ $kontak->message }}</p>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-buttons">
        <a href="{{ route('kontak.index') }}" class="btn-back">
            <i class="bi bi-arrow-left"></i>
            Kembali ke Daftar
        </a>
        
        <form action="{{ route('kontak.destroy', $kontak) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?\n\nPeringatan: Tindakan ini tidak dapat dibatalkan!')">
                <i class="bi bi-trash"></i>
                Hapus Pesan
            </button>
        </form>
    </div>
</div>

<script>
    // Add animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Animate info items
        const infoItems = document.querySelectorAll('.info-item');
        infoItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.6s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });

        // Animate message section
        const messageSection = document.querySelector('.message-section');
        messageSection.style.opacity = '0';
        messageSection.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            messageSection.style.transition = 'all 0.8s ease';
            messageSection.style.opacity = '1';
            messageSection.style.transform = 'translateY(0)';
        }, 500);

        // Animate action buttons
        const actionButtons = document.querySelectorAll('.action-buttons > *');
        actionButtons.forEach((button, index) => {
            button.style.opacity = '0';
            button.style.transform = 'translateX(-30px)';
            
            setTimeout(() => {
                button.style.transition = 'all 0.5s ease';
                button.style.opacity = '1';
                button.style.transform = 'translateX(0)';
            }, 700 + index * 100);
        });
    });

    // Auto-update timestamp
    function updateTimestamp() {
        const timestampElements = document.querySelectorAll('.status-badge');
        // You can add real-time update logic here if needed
    }

    // Call updateTimestamp every minute
    setInterval(updateTimestamp, 60000);

    // Enhance delete confirmation
    document.querySelector('.btn-delete').addEventListener('click', function(e) {
        e.preventDefault();
        
        const confirmed = confirm(
            '🗑️ Konfirmasi Hapus Pesan\n\n' +
            'Apakah Anda yakin ingin menghapus pesan dari ' + '{{ $kontak->name }}' + '?\n\n' +
            '⚠️ Peringatan: Tindakan ini tidak dapat dibatalkan!\n' +
            '📧 Email: {{ $kontak->email }}\n' +
            '📅 Tanggal: {{ $kontak->created_at->format("d M Y H:i") }}'
        );
        
        if (confirmed) {
            this.closest('form').submit();
        }
    });

    // Copy email to clipboard
    document.querySelectorAll('.info-value').forEach(element => {
        if (element.textContent.includes('@')) {
            element.style.cursor = 'pointer';
            element.title = 'Klik untuk copy email';
            
            element.addEventListener('click', function() {
                navigator.clipboard.writeText(this.textContent).then(function() {
                    // Show success feedback
                    const original = element.textContent;
                    element.textContent = '📋 Email disalin!';
                    element.style.color = '#10b981';
                    
                    setTimeout(() => {
                        element.textContent = original;
                        element.style.color = '#0f172a';
                    }, 2000);
                });
            });
        }
    });
</script>
@endsection
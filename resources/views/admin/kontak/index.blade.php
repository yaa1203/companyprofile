@extends('admin.layouts.app')

@section('title', 'Daftar Kontak')
@section('breadcrumb', 'Kontak')
@section('page-title', 'Kelola Pesan Kontak')
@section('page-description', 'Lihat dan kelola semua pesan masuk dari pengunjung website')

@section('content')
<style>
    .contact-container {
        background: white;
        border-radius: 20px;
        padding: 32px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
    }
    
    .contact-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #ef4444, #dc2626);
    }
    
    .contact-header {
        display: flex;
        align-items: center;
        justify-content: between;
        margin-bottom: 32px;
        flex-wrap: wrap;
        gap: 16px;
    }
    
    .contact-title {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0;
    }
    
    .contact-title i {
        margin-right: 12px;
        color: #ef4444;
        font-size: 28px;
    }
    
    .contact-stats {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 12px 20px;
        border-radius: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .success-alert {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
        padding: 16px 24px;
        border-radius: 12px;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
        animation: slideIn 0.5s ease-out;
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .contacts-table {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
    }
    
    .table-header {
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border-bottom: 2px solid #e2e8f0;
    }
    
    .table-header th {
        padding: 20px 16px;
        font-weight: 700;
        color: #475569;
        text-align: left;
        border-right: 1px solid #e2e8f0;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .table-header th:last-child {
        border-right: none;
        text-align: center;
    }
    
    .table-row {
        border-bottom: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }
    
    .table-row:hover {
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        transform: scale(1.01);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }
    
    .table-row:last-child {
        border-bottom: none;
    }
    
    .table-cell {
        padding: 20px 16px;
        color: #475569;
        border-right: 1px solid #f1f5f9;
        vertical-align: middle;
    }
    
    .table-cell:last-child {
        border-right: none;
        text-align: center;
    }
    
    .contact-name {
        font-weight: 600;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .contact-name::before {
        content: '';
        width: 8px;
        height: 8px;
        background: linear-gradient(135deg, #10b981, #059669);
        border-radius: 50%;
        display: inline-block;
    }
    
    .contact-email {
        color: #6366f1;
        font-weight: 500;
    }
    
    .contact-message {
        color: #64748b;
        line-height: 1.5;
        max-width: 300px;
    }
    
    .contact-date {
        color: #64748b;
        font-size: 13px;
        font-weight: 500;
    }
    
    .action-buttons {
        display: flex;
        gap: 8px;
        align-items: center;
        justify-content: center;
    }
    
    .btn-view {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 13px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .btn-view:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
        color: white;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        border: none;
        font-weight: 500;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .btn-delete:hover {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
    }
    
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #64748b;
    }
    
    .empty-state i {
        font-size: 64px;
        color: #cbd5e1;
        margin-bottom: 16px;
        display: block;
    }
    
    .empty-state h3 {
        font-size: 20px;
        font-weight: 600;
        color: #475569;
        margin-bottom: 8px;
    }
    
    .empty-state p {
        font-size: 16px;
        color: #64748b;
        margin: 0;
    }
    
    .pagination-wrapper {
        margin-top: 32px;
        display: flex;
        justify-content: center;
    }
    
    .filter-section {
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }
    
    .filter-section .form-control {
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        padding: 10px 16px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: white;
    }
    
    .filter-section .form-control:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        outline: none;
    }
    
    .contact-number {
        background: #f1f5f9;
        color: #475569;
        font-weight: 600;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 6px;
        display: inline-block;
        min-width: 24px;
        text-align: center;
    }
    
    @media (max-width: 768px) {
        .contact-container {
            padding: 20px;
            border-radius: 16px;
        }
        
        .contact-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .contact-title {
            font-size: 20px;
        }
        
        .contacts-table {
            overflow-x: auto;
        }
        
        .table-cell {
            padding: 16px 12px;
            white-space: nowrap;
        }
        
        .contact-message {
            max-width: 200px;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 4px;
        }
    }
</style>

<div class="contact-container">
    <!-- Header -->
    <div class="contact-header">
        <h2 class="contact-title">
            <i class="bi bi-envelope-fill"></i>
            Pesan Masuk
        </h2>
        <div class="contact-stats">
            <i class="bi bi-collection"></i>
            Total: {{ $kontaks->total() }} pesan
        </div>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="success-alert">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
        </div>
    @endif

    <!-- Filter Section -->
    <div class="filter-section">
        <div style="display: flex; align-items: center; gap: 8px;">
            <i class="bi bi-funnel-fill" style="color: #6366f1;"></i>
            <span style="font-weight: 600; color: #475569;">Filter:</span>
        </div>
        <input type="text" class="form-control" placeholder="Cari berdasarkan nama atau email..." style="width: 300px;">
        <select class="form-control" style="width: 150px;">
            <option>Semua waktu</option>
            <option>Hari ini</option>
            <option>Minggu ini</option>
            <option>Bulan ini</option>
        </select>
    </div>

    <!-- Table -->
    <div class="contacts-table">
        <table style="width: 100%; border-collapse: collapse;">
            <thead class="table-header">
                <tr>
                    <th style="width: 60px;">#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th style="width: 140px;">Tanggal</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kontaks as $kontak)
                    <tr class="table-row">
                        <td class="table-cell">
                            <span class="contact-number">{{ $loop->iteration + ($kontaks->currentPage() - 1) * $kontaks->perPage() }}</span>
                        </td>
                        <td class="table-cell">
                            <div class="contact-name">{{ $kontak->name }}</div>
                        </td>
                        <td class="table-cell">
                            <div class="contact-email">{{ $kontak->email }}</div>
                        </td>
                        <td class="table-cell">
                            <div class="contact-message">{{ Str::limit($kontak->message, 80) }}</div>
                        </td>
                        <td class="table-cell">
                            <div class="contact-date">{{ $kontak->created_at->format('d M Y') }}</div>
                            <div class="contact-date" style="font-size: 11px; opacity: 0.7;">{{ $kontak->created_at->format('H:i') }} WIB</div>
                        </td>
                        <td class="table-cell">
                            <div class="action-buttons">
                                <a href="{{ route('kontak.show', $kontak) }}" class="btn-view">
                                    <i class="bi bi-eye"></i>
                                    Lihat
                                </a>
                                <form action="{{ route('kontak.destroy', $kontak) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                        <i class="bi bi-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="table-cell">
                            <div class="empty-state">
                                <i class="bi bi-inbox"></i>
                                <h3>Belum Ada Pesan Masuk</h3>
                                <p>Belum ada pesan dari pengunjung website. Pesan akan muncul di sini ketika ada yang menghubungi Anda.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($kontaks->hasPages())
        <div class="pagination-wrapper">
            {{ $kontaks->links() }}
        </div>
    @endif
</div>

<script>
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

    // Simple search functionality (you can enhance this with AJAX)
    document.querySelector('input[placeholder*="Cari"]').addEventListener('input', function(e) {
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

    // Confirm delete with better styling
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (confirm('Apakah Anda yakin ingin menghapus pesan ini?\n\nPeringatan: Tindakan ini tidak dapat dibatalkan!')) {
                this.closest('form').submit();
            }
        });
    });
</script>
@endsection
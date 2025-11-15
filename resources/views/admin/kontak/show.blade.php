@extends('admin.layouts.app')

@section('title', 'Detail Pesan')
@section('page-title', 'Detail Pesan')
@section('page-description', 'Lihat detail lengkap pesan dari pengunjung website')

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
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-30px, -20px) scale(1.1);
        }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.5s ease;
    }
    
    .animate-slideUp {
        animation: slideUp 0.6s ease;
    }
    
    .animate-float {
        animation: float 8s ease-in-out infinite;
    }
    
    .delete-modal-overlay.active {
        display: flex;
    }
</style>

<!-- Back Button -->
<div class="mb-6 animate-slideUp">
    <a href="{{ route('kontak.index') }}" class="inline-flex items-center text-slate-600 hover:text-blue-600 transition-colors duration-300 font-medium">
        <i class="bi bi-arrow-left mr-2 text-lg"></i>
        Kembali ke Daftar Kontak
    </a>
</div>

<!-- Main Container -->
<div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden animate-slideUp relative mb-6">
    <!-- Decorative Top Border -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
    
    <!-- Header -->
    <div class="bg-gradient-to-br from-slate-50 to-gray-100 p-8 border-b-2 border-gray-200 relative">
        <div class="relative z-10">
            <div class="flex items-center mb-2">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white text-xl mr-4 shadow-lg">
                    <i class="bi bi-envelope-open"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-slate-800 m-0">Detail Pesan Masuk</h2>
                    <p class="text-slate-500 text-sm m-0">Informasi lengkap tentang pesan dari pengunjung</p>
                </div>
            </div>
        </div>
        <!-- Decorative Line -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-16 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
    </div>

    <!-- Content -->
    <div class="p-8 md:p-10">
        <!-- Sender Information -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border-2 border-blue-200 relative overflow-hidden">
            <!-- Floating Background Element -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-200/30 rounded-full -mr-32 -mt-32 blur-3xl animate-float"></div>
            
            <div class="relative z-10">
                <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                    <i class="bi bi-person-circle text-blue-500 text-2xl mr-3"></i>
                    Informasi Pengirim
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Nama -->
                    <div class="bg-white rounded-xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 info-item">
                        <div class="flex items-center text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">
                            <i class="bi bi-person text-blue-500 mr-2"></i>
                            Nama Lengkap
                        </div>
                        <div class="text-base font-semibold text-slate-800">{{ $kontak->name }}</div>
                    </div>
                    
                    <!-- Email -->
                    <div class="bg-white rounded-xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 info-item">
                        <div class="flex items-center text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">
                            <i class="bi bi-envelope text-blue-500 mr-2"></i>
                            Email Address
                        </div>
                        <div class="text-base font-semibold text-slate-800 cursor-pointer hover:text-blue-600 transition-colors" 
                             onclick="copyEmail(this, '{{ $kontak->email }}')" 
                             title="Klik untuk copy email">
                            {{ $kontak->email }}
                        </div>
                    </div>
                    
                    <!-- Tanggal -->
                    <div class="bg-white rounded-xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 info-item">
                        <div class="flex items-center text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">
                            <i class="bi bi-calendar3 text-blue-500 mr-2"></i>
                            Tanggal Dikirim
                        </div>
                        <div class="text-base font-semibold text-slate-800 mb-2">
                            {{ $kontak->created_at->format('d F Y') }}
                        </div>
                        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white text-xs font-semibold px-3 py-1.5 rounded-full">
                            <i class="bi bi-clock"></i>
                            {{ $kontak->created_at->format('H:i') }} WIB
                        </div>
                    </div>
                    
                    <!-- Waktu Berlalu -->
                    <div class="bg-white rounded-xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 info-item">
                        <div class="flex items-center text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">
                            <i class="bi bi-hourglass-split text-blue-500 mr-2"></i>
                            Waktu Berlalu
                        </div>
                        <div class="text-base font-semibold text-slate-800 mb-2">
                            @php
                                use Carbon\Carbon;
                                
                                // Pastikan menggunakan timezone yang benar
                                $now = Carbon::now('Asia/Jakarta');
                                $createdAt = Carbon::parse($kontak->created_at)->timezone('Asia/Jakarta');
                                
                                // Hitung selisih waktu dalam detik
                                $totalSeconds = $now->diffInSeconds($createdAt);
                                
                                // Konversi ke format yang mudah dibaca
                                if ($totalSeconds < 60) {
                                    echo 'Baru saja';
                                } elseif ($totalSeconds < 3600) {
                                    $minutes = floor($totalSeconds / 60);
                                    echo $minutes . ' menit yang lalu';
                                } elseif ($totalSeconds < 86400) {
                                    $hours = floor($totalSeconds / 3600);
                                    echo $hours . ' jam yang lalu';
                                } elseif ($totalSeconds < 604800) {
                                    $days = floor($totalSeconds / 86400);
                                    echo $days . ' hari yang lalu';
                                } elseif ($totalSeconds < 2592000) {
                                    $weeks = floor($totalSeconds / 604800);
                                    echo $weeks . ' minggu yang lalu';
                                } elseif ($totalSeconds < 31536000) {
                                    $months = floor($totalSeconds / 2592000);
                                    echo $months . ' bulan yang lalu';
                                } else {
                                    $years = floor($totalSeconds / 31536000);
                                    echo $years . ' tahun yang lalu';
                                }
                            @endphp
                        </div>
                        <div class="inline-flex items-center bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-xs font-semibold px-3 py-1.5 rounded-full uppercase tracking-wide">
                            @php
                                if ($createdAt->isToday()) {
                                    echo 'Hari Ini';
                                } elseif ($createdAt->isYesterday()) {
                                    echo 'Kemarin';
                                } elseif ($totalSeconds < 604800) {
                                    echo floor($totalSeconds / 86400) . ' Hari Lalu';
                                } elseif ($totalSeconds < 2592000) {
                                    echo floor($totalSeconds / 604800) . ' Minggu Lalu';
                                } elseif ($totalSeconds < 31536000) {
                                    echo floor($totalSeconds / 2592000) . ' Bulan Lalu';
                                } else {
                                    echo floor($totalSeconds / 31536000) . ' Tahun Lalu';
                                }
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Content -->
        <div class="bg-white rounded-2xl overflow-hidden border-2 border-gray-200 shadow-lg mb-8 message-section">
            <div class="bg-gradient-to-r from-amber-100 to-yellow-100 p-5 border-b-2 border-amber-300">
                <h4 class="text-lg font-bold text-amber-900 m-0 flex items-center">
                    <i class="bi bi-chat-quote text-amber-600 text-xl mr-3"></i>
                    Isi Pesan
                </h4>
            </div>
            <div class="p-6 bg-gray-50">
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm relative">
                    <!-- Quote Icon -->
                    <i class="bi bi-quote text-6xl text-gray-200 absolute -top-2 left-4"></i>
                    <p class="text-slate-700 leading-relaxed whitespace-pre-wrap relative z-10 m-0">{{ $kontak->message }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 px-8 md:px-10 pb-8">
        <a href="{{ route('kontak.index') }}" 
           class="flex-1 bg-gradient-to-r from-slate-500 to-slate-600 text-white rounded-xl px-6 py-3.5 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center text-base action-btn">
            <i class="bi bi-arrow-left mr-2 text-lg"></i>
            Kembali ke Daftar
        </a>
        
        <button 
            onclick="deleteContact({{ $kontak->id }}, '{{ addslashes($kontak->name) }}')"
            class="flex-1 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl px-6 py-3.5 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center text-base action-btn">
            <i class="bi bi-trash mr-2 text-lg"></i>
            Hapus Pesan
        </button>
    </div>
</div>

<!-- Info Box -->
<div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-200 animate-slideUp">
    <div class="flex items-start">
        <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
            <i class="bi bi-info-circle text-lg"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Tips Mengelola Pesan</h3>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-blue-500 -mt-1 -ml-1"></i>
                    <span>Klik pada email untuk menyalin ke clipboard secara otomatis</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-blue-500 -mt-1 -ml-1"></i>
                    <span>Pastikan untuk membalas pesan penting dalam 24 jam untuk kepuasan pelanggan</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-blue-500 -mt-1 -ml-1"></i>
                    <span>Pesan yang sudah dihapus tidak dapat dikembalikan, pastikan sebelum menghapus</span>
                </li>
            </ul>
        </div>
    </div>
</div>

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
            <div class="bg-slate-50 rounded-xl p-4 mb-3 border-l-4 border-red-500">
                <div class="text-xs text-slate-500 uppercase tracking-wide mb-1">Pesan dari:</div>
                <div class="text-lg font-semibold text-slate-800 break-words mb-2" id="deleteContactName"></div>
                <div class="text-sm text-slate-600" id="deleteContactEmail"></div>
            </div>
            
            <div class="bg-blue-50 rounded-xl p-4 mb-5 border-l-4 border-blue-500">
                <div class="text-xs text-slate-500 uppercase tracking-wide mb-1">Tanggal dikirim:</div>
                <div class="text-sm font-medium text-slate-700" id="deleteContactDate"></div>
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
    let contactToDelete = { id: null, name: '', email: '', date: '' };
    
    // Show delete modal
    function deleteContact(id, name) {
        contactToDelete = { 
            id: id, 
            name: name,
            email: '{{ $kontak->email }}',
            date: '{{ $kontak->created_at->format("d M Y, H:i") }} WIB'
        };
        
        document.getElementById('deleteContactName').textContent = name;
        document.getElementById('deleteContactEmail').textContent = contactToDelete.email;
        document.getElementById('deleteContactDate').textContent = contactToDelete.date;
        document.getElementById('deleteModalOverlay').classList.remove('hidden');
        document.getElementById('deleteModalOverlay').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    // Close delete modal
    function closeDeleteModal() {
        document.getElementById('deleteModalOverlay').classList.add('hidden');
        document.getElementById('deleteModalOverlay').classList.remove('flex');
        document.body.style.overflow = 'auto';
        contactToDelete = { id: null, name: '', email: '', date: '' };
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
    
    // Copy email to clipboard
    function copyEmail(element, email) {
        navigator.clipboard.writeText(email).then(function() {
            const original = element.textContent;
            element.innerHTML = '<i class="bi bi-check-circle-fill text-green-500 mr-1"></i> Email disalin!';
            element.classList.add('text-green-600');
            
            setTimeout(() => {
                element.textContent = original;
                element.classList.remove('text-green-600');
            }, 2000);
        }).catch(function(err) {
            console.error('Gagal menyalin email:', err);
        });
    }
    
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
        if (messageSection) {
            messageSection.style.opacity = '0';
            messageSection.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                messageSection.style.transition = 'all 0.8s ease';
                messageSection.style.opacity = '1';
                messageSection.style.transform = 'translateY(0)';
            }, 500);
        }

        // Animate action buttons
        const actionButtons = document.querySelectorAll('.action-btn');
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
</script>

@endsection
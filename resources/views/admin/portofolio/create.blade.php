@extends('admin.layouts.app')

@section('title', 'Tambah Portofolio')
@section('page-title', 'Tambah Portofolio')
@section('page-description', 'Tambahkan portofolio dan karya terbaik perusahaan Anda')

@section('content')
<style>
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
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .animate-slideUp {
        animation: slideUp 0.6s ease;
    }
    
    .image-preview-container {
        position: relative;
        display: inline-block;
    }
    
    .image-preview-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 1rem;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding: 1rem;
    }
    
    .image-preview-container:hover .image-preview-overlay {
        opacity: 1;
    }
    
    .file-input-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }
    
    .file-input-wrapper input[type=file] {
        position: absolute;
        left: -9999px;
    }
    
    .file-input-label {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border: 2px dashed #cbd5e1;
        border-radius: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .file-input-label:hover {
        background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
        border-color: #94a3b8;
        transform: translateY(-2px);
    }
    
    .file-input-label.has-file {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        border-color: #f59e0b;
    }
</style>

<!-- Back Button -->
<div class="mb-6 animate-slideUp">
    <a href="{{ route('portofolio.index') }}" class="inline-flex items-center text-slate-600 hover:text-amber-600 transition-colors duration-300 font-medium">
        <i class="bi bi-arrow-left mr-2 text-lg"></i>
        Kembali ke Daftar Portofolio
    </a>
</div>

@if($errors->any())
    <div class="bg-gradient-to-r from-red-100 to-red-200 text-red-800 rounded-xl border-none p-4 mb-6 border-l-4 border-red-500 animate-fadeIn">
        <div class="flex items-start">
            <i class="bi bi-exclamation-triangle-fill text-xl mr-3 mt-0.5"></i>
            <div class="flex-1">
                <h4 class="font-semibold mb-2">Terdapat beberapa kesalahan:</h4>
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<!-- Form Card -->
<div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden animate-slideUp">
    <!-- Header -->
    <div class="bg-gradient-to-br from-amber-500 via-orange-500 to-amber-600 p-8 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24 blur-2xl"></div>
        
        <div class="relative z-10 flex items-center">
            <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white text-2xl mr-5 shadow-lg">
                <i class="bi bi-plus-circle"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-white m-0 mb-1">Tambah Portofolio Baru</h2>
                <p class="text-amber-100 text-sm m-0">Showcase karya terbaik perusahaan Anda</p>
            </div>
        </div>
    </div>

    <!-- Form Body -->
    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data" class="p-8 md:p-10">
        @csrf

        <div class="space-y-6">
            <!-- Judul Portofolio -->
            <div class="form-group">
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    <i class="bi bi-type text-amber-500 mr-2"></i>
                    Judul Portofolio
                    <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="judul" 
                    id="judul" 
                    value="{{ old('judul') }}" 
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition-all duration-300 outline-none @error('judul') border-red-500 @enderror"
                    placeholder="Contoh: Website Company Profile PT. ABC, Mobile App E-Commerce..."
                    required>
                @error('judul')
                    <p class="text-red-500 text-sm mt-2">
                        <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
                <p class="text-xs text-slate-400 mt-2">
                    <i class="bi bi-info-circle mr-1"></i>
                    Berikan judul yang menarik dan menggambarkan project Anda
                </p>
            </div>

            <!-- Deskripsi -->
            <div class="form-group">
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    <i class="bi bi-card-text text-blue-500 mr-2"></i>
                    Deskripsi Portofolio
                    <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="deskripsi" 
                    id="deskripsi" 
                    rows="6" 
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 outline-none resize-none @error('deskripsi') border-red-500 @enderror"
                    placeholder="Jelaskan detail project, teknologi yang digunakan, tantangan yang dihadapi, dan hasil yang dicapai..."
                    required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">
                        <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
                <p class="text-xs text-slate-400 mt-2">
                    <i class="bi bi-info-circle mr-1"></i>
                    Jelaskan secara detail tentang portofolio ini (minimal 50 karakter)
                </p>
            </div>

            <!-- Gambar -->
            <div class="form-group">
                <label class="block text-sm font-semibold text-slate-700 mb-3">
                    <i class="bi bi-image text-purple-500 mr-2"></i>
                    Gambar Portofolio
                    <span class="text-slate-400 text-xs font-normal ml-2">(Opsional)</span>
                </label>

                <!-- File Input -->
                <div class="file-input-wrapper">
                    <input 
                        type="file" 
                        name="gambar" 
                        id="gambar" 
                        accept="image/*"
                        onchange="handleFileSelect(this)">
                    <label for="gambar" class="file-input-label" id="fileLabel">
                        <div class="text-center">
                            <i class="bi bi-cloud-upload text-4xl text-slate-400 mb-2"></i>
                            <p class="text-slate-600 font-medium mb-1">
                                <span id="fileName">Klik untuk upload gambar portofolio</span>
                            </p>
                            <p class="text-xs text-slate-400">PNG, JPG, JPEG (Max. 2MB)</p>
                        </div>
                    </label>
                </div>

                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <p class="text-sm text-slate-500 mb-3 font-medium">Preview Gambar:</p>
                    <div class="image-preview-container">
                        <img 
                            id="preview" 
                            class="max-w-full h-auto max-h-80 rounded-2xl shadow-lg border-4 border-white object-cover">
                        <div class="image-preview-overlay">
                            <button 
                                type="button"
                                onclick="removeImage()"
                                class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-600 transition-colors">
                                <i class="bi bi-trash mr-1"></i> Hapus Gambar
                            </button>
                        </div>
                    </div>
                </div>

                @error('gambar')
                    <p class="text-red-500 text-sm mt-2">
                        <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
                <p class="text-xs text-slate-400 mt-2">
                    <i class="bi bi-info-circle mr-1"></i>
                    Tambahkan screenshot atau mockup untuk membuat portofolio lebih menarik
                </p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-3 mt-8 pt-6 border-t-2 border-gray-100">
            <button 
                type="submit" 
                class="flex-1 bg-gradient-to-r from-amber-500 to-orange-600 text-white rounded-xl px-6 py-3.5 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center text-base">
                <i class="bi bi-check-circle mr-2 text-lg"></i>
                Simpan Portofolio
            </button>
            <a 
                href="{{ route('portofolio.index') }}" 
                class="flex-1 bg-gradient-to-r from-slate-500 to-slate-600 text-white rounded-xl px-6 py-3.5 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center text-base">
                <i class="bi bi-x-circle mr-2 text-lg"></i>
                Batal
            </a>
        </div>
    </form>
</div>

<!-- Tips Section -->
<div class="mt-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-200 animate-slideUp">
    <div class="flex items-start">
        <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
            <i class="bi bi-lightbulb text-lg"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Tips Membuat Portofolio yang Menarik</h3>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-start">
                    <i class="bi bi-check-circle-fill text-purple-500 mr-2 mt-0.5"></i>
                    <span>Gunakan judul yang spesifik dan menggambarkan jenis project yang dikerjakan</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-check-circle-fill text-purple-500 mr-2 mt-0.5"></i>
                    <span>Jelaskan teknologi, tools, dan metodologi yang digunakan dalam project</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-check-circle-fill text-purple-500 mr-2 mt-0.5"></i>
                    <span>Sertakan hasil atau achievement yang dicapai dari project tersebut</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-check-circle-fill text-purple-500 mr-2 mt-0.5"></i>
                    <span>Upload screenshot atau mockup berkualitas tinggi untuk menarik perhatian</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-check-circle-fill text-purple-500 mr-2 mt-0.5"></i>
                    <span>Highlight tantangan yang berhasil diselesaikan untuk menunjukkan expertise</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Example Card -->
<div class="mt-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-2xl p-6 border border-cyan-200 animate-slideUp">
    <div class="flex items-start">
        <div class="w-10 h-10 bg-cyan-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
            <i class="bi bi-journal-code text-lg"></i>
        </div>
        <div class="flex-1">
            <h3 class="text-lg font-bold text-slate-800 mb-3">Contoh Portofolio yang Baik</h3>
            <div class="bg-white rounded-xl p-4 border border-cyan-100">
                <h4 class="font-bold text-slate-700 mb-2">
                    <i class="bi bi-star-fill text-amber-400 mr-1"></i>
                    Website E-Commerce Fashion Store XYZ
                </h4>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Mengembangkan platform e-commerce full-stack menggunakan Laravel 10 dan Vue.js 3. 
                    Fitur yang diimplementasikan meliputi: sistem pembayaran multi-gateway, real-time inventory management, 
                    dan AI-powered product recommendation. Berhasil meningkatkan konversi penjualan sebesar 45% dalam 3 bulan pertama. 
                    Project dikerjakan dalam waktu 2 bulan dengan tim 5 developer.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function handleFileSelect(input) {
        const fileLabel = document.getElementById('fileLabel');
        const fileName = document.getElementById('fileName');
        const imagePreview = document.getElementById('imagePreview');
        const preview = document.getElementById('preview');
        
        if (input.files && input.files[0]) {
            const file = input.files[0];
            
            // Validate file size (2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('⚠️ Ukuran file terlalu besar! Maksimal 2MB.');
                input.value = '';
                return;
            }
            
            // Validate file type
            if (!file.type.startsWith('image/')) {
                alert('⚠️ File harus berupa gambar!');
                input.value = '';
                return;
            }
            
            // Update label
            fileName.textContent = file.name;
            fileLabel.classList.add('has-file');
            
            // Show preview
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                
                // Smooth scroll to preview
                setTimeout(() => {
                    imagePreview.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            };
            reader.readAsDataURL(file);
        }
    }
    
    function removeImage() {
        const input = document.getElementById('gambar');
        const fileLabel = document.getElementById('fileLabel');
        const fileName = document.getElementById('fileName');
        const imagePreview = document.getElementById('imagePreview');
        
        input.value = '';
        fileName.textContent = 'Klik untuk upload gambar portofolio';
        fileLabel.classList.remove('has-file');
        imagePreview.classList.add('hidden');
    }
    
    // Character counter for textarea
    const textarea = document.getElementById('deskripsi');
    textarea.addEventListener('input', function() {
        const length = this.value.length;
        const parent = this.parentElement;
        
        let counter = parent.querySelector('.char-counter');
        if (!counter) {
            counter = document.createElement('p');
            counter.className = 'char-counter text-xs text-slate-400 mt-2';
            parent.appendChild(counter);
        }
        
        counter.innerHTML = `<i class="bi bi-pencil mr-1"></i>${length} karakter`;
        
        if (length < 50) {
            counter.classList.add('text-amber-500');
            counter.classList.remove('text-green-500');
        } else {
            counter.classList.add('text-green-500');
            counter.classList.remove('text-amber-500');
        }
    });
    
    // Add animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const formGroups = document.querySelectorAll('.form-group');
        formGroups.forEach((group, index) => {
            group.style.opacity = '0';
            group.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                group.style.transition = 'all 0.5s ease';
                group.style.opacity = '1';
                group.style.transform = 'translateY(0)';
            }, 100 + (index * 100));
        });
    });
    
    // Form validation before submit
    document.querySelector('form').addEventListener('submit', function(e) {
        const judul = document.getElementById('judul').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        
        if (judul.length < 5) {
            e.preventDefault();
            alert('⚠️ Judul portofolio minimal 5 karakter!');
            document.getElementById('judul').focus();
            return;
        }
        
        if (deskripsi.length < 30) {
            e.preventDefault();
            alert('⚠️ Deskripsi portofolio minimal 30 karakter agar lebih informatif!');
            document.getElementById('deskripsi').focus();
            return;
        }
    });
</script>

@endsection
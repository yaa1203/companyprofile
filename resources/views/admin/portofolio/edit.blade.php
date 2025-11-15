@extends('admin.layouts.app')

@section('title', 'Edit Portofolio')
@section('page-title', 'Edit Portofolio')
@section('page-description', 'Perbarui portofolio dan karya perusahaan Anda')

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
                <i class="bi bi-pencil-square"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-white m-0 mb-1">Edit Portofolio</h2>
                <p class="text-amber-100 text-sm m-0">Perbarui informasi portofolio Anda</p>
            </div>
        </div>
    </div>

    <!-- Form Body -->
    <form action="{{ route('portofolio.update', $portofolio) }}" method="POST" enctype="multipart/form-data" class="p-8 md:p-10">
        @csrf
        @method('PUT')

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
                    value="{{ old('judul', $portofolio->judul) }}" 
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition-all duration-300 outline-none @error('judul') border-red-500 @enderror"
                    placeholder="Masukkan judul portofolio..."
                    required>
                @error('judul')
                    <p class="text-red-500 text-sm mt-2">
                        <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
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
                    placeholder="Jelaskan detail portofolio Anda..."
                    required>{{ old('deskripsi', $portofolio->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">
                        <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Gambar -->
            <div class="form-group">
                <label class="block text-sm font-semibold text-slate-700 mb-3">
                    <i class="bi bi-image text-purple-500 mr-2"></i>
                    Gambar Portofolio
                    <span class="text-slate-400 text-xs font-normal ml-2">(Opsional)</span>
                </label>

                <!-- Current Image Preview -->
                @if($portofolio->gambar)
                    <div class="mb-4">
                        <p class="text-sm text-slate-500 mb-3 font-medium">Gambar Saat Ini:</p>
                        <div class="image-preview-container">
                            <img 
                                src="{{ asset('storage/' . $portofolio->gambar) }}" 
                                alt="{{ $portofolio->judul }}" 
                                class="max-w-full h-auto max-h-80 rounded-2xl shadow-lg border-4 border-white object-cover"
                                id="currentImage">
                            <div class="image-preview-overlay">
                                <span class="text-white text-sm font-medium">
                                    <i class="bi bi-image mr-1"></i> Gambar Saat Ini
                                </span>
                            </div>
                        </div>
                    </div>
                @endif

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
                                <span id="fileName">Klik untuk upload gambar baru</span>
                            </p>
                            <p class="text-xs text-slate-400">PNG, JPG, JPEG (Max. 2MB)</p>
                        </div>
                    </label>
                </div>

                <!-- New Image Preview -->
                <div id="newImagePreview" class="mt-4 hidden">
                    <p class="text-sm text-slate-500 mb-3 font-medium">Preview Gambar Baru:</p>
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
                    Upload gambar baru jika ingin mengganti gambar yang ada
                </p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-3 mt-8 pt-6 border-t-2 border-gray-100">
            <button 
                type="submit" 
                class="flex-1 bg-gradient-to-r from-amber-500 to-orange-600 text-white rounded-xl px-6 py-3.5 font-semibold transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center text-base">
                <i class="bi bi-check-circle mr-2 text-lg"></i>
                Update Portofolio
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

<!-- Info Box -->
<div class="mt-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-200 animate-slideUp">
    <div class="flex items-start">
        <div class="w-10 h-10 bg-amber-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
            <i class="bi bi-info-circle text-lg"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Informasi Penting</h3>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-amber-500 -mt-1 -ml-1"></i>
                    <span>Kosongkan field gambar jika tidak ingin mengubah gambar yang sudah ada</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-amber-500 -mt-1 -ml-1"></i>
                    <span>Gambar baru akan menggantikan gambar lama secara otomatis</span>
                </li>
                <li class="flex items-start">
                    <i class="bi bi-dot text-2xl text-amber-500 -mt-1 -ml-1"></i>
                    <span>Pastikan judul dan deskripsi tetap informatif dan menarik</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    function handleFileSelect(input) {
        const fileLabel = document.getElementById('fileLabel');
        const fileName = document.getElementById('fileName');
        const newImagePreview = document.getElementById('newImagePreview');
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
                newImagePreview.classList.remove('hidden');
                
                // Smooth scroll to preview
                setTimeout(() => {
                    newImagePreview.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            };
            reader.readAsDataURL(file);
        } else {
            // Reset if no file selected
            fileName.textContent = 'Klik untuk upload gambar baru';
            fileLabel.classList.remove('has-file');
            newImagePreview.classList.add('hidden');
        }
    }
    
    function removeImage() {
        const input = document.getElementById('gambar');
        const fileLabel = document.getElementById('fileLabel');
        const fileName = document.getElementById('fileName');
        const newImagePreview = document.getElementById('newImagePreview');
        
        input.value = '';
        fileName.textContent = 'Klik untuk upload gambar baru';
        fileLabel.classList.remove('has-file');
        newImagePreview.classList.add('hidden');
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
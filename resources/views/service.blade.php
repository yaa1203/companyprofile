@extends('user.layouts.app')
@section('title', 'Terms of Service - MyCompany')
@section('content')
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-purple-50 py-12 lg:py-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="terms-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#9333ea"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#terms-pattern)"/>
            </svg>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-10 w-20 h-20 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-20 animate-bounce" style="animation-delay: 0s;"></div>
            <div class="absolute bottom-32 left-20 w-16 h-16 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full opacity-15 animate-bounce" style="animation-delay: 1.5s;"></div>
        </div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm font-medium bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 border border-purple-200 backdrop-blur-sm mb-6">
                <span class="w-2 h-2 bg-purple-500 rounded-full mr-2 animate-pulse"></span>
                Ketentuan Layanan
            </div>
            
            <div class="flex items-center justify-center mb-6 lg:mb-8">
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mr-4 lg:mr-6">
                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-slate-900">
                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                        Terms of Service
                    </span>
                </h1>
            </div>
            
            <p class="text-base sm:text-lg lg:text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
                Syarat dan ketentuan penggunaan layanan MyCompany yang harus Anda pahami
            </p>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="py-12 lg:py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl border border-gray-100 p-6 sm:p-8 lg:p-12 shadow-lg">
                
                <div class="prose prose-slate max-w-none">
                    <p class="text-slate-700 leading-relaxed mb-8 text-sm sm:text-base">
                        <strong>Terakhir diperbarui:</strong> {{ date('d F Y') }}
                    </p>
                    
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-100 rounded-xl p-4 sm:p-6 mb-8">
                        <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
                            Dengan mengakses dan menggunakan layanan MyCompany, Anda setuju untuk terikat dengan ketentuan layanan ini. Mohon baca dengan seksama sebelum menggunakan layanan kami.
                        </p>
                    </div>
                    
                    <!-- Penerimaan Ketentuan -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">1. Penerimaan Ketentuan</h2>
                        
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Perhatian Penting</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Dengan menggunakan layanan kami, Anda dianggap telah membaca, memahami, dan menyetujui semua ketentuan yang tercantum dalam dokumen ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <ul class="list-disc pl-6 text-slate-700 leading-relaxed space-y-2 text-sm sm:text-base">
                            <li>Anda harus berusia minimal 18 tahun atau memiliki izin dari wali yang sah</li>
                            <li>Anda memiliki kewenangan hukum untuk mengikat diri dalam perjanjian ini</li>
                            <li>Penggunaan layanan yang berkelanjutan menunjukkan persetujuan terhadap ketentuan terbaru</li>
                            <li>Jika tidak setuju dengan ketentuan ini, harap hentikan penggunaan layanan kami</li>
                        </ul>
                    </div>
                    
                    <!-- Penggunaan Layanan -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">2. Penggunaan Layanan</h2>
                        
                        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-4">Penggunaan yang Diizinkan</h3>
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                            <div class="bg-green-50 rounded-xl p-4 sm:p-6 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4 class="text-base sm:text-lg font-semibold text-green-800">Diperbolehkan</h4>
                                </div>
                                <ul class="list-disc pl-4 text-green-700 text-sm space-y-1">
                                    <li>Menggunakan layanan sesuai tujuan bisnis</li>
                                    <li>Berbagi konten dengan izin</li>
                                    <li>Memberikan feedback konstruktif</li>
                                    <li>Mengundang tim dan kolaborator</li>
                                </ul>
                            </div>
                            <div class="bg-red-50 rounded-xl p-4 sm:p-6 border border-red-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4 class="text-base sm:text-lg font-semibold text-red-800">Dilarang</h4>
                                </div>
                                <ul class="list-disc pl-4 text-red-700 text-sm space-y-1">
                                    <li>Aktivitas ilegal atau merugikan</li>
                                    <li>Spam atau penyalahgunaan sistem</li>
                                    <li>Reverse engineering atau hacking</li>
                                    <li>Melanggar hak kekayaan intelektual</li>
                                </ul>
                            </div>
                        </div>
                        
                        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-4">Kewajiban Pengguna</h3>
                        <ol class="list-decimal pl-6 text-slate-700 leading-relaxed space-y-2 text-sm sm:text-base">
                            <li><strong>Akurasi Informasi:</strong> Memberikan data yang benar dan terkini saat pendaftaran</li>
                            <li><strong>Keamanan Akun:</strong> Menjaga kerahasiaan password dan kredensial login</li>
                            <li><strong>Penggunaan Wajar:</strong> Tidak menyalahgunakan atau membebani sistem secara berlebihan</li>
                            <li><strong>Kepatuhan Hukum:</strong> Menggunakan layanan sesuai dengan hukum yang berlaku</li>
                            <li><strong>Pelaporan:</strong> Melaporkan aktivitas mencurigakan atau pelanggaran keamanan</li>
                        </ol>
                    </div>
                    
                    <!-- Hak Kekayaan Intelektual -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">3. Hak Kekayaan Intelektual</h2>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13H14a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Hak Milik MyCompany</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Semua konten, desain, logo, teknologi, dan materi dalam layanan kami adalah hak milik eksklusif MyCompany dan dilindungi hukum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2L3 7v11h4v-6h6v6h4V7l-7-5z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Trademark & Logo</h4>
                                    <p class="text-slate-700 text-sm">Nama "MyCompany", logo, dan semua trademark terkait tidak boleh digunakan tanpa izin tertulis</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Source Code & Teknologi</h4>
                                    <p class="text-slate-700 text-sm">Dilarang melakukan reverse engineering, decompiling, atau mencoba mengakses source code</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Konten & Media</h4>
                                    <p class="text-slate-700 text-sm">Gambar, video, dan media lainnya tidak boleh diunduh atau digunakan untuk keperluan komersial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pembatasan Tanggung Jawab -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">4. Pembatasan Tanggung Jawab</h2>
                        
                        <div class="bg-gradient-to-r from-red-50 to-orange-50 border border-red-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Disclaimer Penting</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Layanan disediakan "sebagaimana adanya" tanpa jaminan apapun. MyCompany tidak bertanggung jawab atas kerugian yang mungkin timbul.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-4">Batasan Tanggung Jawab</h3>
                        <ul class="list-disc pl-6 text-slate-700 leading-relaxed space-y-2 text-sm sm:text-base mb-6">
                            <li>MyCompany tidak bertanggung jawab atas kerugian tidak langsung, insidental, atau konsekuensial</li>
                            <li>Tanggung jawab maksimal terbatas pada jumlah yang telah Anda bayarkan dalam 12 bulan terakhir</li>
                            <li>Tidak ada jaminan untuk ketersediaan layanan 100% tanpa gangguan</li>
                            <li>Pengguna bertanggung jawab penuh atas penggunaan layanan dan konsekuensinya</li>
                        </ul>
                        
                        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-4">Force Majeure</h3>
                        <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
                            MyCompany tidak bertanggung jawab atas kegagalan memenuhi kewajiban akibat keadaan kahar seperti bencana alam, 
                            perang, terorisme, perubahan regulasi pemerintah, atau kejadian di luar kendali wajar.
                        </p>
                    </div>
                    
                    <!-- Terminasi -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">5. Terminasi Layanan</h2>
                        
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div class="bg-blue-50 rounded-xl p-4 sm:p-6 border border-blue-200">
                                <h4 class="text-base sm:text-lg font-semibold text-blue-800 mb-3">Terminasi oleh Pengguna</h4>
                                <ul class="list-disc pl-4 text-blue-700 text-sm space-y-1">
                                    <li>Dapat menghentikan layanan kapan saja</li>
                                    <li>Hubungi support untuk proses terminasi</li>
                                    <li>Data akan dihapus sesuai kebijakan</li>
                                    <li>Refund sesuai ketentuan yang berlaku</li>
                                </ul>
                            </div>
                            <div class="bg-orange-50 rounded-xl p-4 sm:p-6 border border-orange-200">
                                <h4 class="text-base sm:text-lg font-semibold text-orange-800 mb-3">Terminasi oleh MyCompany</h4>
                                <ul class="list-disc pl-4 text-orange-700 text-sm space-y-1">
                                    <li>Pelanggaran ketentuan layanan</li>
                                    <li>Aktivitas ilegal atau merugikan</li>
                                    <li>Tunggakan pembayaran yang berlarut</li>
                                    <li>Penyalahgunaan sistem atau resources</li>
                                </ul>
                            </div>
                        </div>
                        
                        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-4">Konsekuensi Terminasi</h3>
                        <ol class="list-decimal pl-6 text-slate-700 leading-relaxed space-y-2 text-sm sm:text-base">
                            <li>Akses ke layanan akan dihentikan segera</li>
                            <li>Data dan konten pengguna akan dihapus dalam 30 hari</li>
                            <li>Kewajiban pembayaran yang outstanding tetap berlaku</li>
                            <li>Ketentuan tentang kerahasiaan dan IP tetap mengikat</li>
                        </ol>
                    </div>
                    
                    <!-- Perubahan Ketentuan -->
                    <div class="mb-12">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">6. Perubahan Ketentuan</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            MyCompany berhak mengubah ketentuan ini sewaktu-waktu untuk menyesuaikan dengan perkembangan bisnis, 
                            teknologi, atau regulasi yang berlaku.
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-indigo-600 font-bold text-sm">1</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Pemberitahuan</h4>
                                    <p class="text-slate-700 text-sm">Perubahan akan diberitahukan melalui email atau notifikasi di platform minimal 30 hari sebelumnya</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-purple-600 font-bold text-sm">2</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Persetujuan</h4>
                                    <p class="text-slate-700 text-sm">Penggunaan layanan yang berkelanjutan setelah perubahan dianggap sebagai persetujuan</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-emerald-600 font-bold text-sm">3</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Penolakan</h4>
                                    <p class="text-slate-700 text-sm">Jika tidak setuju dengan perubahan, Anda dapat menghentikan penggunaan layanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kontak -->
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-100 rounded-xl p-6 sm:p-8">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-slate-900 mb-6">7. Hubungi Kami</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            Untuk pertanyaan mengenai ketentuan layanan ini atau bantuan lainnya, silakan hubungi tim support kami:
                        </p>
                        
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:legal@mycompany.com" class="text-purple-600 hover:text-purple-700 font-medium text-sm sm:text-base">legal@mycompany.com</a>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                <a href="{{ url('contact') }}" class="text-purple-600 hover:text-purple-700 font-medium text-sm sm:text-base">Live Chat Support</a>
                            </div>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-purple-200">
                            <p class="text-slate-600 text-xs sm:text-sm">
                                Dokumen ini terakhir diperbarui pada {{ date('d F Y') }}. 
                                Untuk riwayat perubahan lengkap, silakan hubungi tim legal kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Back to Top Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
                class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </div>
    
    <style>
        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0, 0, 0);
            }
            40%, 43% {
                transform: translate3d(0, -10px, 0);
            }
            70% {
                transform: translate3d(0, -5px, 0);
            }
            90% {
                transform: translate3d(0, -2px, 0);
            }
        }
        
        .animate-bounce {
            animation: bounce 3s infinite;
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
@endsection
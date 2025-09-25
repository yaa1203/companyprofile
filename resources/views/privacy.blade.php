@extends('user.layouts.app')
@section('title', 'Privacy Policy - MyCompany')
@section('content')
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-indigo-50 py-12 lg:py-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="privacy-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#6366f1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#privacy-pattern)"/>
            </svg>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full opacity-20 animate-bounce" style="animation-delay: 0s;"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-15 animate-bounce" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm font-medium bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 border border-indigo-200 backdrop-blur-sm mb-6">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2 animate-pulse"></span>
                Kebijakan Privasi
            </div>
            
            <div class="flex items-center justify-center mb-6 lg:mb-8">
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl flex items-center justify-center mr-4 lg:mr-6">
                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-slate-900">
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Privacy Policy
                    </span>
                </h1>
            </div>
            
            <p class="text-base sm:text-lg lg:text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
                Komitmen kami untuk melindungi privasi dan keamanan data pribadi Anda
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
                    
                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border border-indigo-100 rounded-xl p-4 sm:p-6 mb-8">
                        <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
                            MyCompany berkomitmen untuk melindungi privasi dan data pribadi Anda. Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi Anda saat menggunakan layanan kami.
                        </p>
                    </div>
                    
                    <!-- Informasi yang Kami Kumpulkan -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">1. Informasi yang Kami Kumpulkan</h2>
                        
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">Informasi Pribadi</h3>
                        <ul class="list-disc pl-6 text-slate-700 leading-relaxed mb-6 space-y-2 text-sm sm:text-base">
                            <li>Nama lengkap dan informasi kontak (email, nomor telepon)</li>
                            <li>Alamat fisik dan alamat penagihan</li>
                            <li>Informasi perusahaan dan jabatan</li>
                            <li>Data pembayaran dan informasi finansial</li>
                        </ul>
                        
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">Informasi Teknis</h3>
                        <ul class="list-disc pl-6 text-slate-700 leading-relaxed mb-6 space-y-2 text-sm sm:text-base">
                            <li>Alamat IP dan lokasi geografis</li>
                            <li>Jenis browser dan sistem operasi</li>
                            <li>Data perangkat dan identifier unik</li>
                            <li>Cookie dan teknologi pelacakan serupa</li>
                        </ul>
                        
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">Informasi Penggunaan</h3>
                        <ul class="list-disc pl-6 text-slate-700 leading-relaxed mb-6 space-y-2 text-sm sm:text-base">
                            <li>Riwayat penggunaan layanan dan fitur</li>
                            <li>Preferensi dan pengaturan akun</li>
                            <li>Komunikasi dan feedback yang Anda berikan</li>
                            <li>Data interaksi dengan customer service</li>
                        </ul>
                    </div>
                    
                    <!-- Cara Kami Menggunakan Informasi -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">2. Cara Kami Menggunakan Informasi</h2>
                        
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                            <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                                <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-3">Layanan Utama</h4>
                                <ul class="list-disc pl-4 text-slate-700 text-sm space-y-1">
                                    <li>Menyediakan layanan yang diminta</li>
                                    <li>Memproses transaksi dan pembayaran</li>
                                    <li>Memberikan dukungan pelanggan</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                                <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-3">Komunikasi</h4>
                                <ul class="list-disc pl-4 text-slate-700 text-sm space-y-1">
                                    <li>Mengirim notifikasi layanan</li>
                                    <li>Newsletter dan update produk</li>
                                    <li>Survei kepuasan pelanggan</li>
                                </ul>
                            </div>
                        </div>
                        
                        <ol class="list-decimal pl-6 text-slate-700 leading-relaxed space-y-2 text-sm sm:text-base">
                            <li><strong>Peningkatan Layanan:</strong> Menganalisis penggunaan untuk meningkatkan produk dan layanan</li>
                            <li><strong>Keamanan:</strong> Mencegah penipuan, spam, dan aktivitas berbahaya lainnya</li>
                            <li><strong>Personalisasi:</strong> Menyesuaikan pengalaman berdasarkan preferensi Anda</li>
                            <li><strong>Kepatuhan Hukum:</strong> Memenuhi kewajiban legal dan regulatori</li>
                        </ol>
                    </div>
                    
                    <!-- Perlindungan Data -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">3. Perlindungan Data</h2>
                        
                        <div class="bg-gradient-to-r from-emerald-50 to-blue-50 border border-emerald-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Enkripsi & Keamanan</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Semua data sensitif dienkripsi menggunakan standar industri SSL/TLS dan disimpan dalam server yang aman dengan akses terbatas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">Langkah-langkah Keamanan</h3>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                            <div class="text-center p-4 border border-gray-200 rounded-xl">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 text-sm">Enkripsi End-to-End</h4>
                            </div>
                            <div class="text-center p-4 border border-gray-200 rounded-xl">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 text-sm">Monitoring 24/7</h4>
                            </div>
                            <div class="text-center p-4 border border-gray-200 rounded-xl sm:col-span-2 lg:col-span-1">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 text-sm">Audit Berkala</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hak Anda -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">4. Hak-Hak Anda</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            Sesuai dengan peraturan perlindungan data yang berlaku, Anda memiliki hak-hak berikut:
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-indigo-600 font-bold text-sm">1</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Hak Akses</h4>
                                    <p class="text-slate-700 text-sm">Meminta salinan data pribadi yang kami miliki tentang Anda</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-purple-600 font-bold text-sm">2</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Hak Pembetulan</h4>
                                    <p class="text-slate-700 text-sm">Meminta pembetulan data yang tidak akurat atau tidak lengkap</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-emerald-600 font-bold text-sm">3</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Hak Penghapusan</h4>
                                    <p class="text-slate-700 text-sm">Meminta penghapusan data pribadi dalam kondisi tertentu</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <span class="text-orange-600 font-bold text-sm">4</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Hak Portabilitas</h4>
                                    <p class="text-slate-700 text-sm">Meminta transfer data Anda ke penyedia layanan lain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kontak -->
                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border border-indigo-100 rounded-xl p-6 sm:p-8">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">5. Hubungi Kami</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            Jika Anda memiliki pertanyaan tentang kebijakan privasi ini atau ingin menggunakan hak-hak Anda, silakan hubungi kami:
                        </p>
                        
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-indigo-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:privacy@mycompany.com" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm sm:text-base">privacy@mycompany.com</a>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-indigo-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="text-slate-700 text-sm sm:text-base">+62 21 1234 5678</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Back to Top Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
                class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300">
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
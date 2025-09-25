@extends('user.layouts.app')
@section('title', 'Cookie Policy - MyCompany')
@section('content')
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-purple-50 py-12 lg:py-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="cookie-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#9333ea"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#cookie-pattern)"/>
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
                Kebijakan Cookie
            </div>
            
            <div class="flex items-center justify-center mb-6 lg:mb-8">
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl flex items-center justify-center mr-4 lg:mr-6">
                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-slate-900">
                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                        Cookie Policy
                    </span>
                </h1>
            </div>
            
            <p class="text-base sm:text-lg lg:text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
                Kebijakan cookie MyCompany yang menjelaskan cara kami menggunakan cookie dan teknologi pelacakan
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
                            MyCompany menggunakan cookie dan teknologi pelacakan serupa untuk meningkatkan pengalaman pengguna, 
                            menganalisis cara situs digunakan, dan membantu dalam upaya pemasaran.
                        </p>
                    </div>
                    
                    <!-- Apa itu Cookie -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">1. Apa itu Cookie?</h2>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Pengertian Cookie</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Cookie adalah file teks kecil yang disimpan di browser Anda saat mengunjungi situs web. 
                                        Cookie membantu situs mengingat preferensi dan aktivitas Anda untuk pengalaman yang lebih baik.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                            <div class="bg-green-50 rounded-xl p-4 sm:p-6 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4 class="text-base sm:text-lg font-semibold text-green-800">Cookie yang Diperlukan</h4>
                                </div>
                                <p class="text-green-700 text-sm">Mengaktifkan fungsi dasar situs web dan navigasi yang mulus</p>
                            </div>
                            <div class="bg-blue-50 rounded-xl p-4 sm:p-6 border border-blue-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4 class="text-base sm:text-lg font-semibold text-blue-800">Cookie Fungsional</h4>
                                </div>
                                <p class="text-blue-700 text-sm">Mengingat preferensi dan pengaturan pengguna</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Jenis Cookie yang Digunakan -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">2. Jenis Cookie yang Digunakan</h2>
                        
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6">
                                <div class="flex items-start mb-4">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-800 mb-2">Cookie Essensial</h3>
                                        <p class="text-slate-700 text-sm mb-3">Cookie yang diperlukan untuk fungsi dasar situs web.</p>
                                        <div class="bg-gray-50 rounded-lg p-3">
                                            <ul class="text-slate-700 text-sm space-y-1">
                                                <li>• Session cookie - Menjaga login Anda aktif</li>
                                                <li>• CSRF token - Melindungi dari serangan CSRF</li>
                                                <li>• Cookie preferensi - Menyimpan pengaturan bahasa</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6">
                                <div class="flex items-start mb-4">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm11 1H6v8l4-2 4 2V6z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-800 mb-2">Cookie Analitik</h3>
                                        <p class="text-slate-700 text-sm mb-3">Mengumpulkan informasi tentang cara pengguna menggunakan situs web.</p>
                                        <div class="bg-gray-50 rounded-lg p-3">
                                            <ul class="text-slate-700 text-sm space-y-1">
                                                <li>• Google Analytics - Menganalisis perilaku pengguna</li>
                                                <li>• Hotjar - Membuat heatmaps dan session recording</li>
                                                <li>• Custom tracking - Mengumpulkan data penggunaan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6">
                                <div class="flex items-start mb-4">
                                    <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center mr-4">
                                        <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-800 mb-2">Cookie Pemasaran</h3>
                                        <p class="text-slate-700 text-sm mb-3">Digunakan untuk menyesuaikan iklan berdasarkan minat Anda.</p>
                                        <div class="bg-gray-50 rounded-lg p-3">
                                            <ul class="text-slate-700 text-sm space-y-1">
                                                <li>• Facebook Pixel - Pelacakan konversi</li>
                                                <li>• Google Ads - Remarketing dan pelacakan konversi</li>
                                                <li>• Custom ads - Menyesuaikan iklan ber perilaku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cara Cookie Digunakan -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">3. Cara Cookie Digunakan</h2>
                        
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-4 sm:p-6 border border-purple-100">
                                <h4 class="text-base sm:text-lg font-semibold text-purple-800 mb-3">Peningkatan Pengalaman</h4>
                                <p class="text-purple-700 text-sm">Menyimpan preferensi Anda seperti bahasa, tema, dan lokasi untuk pengalaman yang personal</p>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-4 sm:p-6 border border-blue-100">
                                <h4 class="text-base sm:text-lg font-semibold text-blue-800 mb-3">Keamanan</h4>
                                <p class="text-blue-700 text-sm">Melindungi akun Anda dari akses tidak sah dan mencegah kejahatan siber</p>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                            <h4 class="text-lg font-semibold text-slate-800 mb-3">Contoh Penggunaan Cookie</h4>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                        <span class="text-purple-600 font-bold text-xs">1</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Menyimpan item di keranjang belanja Anda saat browsing</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                        <span class="text-purple-600 font-bold text-xs">2</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Mengingat login Anda agar tidak perlu masuk kembali</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                        <span class="text-purple-600 font-bold text-xs">3</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Menganalisis pola penggunaan untuk meningkatkan layanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pilihan Pengguna -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">4. Pilihan Pengguna</h2>
                        
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Kontrol Cookie</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Anda memiliki kontrol penuh atas cookie yang digunakan di situs kami. 
                                        Anda dapat mengatur browser Anda untuk menolak semua cookie atau menerima cookie tertentu.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid sm:grid-cols-3 gap-4 sm:gap-6">
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6 text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Izinkan Semua Cookie</h4>
                                <p class="text-slate-600 text-xs">Mengizinkan semua cookie untuk pengalaman optimal</p>
                            </div>
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6 text-center">
                                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Pilih Cookie</h4>
                                <p class="text-slate-600 text-xs">Memilih jenis cookie yang diizinkan</p>
                            </div>
                            <div class="border border-gray-200 rounded-xl p-4 sm:p-6 text-center">
                                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Tolak Semua Cookie</h4>
                                <p class="text-slate-600 text-xs">Menolak semua cookie non-essensial</p>
                            </div>
                        </div>
                        
                        <div class="mt-6 p-4 sm:p-6 bg-blue-50 rounded-xl border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-2 text-sm sm:text-base">Cara Mengelola Cookie</h4>
                            <p class="text-blue-700 text-sm">Anda dapat mengelola pengaturan cookie melalui:</p>
                            <ul class="list-disc pl-5 text-blue-700 text-sm mt-2 space-y-1">
                                <li>Pengaturan browser Anda (Chrome, Firefox, Safari, dll.)</li>
                                <li>Panel kontrol cookie yang tersedia di situs kami</li>
                                <li>Fitur "Do Not Track" di browser Anda</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Cookie Pihak Ketiga -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">5. Cookie Pihak Ketiga</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            Selain cookie yang kami setel, kami menggunakan layanan pihak ketiga yang menetapkan cookie mereka sendiri. 
                            Cookie pihak ketiga ini digunakan untuk tujuan analitik, pemasaran, dan fungsi sosial media.
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Google Analytics</h4>
                                    <p class="text-slate-700 text-sm">Mengumpulkan data tentang kunjungan Anda ke situs web, termasuk halaman yang dikunjungi dan waktu yang dihabiskan</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Facebook & Instagram</h4>
                                    <p class="text-slate-700 text-sm">Mengumpulkan data untuk iklan yang ditargetkan dan berbagi informasi dengan jejaring sosial</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Hotjar</h4>
                                    <p class="text-slate-700 text-sm">Membuat heatmaps dan session recording untuk memahami interaksi pengguna dengan situs web</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cookie di Situs Web Pihak Ketiga -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">6. Cookie di Situs Web Pihak Ketiga</h2>
                        
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border border-indigo-100 rounded-xl p-4 sm:p-6 mb-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Situs Web Eksternal</h4>
                                    <p class="text-slate-700 text-sm sm:text-base">
                                        Situs web kami berisi tautan ke situs web pihak ketiga. Cookie dari situs web pihak ketiga ini 
                                        diatur oleh pihak ketiga tersebut, bukan oleh MyCompany. Kami tidak memiliki akses atau kontrol atas cookie ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6">
                            <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                                <h4 class="font-semibold text-slate-800 mb-3 text-sm sm:text-base">Sosial Media</h4>
                                <p class="text-slate-700 text-sm">Tautan ke Facebook, Twitter, Instagram, dan platform sosial lainnya</p>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                                <h4 class="font-semibold text-slate-800 mb-3 text-sm sm:text-base">Pembayaran</h4>
                                <p class="text-slate-700 text-sm">Integrasi dengan gateway pembayaran seperti Stripe dan PayPal</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informasi Lebih Lanjut -->
                    <div class="mb-12">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">7. Informasi Lebih Lanjut</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Perubahan Kebijakan</h4>
                                    <p class="text-slate-700 text-sm">Kebijakan cookie ini dapat diperbarui dari waktu ke waktu. Perubahan akan diberitahukan melalui notifikasi di situs web atau email.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Pembaruan Browser</h4>
                                    <p class="text-slate-700 text-sm">Pembaruan browser mungkin mengubah cara cookie dikelola. Periksa pengaturan cookie browser Anda secara berkala.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start p-4 border border-gray-200 rounded-xl">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-2 text-sm sm:text-base">Pertanyaan Anda</h4>
                                    <p class="text-slate-700 text-sm">Jika Anda memiliki pertanyaan tentang kebijakan cookie kami, silakan hubungi tim privasi kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kontak -->
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-100 rounded-xl p-6 sm:p-8">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 mb-6">8. Hubungi Kami</h2>
                        
                        <p class="text-slate-700 leading-relaxed mb-6 text-sm sm:text-base">
                            Untuk pertanyaan mengenai kebijakan cookie ini atau bantuan lainnya, silakan hubungi tim privasi kami:
                        </p>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:privacy@mycompany.com" class="text-purple-600 hover:text-purple-700 font-medium text-sm sm:text-base">privacy@mycompany.com</a>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <a href="tel:+622112345678" class="text-purple-600 hover:text-purple-700 font-medium text-sm sm:text-base">+62 21 1234 5678</a>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-purple-200">
                            <p class="text-slate-600 text-xs sm:text-sm">
                                Dokumen ini terakhir diperbarui pada {{ date('d F Y') }}. 
                                Untuk informasi lebih lanjut tentang privasi data, silakan kunjungi halaman Privacy Policy kami.
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
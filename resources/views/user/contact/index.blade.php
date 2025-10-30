@extends('user.layouts.app')
@section('title', 'Contact - Digital Solutions')
@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 flex items-center">
        <!-- Background decoration -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute -bottom-8 left-20 w-80 h-80 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-20 right-20 w-80 h-80 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="relative container mx-auto px-4 sm:px-6 pb-32">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white/80 text-indigo-700 backdrop-blur-sm border border-indigo-100">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>
                        Konsultasi & Support
                    </span>
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
                    <span class="text-gray-900">Hubungi</span>
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Kami
                    </span>
                </h1>
                
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto mb-12 leading-relaxed">
                    Siap membantu mewujudkan visi digital Anda. Mari diskusikan kebutuhan proyek dan temukan solusi terbaik bersama tim ahli kami
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-form" class="group bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <span class="flex items-center justify-center space-x-2">
                            <span>Kirim Pesan</span>
                            <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </span>
                    </a>
                    <a href="https://wa.me/6281211391835?text=Halo,%20saya%20ingin%20konsultasi%20tentang%20proyek%20digital" 
                       target="_blank"
                       class="group bg-white hover:bg-gray-50 text-gray-900 px-8 py-4 rounded-xl font-semibold border-2 border-gray-200 hover:border-indigo-300 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488z"/>
                            </svg>
                            <span>Chat WhatsApp</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form & Info -->
    <section id="contact-form" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Mari <span class="text-indigo-600">Berkolaborasi</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                    Hubungi tim kami untuk konsultasi gratis dan diskusi mendalam tentang kebutuhan digital bisnis Anda
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 transition-all duration-300 hover:shadow-2xl p-6 md:p-8">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Kirim Pesan</h3>
                        <p class="text-gray-600">Isi formulir di bawah ini dan kami akan merespons dalam 24 jam</p>
                    </div>
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 
                                         16zm3.707-9.293a1 1 0 
                                         00-1.414-1.414L9 
                                         10.586 7.707 9.293a1 1 0 
                                         00-1.414 1.414l2 2a1 1 0 
                                         001.414 0l4-4z"
                                      clip-rule="evenodd">
                                </path>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    <!-- Error Message -->
                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl flex items-center space-x-3">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                      clip-rule="evenodd">
                                </path>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif
                    <!-- Contact Form -->
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Input Nama & Email -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Nama Lengkap -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M10 9a3 3 0 100-6 3 3 0 
                                                     000 6zm-7 9a7 7 0 1114 0H3z"
                                                  clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl shadow-sm
                                                  focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Masukkan nama Anda" required>
                                </div>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M18 10a8 8 0 11-16 0 8 8 0 
                                                     0116 0zm-7 4a1 1 0 
                                                     11-2 0 1 1 0 
                                                     012 0zm-1-9a1 1 0 
                                                     00-1 1v4a1 1 0 
                                                     102 0V6a1 1 0 
                                                     00-1-1z"
                                                  clip-rule="evenodd">
                                            </path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 
                                                     2 0 0016 4H4a2 2 0 
                                                     00-1.997 1.884z"></path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 
                                                     2 0 002 2h12a2 2 0 
                                                     002-2V8.118z"></path>
                                        </svg>
                                    </div>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl shadow-sm
                                                  focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                           placeholder="nama@email.com" required>
                                </div>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M18 10a8 8 0 11-16 0 8 8 0 
                                                     0116 0zm-7 4a1 1 0 
                                                     11-2 0 1 1 0 
                                                     012 0zm-1-9a1 1 0 
                                                     00-1 1v4a1 1 0 
                                                     102 0V6a1 1 0 
                                                     00-1-1z"
                                                  clip-rule="evenodd">
                                            </path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <!-- Pesan -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                            <textarea name="message" rows="6"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm
                                             focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 resize-none"
                                      placeholder="Ceritakan detail kebutuhan proyek Anda..." required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M18 10a8 8 0 11-16 0 8 8 0 
                                                 0116 0zm-7 4a1 1 0 
                                                 11-2 0 1 1 0 
                                                 012 0zm-1-9a1 1 0 
                                                 00-1 1v4a1 1 0 
                                                 102 0V6a1 1 0 
                                                 00-1-1z"
                                              clip-rule="evenodd">
                                        </path>
                                    </svg>
                                        {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Tombol Submit -->
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4
                                       rounded-xl font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all
                                       duration-300 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 
                                         0l-7 14a1 1 0 001.169 
                                         1.409l5-1.429A1 1 0 
                                         009 15.571V11a1 1 0 
                                         112 0v4.571a1 1 0 
                                         00.725.962l5 
                                         1.428a1 1 0 
                                         001.17-1.408l-7-14z">
                                </path>
                            </svg>
                            <span>Kirim Pesan</span>
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="lg:pl-6 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>
                    
                    <!-- Contact Info Cards -->
                    <div class="space-y-4">
                        <!-- WhatsApp Info -->
                        <div class="group bg-white rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 p-5">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-50 to-green-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-gray-900 mb-1">WhatsApp</h4>
                                    <p class="text-gray-600 text-sm">
                                        <a href="https://wa.me/6281211391835?text=Halo,%20saya%20ingin%20konsultasi%20tentang%20proyek%20digital" 
                                           target="_blank"
                                           class="hover:text-green-600 transition-colors">+62 812 1139 1835</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email Info -->
                        <div class="group bg-white rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 p-5">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600 text-sm">
                                        <a href="mailto:info@digitalsolutions.com" class="hover:text-indigo-600 transition-colors">info@digitalsolutions.com</a>
                                    </p>
                                    <p class="text-gray-600 text-sm">
                                        <a href="mailto:support@digitalsolutions.com" class="hover:text-indigo-600 transition-colors">support@digitalsolutions.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone Info -->
                        <div class="group bg-white rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 p-5">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 005.236 5.236l.773-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-gray-900 mb-1">Telepon</h4>
                                    <p class="text-gray-600 text-sm">
                                        <a href="tel:+62211234567" class="hover:text-purple-600 transition-colors">+62 21 1234 567</a>
                                    </p>
                                    <p class="text-gray-600 text-sm">
                                        <a href="tel:+62212345678" class="hover:text-purple-600 transition-colors">+62 21 2345 678</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Address Info -->
                        <div class="group bg-white rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 p-5">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-gray-900 mb-1">Alamat</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        {{ $contactInfo['address']['street'] }}<br>
                                        {{ $contactInfo['address']['city'] }}, {{ $contactInfo['address']['postal_code'] }} <br>
                                        {{ $contactInfo['address']['country'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Maps Section - Diperkecil sedikit -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Lokasi <span class="text-indigo-600">Kantor</span>
                </h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kunjungi kantor kami di {{ $contactInfo['address']['city'] }}. Kami siap menyambut Anda untuk konsultasi langsung mengenai kebutuhan digital bisnis Anda
                </p>
            </div>
            <!-- Google Maps Container -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="p-4 bg-gradient-to-r from-indigo-50 to-purple-50 border-b border-gray-100">
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">{{ $contactInfo['company_name'] }} Office</h4>
                                <p class="text-gray-600 text-sm flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $contactInfo['address']['full_address'] }}
                                </p>
                            </div>
                            <a href="{{ $contactInfo['maps_direct_url'] }}" 
                               target="_blank"
                               class="inline-flex items-center bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors duration-300 font-medium text-sm">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                Buka di Google Maps
                            </a>
                        </div>
                    </div>
                    
                    <!-- Google Maps Embed - Diperkecil -->
                    <div class="relative">
                        <iframe 
                            src="{{ $contactInfo['maps_embed_url'] }}"
                            width="100%" 
                            height="350" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="w-full">
                        </iframe>
                        
                        <!-- Overlay untuk loading -->
                        <div id="map-loading" class="absolute inset-0 bg-gray-100 flex items-center justify-center">
                            <div class="flex items-center space-x-3 text-gray-600">
                                <svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                                <span>Memuat peta...</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards di bawah peta - Diperkecil -->
                <div class="grid md:grid-cols-3 gap-6 mt-6">
                    <div class="group bg-white p-6 rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Jam Operasional</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Senin-Jumat: {{ $contactInfo['office_hours']['weekdays'] }}<br>
                            Sabtu: {{ $contactInfo['office_hours']['saturday'] }}
                        </p>
                    </div>
                    
                    <div class="group bg-white p-6 rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Tim Profesional</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Konsultasi langsung dengan tim developer berpengalaman</p>
                    </div>
                    
                    <div class="group bg-white p-6 rounded-xl border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Konsultasi Gratis</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Evaluasi kebutuhan dan solusi terbaik untuk bisnis Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pertanyaan <span class="text-indigo-600">Umum</span>
                </h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan jawaban atas pertanyaan yang sering diajukan mengenai layanan kami</p>
            </div>
            <div class="space-y-6">
                <!-- FAQ 1 -->
                <details class="group bg-white rounded-xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h4 class="text-lg font-semibold text-gray-900">Berapa lama waktu pengerjaan proyek?</h4>
                        <span class="transition-transform group-open:rotate-180">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed">Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Website sederhana biasanya memakan waktu 2-4 minggu, sedangkan aplikasi web kompleks bisa memerlukan 6-12 minggu. Kami akan memberikan timeline yang jelas setelah evaluasi kebutuhan proyek Anda.</p>
                </details>
                
                <!-- FAQ 2 -->
                <details class="group bg-white rounded-xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h4 class="text-lg font-semibold text-gray-900">Apakah bisa request fitur khusus sesuai kebutuhan bisnis?</h4>
                        <span class="transition-transform group-open:rotate-180">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed">Tentu saja! Kami mengkhususkan diri dalam pengembangan solusi kustom sesuai kebutuhan unik bisnis Anda. Tim kami akan bekerja sama dengan Anda untuk memahami requirement dan mengembangkan fitur yang tepat untuk mencapai tujuan bisnis Anda.</p>
                </details>
                
                <!-- FAQ 3 -->
                <details class="group bg-white rounded-xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h4 class="text-lg font-semibold text-gray-900">Apakah ada layanan maintenance setelah proyek selesai?</h4>
                        <span class="transition-transform group-open:rotate-180">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed">Ya, kami menyediakan berbagai paket maintenance bulanan dan tahunan yang mencakup update security, backup data, monitoring performa, dan dukungan teknis. Paket maintenance dapat disesuaikan dengan kebutuhan dan budget Anda.</p>
                </details>
                
                <!-- FAQ 4 -->
                <details class="group bg-white rounded-xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h4 class="text-lg font-semibold text-gray-900">Bagaimana sistem pembayaran untuk proyek?</h4>
                        <span class="transition-transform group-open:rotate-180">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed">Kami menerapkan sistem pembayaran bertahap: 50% di awal proyek sebagai down payment, 30% saat milestone tertentu tercapai, dan 20% sisanya setelah proyek selesai dan handover. Pembayaran dapat dilakukan melalui transfer bank atau metode pembayaran digital lainnya.</p>
                </details>
                
                <!-- FAQ 5 -->
                <details class="group bg-white rounded-xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h4 class="text-lg font-semibold text-gray-900">Apakah website yang dibuat sudah mobile-friendly dan SEO optimized?</h4>
                        <span class="transition-transform group-open:rotate-180">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 leading-relaxed">Absolut! Semua website yang kami kembangkan sudah responsive dan mobile-friendly by default. Kami juga menerapkan best practices SEO seperti optimasi kecepatan loading, struktur HTML yang proper, meta tags, dan sitemap untuk membantu website Anda mudah ditemukan di search engine.</p>
                </details>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // JavaScript untuk Maps Loading
            const iframe = document.querySelector('iframe');
            const loadingOverlay = document.getElementById('map-loading');
            
            if (iframe && loadingOverlay) {
                iframe.addEventListener('load', function() {
                    setTimeout(function() {
                        loadingOverlay.style.opacity = '0';
                        setTimeout(function() {
                            loadingOverlay.style.display = 'none';
                        }, 300);
                    }, 1000);
                });
                
                // Fallback jika iframe tidak load dalam 5 detik
                setTimeout(function() {
                    if (loadingOverlay.style.display !== 'none') {
                        loadingOverlay.style.opacity = '0';
                        setTimeout(function() {
                            loadingOverlay.style.display = 'none';
                        }, 300);
                    }
                }, 5000);
            }
            
            // Smooth scroll untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
@endsection
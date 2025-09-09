@extends('user.layouts.app')

@section('title', 'Services - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white text-center py-20">
        <h2 class="text-4xl font-extrabold mb-4">Layanan Kami</h2>
        <p class="text-lg max-w-2xl mx-auto">
            Kami menyediakan berbagai layanan untuk mendukung kesuksesan bisnis Anda.
        </p>
    </section>

    <!-- Services List -->
    <section class="container mx-auto py-16 px-6">
        <div class="grid md:grid-cols-3 gap-10">
            @forelse($layanans as $layanan)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    @if($layanan->gambar)
                        <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->judul }}">
                    @else
                        <img src="https://via.placeholder.com/600x400" 
                             alt="default" 
                             class="w-full h-48 object-cover">
                    @endif

                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">{{ $layanan->judul }}</h3>
                        <p>{{ $layanan->deskripsi }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center col-span-3">Belum ada layanan yang ditambahkan.</p>
            @endforelse
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gray-100 py-16 text-center">
        <h3 class="text-2xl font-bold mb-4">Tertarik dengan layanan kami?</h3>
        <a href="{{ route('contact.index') }}" 
           class="bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-indigo-700">
            Hubungi Kami
        </a>
    </section>
@endsection

@extends('user.layouts.app')

@section('title', 'About Us - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white text-center py-20">
        <h2 class="text-4xl font-extrabold mb-4">{{ $tentang->judul ?? 'Tentang Kami' }}</h2>
        <p class="text-lg max-w-2xl mx-auto">
            {{ Str::limit($tentang->deskripsi ?? 'Mengenal lebih dekat siapa kami, visi, misi, dan perjalanan MyCompany.', 150) }}
        </p>
    </section>

    <!-- Content -->
    <section class="container mx-auto py-16 px-6 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h3 class="text-2xl font-bold mb-4">Siapa Kami?</h3>
            <p class="mb-6">
                {{ $tentang->deskripsi ?? 'Belum ada deskripsi yang ditambahkan.' }}
            </p>

            <h3 class="text-2xl font-bold mb-4">Visi Kami</h3>
            <p class="mb-6">
                {{ $tentang->visi ?? 'Belum ada visi.' }}
            </p>

            <h3 class="text-2xl font-bold mb-4">Misi Kami</h3>
            <p class="mb-6">
                {{ $tentang->misi ?? 'Belum ada misi.' }}
            </p>
        </div>

        <div>
            @if($tentang && $tentang->gambar)
                <img src="{{ asset($tentang->gambar) }}" 
                     alt="Tentang Kami" 
                     class="rounded-lg shadow-lg">
            @else
                <img src="https://source.unsplash.com/600x400/?team,office" 
                     alt="Our Team" 
                     class="rounded-lg shadow-lg">
            @endif
        </div>
    </section>
@endsection

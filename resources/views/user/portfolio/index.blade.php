@extends('user.layouts.app')

@section('title', 'Portfolio - MyCompany')

@section('content')
  <!-- Hero Section -->
  <section class="bg-indigo-600 text-white text-center py-20">
    <h2 class="text-4xl font-extrabold mb-4">Portfolio Kami</h2>
    <p class="text-lg max-w-2xl mx-auto">
      Berikut adalah beberapa proyek yang telah berhasil kami kerjakan bersama klien.
    </p>
  </section>

  <!-- Portfolio Grid -->
  <section class="container mx-auto py-16 px-6">
    <div class="grid md:grid-cols-3 gap-10">
      @forelse($portofolios as $item)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          @if($item->gambar)
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
          @else
            <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image" class="w-full h-48 object-cover">
          @endif
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">{{ $item->judul }}</h3>
            <p class="text-gray-600">{{ $item->deskripsi }}</p>
          </div>
        </div>
      @empty
        <p class="text-center text-gray-500 col-span-3">Belum ada portofolio.</p>
      @endforelse
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-gray-100 py-16 text-center">
    <h3 class="text-2xl font-bold mb-4">Ingin hasil karya seperti ini untuk bisnis Anda?</h3>
    <a href="/contact" class="bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-indigo-700">
      Hubungi Kami
    </a>
  </section>
@endsection

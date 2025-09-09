@extends('user.layouts.app')

@section('title', 'Home - MyCompany')

@section('content')
    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white text-center py-24">
        <h2 class="text-5xl font-extrabold mb-6">Selamat Datang di MyCompany</h2>
        <p class="text-lg max-w-2xl mx-auto mb-8">
            Kami adalah perusahaan yang menyediakan solusi digital dan layanan terbaik
            untuk membantu bisnis Anda berkembang.
        </p>
        <a href="/about" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold shadow-md hover:bg-gray-100">
            Pelajari Lebih Lanjut
        </a>
    </section>

    <!-- Section Highlight -->
    <section class="container mx-auto py-16 px-6">
        <h3 class="text-3xl font-bold text-center mb-10">Kenapa Memilih Kami?</h3>
        <div class="grid md:grid-cols-3 gap-10 text-center">
            <div class="p-8 bg-white shadow-lg rounded-2xl">
                <h4 class="text-xl font-semibold mb-2">Berpengalaman</h4>
                <p>Lebih dari 10 tahun membantu bisnis digital dan offline berkembang.</p>
            </div>
            <div class="p-8 bg-white shadow-lg rounded-2xl">
                <h4 class="text-xl font-semibold mb-2">Tim Profesional</h4>
                <p>Didukung oleh tim ahli di bidang IT, marketing, dan konsultan bisnis.</p>
            </div>
            <div class="p-8 bg-white shadow-lg rounded-2xl">
                <h4 class="text-xl font-semibold mb-2">Dukungan Penuh</h4>
                <p>Kami siap memberikan support dan solusi kapanpun Anda butuh.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gray-100 py-16 text-center">
        <h3 class="text-2xl font-bold mb-4">Ingin tahu lebih banyak tentang layanan kami?</h3>
        <a href="/services" class="bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-indigo-700">
            Lihat Layanan Kami
        </a>
    </section>
@endsection

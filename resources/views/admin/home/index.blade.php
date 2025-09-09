@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Admin')

@section('content')
<div class="row">
    <!-- Tentang -->
    <div class="col-md-3 mb-4">
        <div class="card text-bg-primary shadow">
            <div class="card-body text-center">
                <h5 class="card-title">Tentang</h5>
                <p class="display-6">{{ $totalTentang }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('tentang.index') }}" class="text-white">Kelola</a>
            </div>
        </div>
    </div>

    <!-- Layanan -->
    <div class="col-md-3 mb-4">
        <div class="card text-bg-success shadow">
            <div class="card-body text-center">
                <h5 class="card-title">Layanan</h5>
                <p class="display-6">{{ $totalLayanan }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('layanan.index') }}" class="text-white">Kelola</a>
            </div>
        </div>
    </div>

    <!-- Portofolio -->
    <div class="col-md-3 mb-4">
        <div class="card text-bg-warning shadow">
            <div class="card-body text-center">
                <h5 class="card-title">Portofolio</h5>
                <p class="display-6">{{ $totalPortofolio }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('portofolio.index') }}" class="text-white">Kelola</a>
            </div>
        </div>
    </div>

    <!-- Kontak -->
    <div class="col-md-3 mb-4">
        <div class="card text-bg-danger shadow">
            <div class="card-body text-center">
                <h5 class="card-title">Pesan Masuk</h5>
                <p class="display-6">{{ $totalKontak }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('kontak.index') }}" class="text-white">Lihat</a>
            </div>
        </div>
    </div>
</div>
@endsection

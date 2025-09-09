@extends('admin.layouts.app')

@section('title', 'Tentang Kami')
@section('page-title', 'Tentang Kami')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card p-4 shadow-sm">
        <h4>{{ $tentang->judul ?? 'Belum ada data' }}</h4>
        <p>{{ $tentang->deskripsi ?? '-' }}</p>
        <p><strong>Visi:</strong> {{ $tentang->visi ?? '-' }}</p>
        <p><strong>Misi:</strong> {{ $tentang->misi ?? '-' }}</p>

        @if($tentang && $tentang->gambar)
            <img src="{{ asset($tentang->gambar) }}" alt="Tentang Kami" class="img-fluid rounded mt-3" width="300">
        @endif

        <a href="{{ route('tentang.edit') }}" class="btn btn-primary mt-3">✏️ Edit</a>
    </div>
@endsection

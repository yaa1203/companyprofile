@extends('admin.layouts.app')

@section('title', 'Layanan')
@section('page-title', 'Daftar Layanan')

@section('content')
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    <div class="row">
        @forelse($layanans as $layanan)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    @if($layanan->gambar)
                        <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->judul }}">
                    @else
                        <img src="https://via.placeholder.com/600x400" 
                             class="card-img-top" 
                             alt="default" 
                             style="height:200px; object-fit:cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $layanan->judul }}</h5>
                        <p class="card-text">{{ Str::limit($layanan->deskripsi, 100) }}</p>
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Belum ada layanan ditambahkan.</p>
        @endforelse
    </div>
@endsection

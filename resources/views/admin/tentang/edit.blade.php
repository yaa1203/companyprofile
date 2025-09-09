@extends('admin.layouts.app')

@section('title', 'Edit Tentang Kami')
@section('page-title', 'Edit Tentang Kami')

@section('content')
    <form action="{{ route('tentang.update') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $tentang->judul ?? '') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="form-control">{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Visi</label>
            <textarea name="visi" rows="3" class="form-control">{{ old('visi', $tentang->visi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Misi</label>
            <textarea name="misi" rows="3" class="form-control">{{ old('misi', $tentang->misi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label><br>
            @if($tentang && $tentang->gambar)
                <img src="{{ asset($tentang->gambar) }}" alt="Tentang Kami" class="img-thumbnail mb-2" width="200"><br>
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">💾 Simpan</button>
        <a href="{{ route('tentang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection

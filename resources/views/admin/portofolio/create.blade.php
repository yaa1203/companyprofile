@extends('admin.layouts.app')

@section('title', 'Tambah Portofolio')
@section('page-title', 'Tambah Portofolio')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
                @error('judul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @error('gambar')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('portofolio.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection

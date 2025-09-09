@extends('admin.layouts.app')

@section('title', 'Edit Portofolio')
@section('page-title', 'Edit Portofolio')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.portofolio.update', $portofolio) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $portofolio->judul) }}" required>
                @error('judul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required>{{ old('deskripsi', $portofolio->deskripsi) }}</textarea>
                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (opsional)</label><br>
                @if($portofolio->gambar)
                    <img src="{{ asset('storage/' . $portofolio->gambar) }}" alt="{{ $portofolio->judul }}" width="120" class="mb-2">
                @endif
                <input type="file" name="gambar" id="gambar" class="form-control">
                @error('gambar')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.portofolio.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection

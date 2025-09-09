@extends('admin.layouts.app')

@section('title', 'Daftar Portofolio')
@section('page-title', 'Daftar Portofolio')

@section('content')
<div class="mb-3">
    <a href="{{ route('portofolio.create') }}" class="btn btn-primary">+ Tambah Portofolio</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($portofolios as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->judul }}</td>
            <td>{{ Str::limit($p->deskripsi, 60) }}</td>
            <td>
                @if($p->gambar)
                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->judul }}" width="100">
                @else
                    <span class="text-muted">Tidak ada gambar</span>
                @endif
            </td>
            <td>
                <a href="{{ route('portofolio.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('portofolio.destroy', $p) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Belum ada portofolio</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $portofolios->links() }}
@endsection

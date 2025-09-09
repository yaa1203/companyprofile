@extends('admin.layouts.app')

@section('title', 'Detail Pesan')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Detail Pesan</h2>

    <p><strong>Nama:</strong> {{ $kontak->name }}</p>
    <p><strong>Email:</strong> {{ $kontak->email }}</p>
    <p><strong>Tanggal:</strong> {{ $kontak->created_at->format('d M Y H:i') }}</p>
    <p class="mt-4"><strong>Pesan:</strong></p>
    <p class="bg-gray-100 p-4 rounded">{{ $kontak->message }}</p>

    <div class="mt-6">
        <a href="{{ route('kontak.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Kembali</a>
    </div>
</div>
@endsection

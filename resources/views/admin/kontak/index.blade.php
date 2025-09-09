@extends('admin.layouts.app')

@section('title', 'Daftar Kontak')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Pesan dari User</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">#</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Pesan</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kontaks as $kontak)
                <tr>
                    <td class="border p-2">{{ $loop->iteration }}</td>
                    <td class="border p-2">{{ $kontak->name }}</td>
                    <td class="border p-2">{{ $kontak->email }}</td>
                    <td class="border p-2">{{ Str::limit($kontak->message, 50) }}</td>
                    <td class="border p-2">{{ $kontak->created_at->format('d M Y H:i') }}</td>
                    <td class="border p-2 text-center">
                        <a href="{{ route('kontak.show', $kontak) }}" class="text-blue-600">Lihat</a> |
                        <form action="{{ route('kontak.destroy', $kontak) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center p-4 text-gray-500">Belum ada pesan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $kontaks->links() }}
    </div>
</div>
@endsection

@extends('user.layouts.app')

@section('title', 'Contact - MyCompany')

@section('content')
  <!-- Hero -->
  <section class="bg-indigo-600 text-white text-center py-20">
    <h2 class="text-4xl font-extrabold mb-4">Hubungi Kami</h2>
    <p class="text-lg max-w-2xl mx-auto">Isi formulir di bawah ini untuk menghubungi tim kami.</p>
  </section>

  <!-- Form -->
  <section class="container mx-auto py-16 px-6 max-w-2xl">
    @if(session('success'))
      <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
      @csrf
      <div>
        <label class="block font-medium mb-1">Nama</label>
        <input type="text" name="name" value="{{ old('name') }}"
          class="w-full border-gray-300 rounded-lg shadow-sm p-2" required>
        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block font-medium mb-1">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
          class="w-full border-gray-300 rounded-lg shadow-sm p-2" required>
        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block font-medium mb-1">Pesan</label>
        <textarea name="message" rows="5"
          class="w-full border-gray-300 rounded-lg shadow-sm p-2" required>{{ old('message') }}</textarea>
        @error('message') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <button type="submit"
        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
        Kirim Pesan
      </button>
    </form>
  </section>
@endsection

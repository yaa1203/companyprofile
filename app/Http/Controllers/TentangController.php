<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = Tentang::first();
        return view('admin.tentang.index', compact('tentang'));
    }

    public function edit()
    {
        $tentang = Tentang::first();
        return view('admin.tentang.edit', compact('tentang'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $tentang = Tentang::first() ?? new Tentang();
        $tentang->fill($validated);

        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads/tentang'), $filename);
            $tentang->gambar = 'uploads/tentang/' . $filename;
        }

        $tentang->save();

        return redirect()->route('tentang.index')->with('success', 'Data Tentang berhasil diperbarui');
    }
}

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

    public function create()
    {
        // Redirect ke index jika data sudah ada
        if (Tentang::exists()) {
            return redirect()->route('tentang.index')
                ->with('info', 'Data Tentang sudah ada. Silakan gunakan fitur edit untuk memperbarui.');
        }

        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        // Cek apakah data sudah ada
        if (Tentang::exists()) {
            return redirect()->route('tentang.index')
                ->with('error', 'Data Tentang sudah ada. Tidak dapat menambahkan data baru.');
        }

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $tentang = new Tentang();
        $tentang->fill($validated);

        if ($request->hasFile('gambar')) {
            // Buat folder jika belum ada
            if (!file_exists(public_path('uploads/tentang'))) {
                mkdir(public_path('uploads/tentang'), 0777, true);
            }

            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads/tentang'), $filename);
            $tentang->gambar = 'uploads/tentang/' . $filename;
        }

        $tentang->save();

        return redirect()->route('tentang.index')
            ->with('success', 'Data Tentang berhasil ditambahkan');
    }

    public function edit()
    {
        $tentang = Tentang::first();
        
        // Redirect ke create jika belum ada data
        if (!$tentang) {
            return redirect()->route('tentang.create')
                ->with('info', 'Silakan buat data Tentang terlebih dahulu.');
        }

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

        $tentang = Tentang::first();
        
        if (!$tentang) {
            return redirect()->route('tentang.create')
                ->with('error', 'Data tidak ditemukan. Silakan buat data baru.');
        }

        $tentang->fill($validated);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($tentang->gambar && file_exists(public_path($tentang->gambar))) {
                unlink(public_path($tentang->gambar));
            }

            // Buat folder jika belum ada
            if (!file_exists(public_path('uploads/tentang'))) {
                mkdir(public_path('uploads/tentang'), 0777, true);
            }

            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads/tentang'), $filename);
            $tentang->gambar = 'uploads/tentang/' . $filename;
        }

        $tentang->save();

        return redirect()->route('tentang.index')
            ->with('success', 'Data Tentang berhasil diperbarui');
    }
}
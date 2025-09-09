<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('user.contact.index');
    }

    public function send(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan ke database (tabel kontaks)
        Kontak::create($validated);

        // Kirim email ke admin
        Mail::to('muhammadilyahamzah@gmail.com')
            ->send(new ContactMail($validated));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}

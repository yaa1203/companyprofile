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
        // Data lokasi dan informasi kontak yang bisa disesuaikan
        $contactInfo = [
            'company_name' => 'MyCompany',
            'address' => [
                'street' => 'Jl. Raya Tajur - Bogor',
                'city' => 'Bogor Timur',
                'postal_code' => '16146',
                'country' => 'Indonesia',
                'full_address' => 'Jl. Raya Tajur, Kota Bogor, Jawa Barat 16146, Indonesia'
            ],
            'contact' => [
                'email' => [
                    'info@mycompany.com',
                    'support@mycompany.com'
                ],
                'phone' => [
                    '+62 812-3456-7890',
                    '+62 811-2222-3333'
                ]
            ],
            'office_hours' => [
                'weekdays' => '09:00 - 17:00 WIB',
                'saturday' => '09:00 - 14:00 WIB',
                'sunday' => 'Tutup'
            ],
            // Koordinat untuk Google Maps (latitude, longitude)
            'coordinates' => [
                'latitude' => -6.651597861007943, 
                'longitude' => 106.84531599478574
            ],
            // URL Google Maps Embed - Ganti sesuai alamat yang diinginkan
            'maps_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.960601960524!2d106.84274107410249!3d-6.651805665024952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5fdebec5a0d%3A0x2164038f662433c6!2sJl.%20Raya%20Tajur%20-%20Bogor%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016146!5e0!3m2!1sid!2sid!4v1757467586095!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
            // URL untuk "Buka di Google Maps"
            'maps_direct_url' => 'https://www.google.com/maps/place/Jl.+Raya+Tajur+-+Bogor,+Kota+Bogor,+Jawa+Barat+16146/@-6.6518057,106.8407026,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c5fdebec5a0d:0x2164038f662433c6!8m2!3d-6.651811!4d106.845316!16s%2Fg%2F11c6scb3wy?entry=ttu&g_ep=EgoyMDI1MDkwNy4wIKXMDSoASAFQAw%3D%3D'
        ];

        return view('user.contact.index', compact('contactInfo'));
    }

    public function send(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Simpan ke database (tabel kontaks)
            Kontak::create($validated);

            // Kirim email ke admin
            Mail::to('muhammadilyahamzah@gmail.com')
                ->send(new ContactMail($validated));

            return back()->with('success', 'Pesan berhasil dikirim! Kami akan segera merespons dalam 24 jam.');

        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }

    /**
     * Method untuk mengupdate lokasi (opsional - bisa digunakan admin)
     */
    public function updateLocation(Request $request)
    {
        // Validasi data lokasi baru
        $validated = $request->validate([
            'company_name' => 'required|string|max:100',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'country' => 'required|string|max:100',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'maps_embed_url' => 'required|url',
            'phone' => 'array',
            'email' => 'array'
        ]);

        // Di sini Anda bisa menyimpan ke database atau config file
        // Contoh: simpan ke file config atau database settings

        return response()->json([
            'success' => true,
            'message' => 'Lokasi berhasil diperbarui'
        ]);
    }
}
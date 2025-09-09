<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\Layanan;
use App\Models\Portofolio;
use App\Models\Kontak;

class HomeController extends Controller
{
    public function index()
    {
        $totalTentang     = Tentang::count();
        $totalLayanan     = Layanan::count();
        $totalPortofolio  = Portofolio::count();
        $totalKontak      = Kontak::count();

        return view('admin.home.index', compact(
            'totalTentang',
            'totalLayanan',
            'totalPortofolio',
            'totalKontak'
        ));
    }
}

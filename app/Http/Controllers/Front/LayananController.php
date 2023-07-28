<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index() {
        return view('includes.frontend.pages.layanan.index');
    }

    public function fasilitas() {
        return view('includes.frontend.pages.layanan.fasilitas');
    }

    public function kemitraan() {
        return view('includes.frontend.pages.layanan.kemitraan');
    }

    public function konsultasi() {
        return view('includes.frontend.pages.layanan.konsultasi');
    }

    public function program() {
        return view('includes.frontend.pages.layanan.program');
    }

    public function teknologi() {
        return view('includes.frontend.pages.layanan.teknologi');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuangMediaController extends Controller
{
    public function mediaPublikasi() {
        return view('includes.frontend.pages.ruang-media.media-publikasi.index');
    }

    public function artikel() {
        return view('includes.frontend.pages.ruang-media.artikel.index');
    }

    public function galeri() {
        return view('includes.frontend.pages.ruang-media.galeri.index');
    }

    public function agenda() {
        return view('includes.frontend.pages.ruang-media.agenda.index');
    }
}

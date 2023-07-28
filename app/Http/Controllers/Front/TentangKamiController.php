<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index() {
        return view('includes.frontend.pages.tentang-kami.index');
    }
}

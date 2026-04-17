<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'penduduk' => 5234,
            'keluarga' => 1456,
            'berita' => 24,
            'pengaduan' => 89
        ];

        return view('home', compact('data'));
    }
}
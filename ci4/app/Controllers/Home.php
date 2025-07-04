<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home', [
            'title' => 'Beranda',
            'content' => 'Selamat datang di situs web kami. Ini adalah halaman utama yang berisi pengantar atau informasi umum.'
        ]);
    }
}

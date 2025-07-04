<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Beranda',
            'content' => 'Selamat datang di halaman beranda website ini. Di sini Anda bisa menemukan informasi terbaru, artikel menarik, dan berbagai fitur dari situs kami.'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'Tentang Kami',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Kontak Kami',
            'content' => 'Silakan hubungi kami melalui email atau nomor yang tersedia.'
        ]);
    }
}

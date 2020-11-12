<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda()
    {
        return view('index');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kegiatan()
    {
        return view('kegiatan');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function admin()
    {
        return view('admin');
    }
}

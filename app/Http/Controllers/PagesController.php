<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Kegiatan;
use App\Galeri;
use App\Fasilitas;
use Illuminate\Http\Request;

// user view
class PagesController extends Controller
{
    public function beranda()
    {
        return view('index');
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('galeri', ['galeri' => $galeri]);
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function staff()
    {
        $guru = Guru::all();
        return view('staff', ['guru' => $guru]);
    }
}

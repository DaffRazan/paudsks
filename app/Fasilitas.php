<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['nama_fasilitas', 'deskripsi', 'gambar_fasilitas'];
}

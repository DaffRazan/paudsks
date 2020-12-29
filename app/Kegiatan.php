<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['gambar_kegiatan', 'nama_kegiatan', 'deskripsi_kegiatan'];

    // public function getCreatedAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    // }
}

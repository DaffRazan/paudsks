<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama', 'jabatan', 'tgl_mulai_tugas', 'alamat', 'pendidikan', 'created_at', 'updated_at', 'foto_guru'];
}

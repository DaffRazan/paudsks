@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Detail Staff')

@section('content')
<div class="col" style="">
    <div class="card border-0">
        <div class="card-header d-flex justify-content-between">
            <img src="{{ asset(Storage::url($guru->foto_guru)) }}" class="card-img-top img-thumbnail h-25 w-25 mx-auto"
                alt="...">
        </div>

        <div class="card-body text-center">
            <h2 class="card-title mb-0" style="color: #5e72e4">Nama: </h2>
            <p class="card-text">{{ $guru->nama }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Jabatan: </h2>
            <p class="card-text">{{ $guru->jabatan }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Pendidikan Terakhir: </h2>
            <p class="card-text">{{ $guru->pendidikan }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Alamat: </h2>
            <p class="card-text">{{ $guru->alamat }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Tanggal Mulai Tugas: </h2>
            <p class="card-text">{{ $guru->tgl_mulai_tugas }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Dibuat Tanggal: </h2>
            <p class="card-text">{{ $guru->created_at }}</p>
            <h2 class="card-title mb-0" style="color: #5e72e4">Diubah Tanggal: </h2>
            <p class="card-text">{{ $guru->updated_at }}</p>
        </div>
    </div>

</div>
@endsection

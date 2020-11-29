@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Edit Data Galeri')

@section('content')
<div class="col">
    <div class="card">
        <form method="post" action="/admin/galeri/{{ $galeri->id }}" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="card-header border-0 d-flex justify-content-between">
                <h3 class="mb-0">Edit Galeri</h3>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Gambar</label>
                    <input type="text" id="input-username" class="form-control" name="nama_gambar"
                        value="{{ $galeri->nama_gambar }}" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar</label>
                    <input type="file" id="input-username" class="form-control-file" name="gambar" required>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

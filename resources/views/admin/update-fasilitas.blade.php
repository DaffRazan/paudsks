@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Edit Data Fasilitas')

@section('content')
<div class="col">
    <div class="card">
        <form method="post" action="/admin/fasilitas/{{ $fasilitas->id }}" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="card-header border-0 d-flex justify-content-between">
                <h3 class="mb-0">Edit Fasilitas</h3>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Fasilitas</label>
                    <input type="text" id="input-username" class="form-control" name="nama_fasilitas"
                        value="{{ $fasilitas->nama_fasilitas }}" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Deskripsi</label>
                    <input type="text" id="input-username" class="form-control" name="deskripsi"
                        value="{{ $fasilitas->deskripsi }}" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar</label>
                    <input type="file" id="input-username" class="form-control" name="gambar_fasilitas">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

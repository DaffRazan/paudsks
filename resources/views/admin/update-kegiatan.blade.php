@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Edit Data Kegiatan')

@section('content')
<div class="col">
    <div class="card">
        <form method="post" action="/admin/kegiatan/{{ $kegiatan->id }}" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="card-header border-0 d-flex justify-content-between">
                <h3 class="mb-0">Edit Kegiatan</h3>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan"
                        class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan"
                        value="{{ $kegiatan->nama_kegiatan }}">
                    @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Deskripsi</label>
                    <input type="text" id="input-username" class="form-control" name="deskripsi_kegiatan"
                        value="{{ $kegiatan->deskripsi_kegiatan }}" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar Kegiatan</label>
                    <input type="file" id="input-username" class="form-control" name="gambar_kegiatan" value="{{ $kegiatan->gambar_kegiatan }}">
                </div>
                {{-- <img width="150px" src="{{ asset(Storage::url($kegiatan->gambar_kegiatan)) }}" alt=""> --}}
            </div>
        </form>
    </div>
</div>
</div>
@endsection

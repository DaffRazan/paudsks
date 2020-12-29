@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Tambah Data Kegiatan')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Tambah Kegiatan</h3>
            <a href="#" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('form-add-kegiatan').submit();">Simpan</a>
        </div>
        <div class="card-body">
            <form id="form-add-kegiatan"
                action="{{ url('/admin/kegiatan') }}{{ isset($kegiatan) ? '/'.$kegiatan->id : '' }}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Kegiatan</label>
                    <input type="text" id="input-username"
                        class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan"
                        value="{{ old('nama_kegiatan') }}" required>
                    @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Deskripsi Kegiatan</label>
                    <textarea class="form-control @error('deskripsi_kegiatan') is-invalid @enderror"
                        id="exampleFormControlTextarea1" rows="3" name="deskripsi_kegiatan" value="{{ old('deskripsi_kegiatan') }}"
                        required></textarea>
                    @error('deskripsi_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar Kegiatan</label>
                    <input type="file" class="form-control-file" id="input-username" class="form-control"
                        name="gambar_kegiatan" value="{{ @$kegiatan->gambar_kegiatan }}" required>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

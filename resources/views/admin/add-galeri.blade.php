@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Tambah Data Galeri')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Tambah Galeri</h3>
            <a href="#" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('form-add-galeri').submit();">Simpan</a>
        </div>
        <div class="card-body">
            <form form id="form-add-galeri" action="{{ url('/admin/galeri') }}{{ isset($galeri) ? '/'.$galeri->id : '' }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- {{ method_field('PUT') }} --}}
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Gambar</label>
                    <input type="text" id="input-username" class="form-control @error('nama_gambar') is-invalid @enderror" name="nama_gambar" value="{{ @$galeri->nama_gambar }}" required>
                    @error('nama_gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar</label>
                    <input type="file" id="input-username" class="form-control-file" name="gambar" value="{{ @$galeri->gambar }}" required>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

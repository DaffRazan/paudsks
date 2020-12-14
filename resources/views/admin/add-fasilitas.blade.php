@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Tambah Data Fasilitas')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Tambah Fasilitas</h3>
            <a href="#" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('form-add-fasilitas').submit();">Simpan</a>
        </div>
        <div class="card-body">
            <form form id="form-add-fasilitas"
                action="{{ url('/admin/fasilitas') }}{{ isset($fasilitas) ? '/'.$fasilitas->id : '' }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{-- {{ method_field('PUT') }} --}}
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Fasilitas</label>
                    <input type="text" id="input-username" class="form-control @error('nama_fasilitas') is-invalid @enderror" name="nama_fasilitas"
                        value="{{ @$fasilitas->nama_fasilitas }}" required>
                    @error('nama_fasilitas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="deskripsi"
                        value="{{ @$fasilitas->deskripsi }}" required></textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Gambar</label>
                    <input type="file" class="form-control-file" id="input-username" class="form-control"
                        name="gambar_fasilitas" value="{{ @$fasilitas->gambar_fasilitas }}" required>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

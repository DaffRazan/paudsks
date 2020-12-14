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
            <form id="form-add-kegiatan" action="{{ url('/admin/kegiatan') }}{{ isset($kegiatan) ? '/'.$kegiatan->id : '' }}"
                method="post">
                @csrf
                {{-- {{ method_field('PUT') }} --}}
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Kegiatan</label>
                    <input type="text" id="input-username" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" value="{{ @$Kegiatan->nama_kegiatan }}"
                        required>
                    @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

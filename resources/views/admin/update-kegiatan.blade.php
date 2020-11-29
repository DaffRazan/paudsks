@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Edit Data Kegiatan')

@section('content')
<div class="col">
    <div class="card">
        <form method="post" action="/admin/kegiatan/{{ $kegiatan->id }}">
            @method('patch')
            @csrf

            <div class="card-header border-0 d-flex justify-content-between">
                <h3 class="mb-0">Edit Kegiatan</h3>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan" class="form-control" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" required>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection

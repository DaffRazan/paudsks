@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Edit Data Staff')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Edit Guru / Staff</h3>
            <a href="#" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('form-add-staff').submit();">Simpan</a>
        </div>

        <div class="card-body">
            <form id="form-add-staff" action="{{ url('/admin/staff') }}{{ isset($guru) ? '/'.$guru->id : '' }}"
                method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama</label>
                    <input type="text" id="input-username" class="form-control  @error('nama') is-invalid @enderror"
                        name="nama" value="{{$guru->nama}}" required>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tgl_mulai_tugas" class="form-control-label">Tanggal Mulai Tugas</label>
                    <input type="date" name="tgl_mulai_tugas"
                        class="form-control @error('tgl_mulai_tugas') is-invalid @enderror"
                        value="{{$guru->tgl_mulai_tugas}}" required>
                    @error('tgl_mulai_tugas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pendidikan" class="form-control-label">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control  @error('pendidikan') is-invalid @enderror"
                        value="{{$guru->pendidikan}}" required>
                    @error('pendidikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                        value="{{$guru->alamat}}" required>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="jabatan" class="form-control-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                        value="{{$guru->jabatan}}" required>
                    @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="input-username">Foto Staff</label>
                    <input type="file" id="input-username" class="form-control-file" name="foto_guru"
                        value="{{ $guru->foto_guru }}">

                    @error('foto_guru')
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

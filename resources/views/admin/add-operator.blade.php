@extends('layouts.superadmin')
@section('title', 'Admin PAUD SKS | Tambah Operator')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Tambah Operator</h3>
            <a href="#" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('form-add-operator').submit();">Simpan</a>
        </div>
        <div class="card-body">
            <form form id="form-add-operator" action="{{ url('/admin') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama</label>
                    <input id="name" type="text" id="input-username" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Email</label>
                    <input id="email" type="text" id="input-username" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Password</label>
                    <input type="password" id="input-username" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Konfirmasi Password</label>
                    <input type="password" id="input-username" class="form-control" name="password_confirmation"
                        required>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layout/main')
@section('title', 'Staff - Smart Kids School')

@section('container')

<style>
    .my-section {
        margin: 6rem 0;
    }

</style>

{{-- navbar --}}
<div class="pt-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ url('/') }}" class="rounded-pill nav-link mr-3 text-light" style="background-color: #197163">Smart Kids School</a>

            {{-- <a class="navbar-brand" href="#">Smart Kids School</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/staff') }}">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kegiatan') }}">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                    </li> 
                    <li class="nav-item ml-2">
                        <a class="btn btn-success" href="#footer" style="background-color: #197163">
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container py-5">
    <table class="table">
        <thead class="text-light" style="background-color: #197163">
                    <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $gr)
                        <tr class="">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $gr->nama }}</td>
                            <td>{{ $gr->jabatan }}</td>
                            <td>{{ $gr->pendidikan }}</td>
                        </tr>
                    @endforeach
                </tbody>
    </table>
</div>

@endsection

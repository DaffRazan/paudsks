@extends('layout/main')
@section('title', 'Fasilitas - Smart Kids School')

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
                        <a class="nav-link" href="{{ url('/staff') }}">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/fasilitas') }}">Fasilitas</a>
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

{{-- Section Fasilitas --}}
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-6">
                <div class="text-center">
                    <img class="img-thumbnail" height="400" width="400"  src="{{ asset('uploads/fasilitas/rb3.jpeg') }}" alt="Ruang Belajar">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4">Ruang Belajar TK</h1>
                <p class="font-weight-light">Ruang belajar dilengkapi dengan meja belajar dan ruangan yang full AC.</p>
            </div>
        </div>

        <div class="row py-5">
             <div class="col-lg-6">
                <div class="" style="padding-left: 70px;">
                    <h1 class="mb-4">Ruang Belajar Kelompok Bermain</h1>
                    <p class="font-weight-light">Ruang Belajar Kelompok Bermain dibangun dengan luas sehingga murid dapat aktif dalam bermain sesama.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-thumbnail" height="400" width="400"  src="{{ asset('uploads/fasilitas/kb.jpeg') }}" alt="Ruang Belajar">
            </div>
        </div>

        <div class="row py-5">
             <div class="col-lg-6">
                <div class="text-center">
                    <img class="img-thumbnail" height="400" width="400"  src="{{ asset('uploads/fasilitas/tpa.jpeg') }}" alt="Ruang Belajar">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4">Ruang Tempat Penitipan Anak</h1>
                <p class="font-weight-light">Ruang Tempat Penitipan Anak dibangun dengan luas sehingga anak murid dapat bebas bergerak dengan aktif.</p>
            </div>
        </div>

    </div>

@endsection

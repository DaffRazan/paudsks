@extends('layout/main')
@section('title', 'Program Pembelajaran dan Kegiatan Sekolah - Smart Kids School')

@section('container')
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
                        <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/kegiatan') }}">Kegiatan</a>
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

      {{-- Program pembelajaran --}}
  <div class="container py-5">
      <h1 class="mb-5 pb-3">Program Pembelajaran dan Kegiatan</h1>

      <h2 class="font-weight-normal">#1 <span class="mr-3"></span>Tahfiz Alqur'an</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#2 <span class="mr-3"></span>Hafalan Do'a dan Hadist</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#3 <span class="mr-3"></span>Sholat Dhuha</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#4 <span class="mr-3"></span>Senam Pagi Ceria</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#5 <span class="mr-3"></span>Games Pembelajaran</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#6 <span class="mr-3"></span>Ekstrakurikuler</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#7 <span class="mr-3"></span>Outdoor Study</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#8 <span class="mr-3"></span>Outbound</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#9 <span class="mr-3"></span>Kunjungan Dokter</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#10 <span class="mr-3"></span>Privat Membaca dan Menulis</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#11 <span class="mr-3"></span>Memperingati Hari Besar Islam</h2>
      <hr class="pb-5 mb-3">
      <h2 class="font-weight-normal">#12 <span class="mr-3"></span>Pembelajaran Pendekatan Alam</h2>
      <hr class="pb-5 mb-3">
  </div>
    
@endsection
@extends('layout/main')
@section('title', 'Program Pembelajaran dan Kegiatan Sekolah - Smart Kids School')

@section('container')
{{-- navbar --}}
 <div class="container-fluid" style="background-color: #519872">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Smart Kids School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/profilguru') }}">Profil Guru</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-light" href="{{ url('/kegiatan') }}">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/galeri') }}">Galeri</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>

            {{-- Program pembelajaran --}}
        <div class="container py-5">
            <h1 class="text-light mb-5 pb-3">Program Pembelajaran dan Kegiatan</h1>

            <h2 class="text-light">#1 Tahfiz Alqur'an</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#2 Hafalan Do'a dan Hadist</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#3 Sholat Dhuha</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#4 Senam Pagi Ceria</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#5 Games Pembelajaran</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#6 Ekstrakurikuler</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#7 Outdoor Study</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#8 Outbound</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#9 Kunjungan Dokter</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#10 Privat Membaca dan Menulis</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#11 Memperingati Hari Besar Islam</h2>
            <hr class="pb-5 mb-3">
            <h2 class="text-light">#12 Pembelajaran Pendekatan Alam</h2>
            <hr class="pb-5 mb-3">
        </div>
    </div>
    
@endsection
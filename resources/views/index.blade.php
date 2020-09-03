@extends('layout/main')
@section('title', 'Beranda - Smart Kids School')

@section('container')
{{-- navbar --}}
 <div class="container-fluid" style="background-color: #519872">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ url('/') }}" class="rounded-pill bg-dark text-light nav-link mr-3" >Smart Kids School</a>

            {{-- <a class="navbar-brand" href="#">Smart Kids School</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-light active" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/profilguru') }}">Profil Guru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/kegiatan') }}">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/galeri') }}">Galeri</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </div>
    
    {{-- Carousel --}}
    <div class="container-fluid" style="padding-right: 0%; padding-left: 0%;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
    </li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('uploads/slides/5.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kegiatan Menari</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('uploads/slides/7.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kegiatan Menari</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    {{-- Section Sejarah PAUD --}}
  <div class="container-fluid pt-5" style="background-color: #519872">
    <div class="container">
      <div class="row px-5 text-light">
        <div class="col-lg-6 px-5">
          <h1 class="font-weight-bold">Selamat Datang di PAUD Smart Kids School</h1>
          <h5 class="mt-3 text-small font-weight-light">PAUD Smart Kids School merupakan lembaga pendidikan yang bernuansa alam yang didirikan oleh Yayasan Amaliyah yang beralamat di Jalan AMD No.21 Batoh, Lueng Bata, Banda Aceh.</h5>
        </div>
        <div class="col-lg-6 pb-5">
          <img class="img-thumbnail rounded float-right" width="80%" src="{{ asset('uploads/slides/1.jpeg') }}" alt="">
        </div>
      </div>

      <hr>

      {{-- Section Fasilitas --}}
      <h1 class="text-center text-light font-weight-bold">Fasilitas</h1>

        <div class="row justify-content-center mx-auto py-5">
          <div class="col-lg-3">
            <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header font-weight-bold">1</div>
                <div class="card-body">
                  <h5 class="card-title">Ruang belajar dengan nuansa Alam</h5>
                  <p class="card-text"></p>
                </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header font-weight-bold">2</div>
                <div class="card-body">
                  <h5 class="card-title">Ruangan belajar full AC</h5>
                  <p class="card-text"></p>
                </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header font-weight-bold">3</div>
                <div class="card-body">
                  <h5 class="card-title">Mainan Edukasi</h5>
                </div>
            </div>
          </div>
      </div>

    <div class="row justify-content-center mx-auto py-1">
        <div class="col-lg-3">
          <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header font-weight-bold">4</div>
              <div class="card-body">
                <h5 class="card-title">Kolam Ikan</h5>
                <p class="card-text"></p>
              </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header font-weight-bold">5</div>
              <div class="card-body">
                <h5 class="card-title">Lapangan Basket Mini</h5>
                <p class="card-text"></p>
              </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-center font-weight-bold">6</div>
              <div class="card-body">
                <h5 class="card-title">Tenaga pengajar dan pengasuh yang berpengalaman</h5>
              </div>
          </div>
        </div>
      </div>

      <hr>

      {{-- Section peraturan kelas --}}
      <div class="row justify-content-center mx-auto py-5">
        <div class="col-lg-3">
          <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header font-weight-bold">Sesi Kelas</div>
              <div class="card-body">
                <h5 class="card-text">08.00 - 12.30</h5>
              </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-center font-weight-bold">Lokasi</div>
              <div class="card-body">
                <h5 class="card-text">JL. AMD,  No. 021 Batoh, Kec.  Lueng Bata,  Kota Banda Aceh</h5>
              </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header font-weight-bold">Kontak</div>
              <div class="card-body">
                <h5 class="card-text">0853-2390-1499</h5>
              </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

@endsection
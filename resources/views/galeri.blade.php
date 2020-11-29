@extends('layout/main')
@section('title', 'Galeri - Smart Kids School')

@section('container')
{{-- navbar --}}
<div class="pt-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ url('/') }}" class="rounded-pill nav-link mr-3 text-light"
                style="background-color: #197163">Smart Kids School</a>

            {{-- <a class="navbar-brand" href="#">Smart Kids School</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/staff') }}">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kegiatan') }}">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/galeri') }}">Galeri</a>
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
    {{-- Carousel --}}
    <div class="container" style="padding-right: 0%; padding-left: 0%;">
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
                        {{-- <h5>Kegiatan Menari</h5> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('uploads/slides/7.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>Kegiatan Menari</h5> --}}
                        {{-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
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

    {{-- IMAGES --}}
    <div class="row text-center py-3">
        @foreach ($galeri as $glr)
        <div class="col-lg-4">
            <img width="400" height="400" src="{{ asset(Storage::url($glr->gambar)) }}" class="img-thumbnail">
        </div>
        @endforeach
    </div>

</div>

@endsection

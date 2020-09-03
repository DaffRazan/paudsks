@extends('layout/main')
@section('title', 'Galeri - Smart Kids School')

@section('container')
{{-- navbar --}}
 <div class="container-fluid" style="background-color: #519872">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ url('/') }}" class="rounded-pill bg-dark text-light nav-link mr-3" >Smart Kids School</a>
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
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ url('/kegiatan') }}">Kegiatan</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-light" href="{{ url('/galeri') }}">Galeri</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

         <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/1.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/2.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/3.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/4.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
               <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/8.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/9.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok3.JPG') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok1.JPG') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok2.JPG') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok6.JPG') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok4.JPG') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok5.JPG') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/dok7.JPG') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/11.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/12.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/13.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
                 <div class="col-lg-4">
                    <img src="{{ asset('uploads/slides/6.jpeg') }}" alt="..." class="img-thumbnail">
                </div>
            </div>
        </div>

    </div>
    
   
@endsection
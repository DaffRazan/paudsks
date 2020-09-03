@extends('layout/main')
@section('title', 'Profil Guru - Smart Kids School')

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
                <li class="nav-item active">
                  <a class="nav-link text-light" href="{{ url('/profilguru') }}">Profil Guru</a>
                </li>
                <li class="nav-item">
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

            {{-- Tabel guru --}}
        <div class="container py-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr class="text-light">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $gr)
                        <tr class="text-light">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $gr->nama }}</td>
                            <td>{{ $gr->jabatan }}</td>
                            <td>{{ $gr->pendidikan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
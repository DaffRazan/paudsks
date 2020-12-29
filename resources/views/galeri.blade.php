@extends('layout/main')
@section('title', 'Galeri - Smart Kids School')

@section('container')

<style>
    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    img:hover {
        cursor: pointer;
    }

    p#nama_gambar {
        text-decoration: none;
    }
</style>

<div class="container py-5">
    <h1 class="text-center title-kegiatan" style="color:#197163">Galeri Kegiatan</h1>
    <hr width="40%">
    {{-- IMAGES GALLERY --}}
    <div class="row text-center py-3 animate__animated animate__fadeInUp">
        @foreach ($galeri as $glr)
        <div class="col-lg-3 px-1">
            <a href="{{ asset(Storage::url($glr->gambar)) }}" data-lightbox="roadtrip"
                data-title="{{ $glr->nama_gambar }}">
                <img id="galleryId" class="w-75 h-75 mx-auto mt-4 img-thumbnail hover-shadow"
                    src="{{ asset(Storage::url($glr->gambar)) }}">
                <div class="">
                    <p id="nama_gambar" style="color:#197163;">{{ $glr->nama_gambar }}</p>
                </div>
            </a>

        </div>
        @endforeach
    </div>
    {{-- END IMAGES GALLERY --}}
</div>

<script src="{{ asset('js/lightbox.js') }}"></script>

@endsection

@extends('layout/main')
@section('title', 'Fasilitas - Smart Kids School')

@section('container')

<style>
    .my-section {
        margin: 6rem 0;
    }
</style>

{{-- Section Fasilitas --}}
<div class="container py-5">
    <h1 class="text-center title-kegiatan" style="color:#197163">Fasilitas</h1>
    <hr width="40%">


    @foreach ($fasilitas as $item)
    <div class="row py-5 animate__animated animate__fadeInUp">
        <div class="col-lg-6">
            <div class="text-center">
                <img class="img-thumbnail" height="400" width="400"
                    src="{{ asset(Storage::url($item->gambar_fasilitas)) }}" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <h1 class="mb-4 text-sm-center text-md-left" style="color:#197163">{{$item->nama_fasilitas}}</h1>
            <p class="font-weight-light text-sm-center text-md-left">{{$item->deskripsi}}</p>
        </div>
    </div>
    @endforeach

</div>

@endsection

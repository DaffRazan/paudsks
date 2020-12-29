@extends('layout/main')
@section('title', 'Program Pembelajaran dan Kegiatan Sekolah - Smart Kids School')

@section('container')

<style>
    @media (max-width: 400px) {
        .title-kegiatan {
            font-size: 1.5rem;
        }
    }

</style>

{{-- Program pembelajaran --}}
<div class="container py-5">
    <h1 class="text-center title-kegiatan" style="color:#197163">Program Pembelajaran dan Kegiatan</h1>
    <hr width="40%" class="mb-5">

    @foreach ($kegiatan as $kg)
    <div class="row animate__animated animate__fadeInUp">
        <div class="col-lg-6">
            <h2 class="font-weight-normal" style="color:#197163">{{ $loop->iteration }}. <span
                    class="mr-3">{{ $kg->nama_kegiatan }}</span>
            </h2>
            <p class="font-weight-light">{{$kg->deskripsi_kegiatan}}</p>
        </div>
        <div class="col-lg-6">
            @if ($kg->gambar_kegiatan)
            <img class="mb-2 img-thumbnail" src="{{ asset(Storage::url($kg->gambar_kegiatan)) }}" alt="">
            @endif
        </div>
    </div>
    <hr class="pb-5 mb-3">
    @endforeach



</div>

@endsection

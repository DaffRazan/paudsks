@extends('layout/main')
@section('title', 'Beranda - Smart Kids School')

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
                        <a class="nav-link active" href="{{ url('/') }}">Beranda<span
                                class="sr-only">(current)</span></a>
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

{{-- Section slogan PAUD --}}
<div class="my-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="font-weight-bold">Be A Smart Student With Us.</h1>
                <h5 class="mt-3 text-small font-weight-light">Mencetak generasi unggul dengan menanamkan cara belajar
                    yang smart</h5>
                <div class="d-flex mt-5">
                    <a href="#profile" class="btn mr-2" style="flex-shrink: 0; border-color: #197163; color :#197163">Selengkapnya</a>
                    <a target="_blank" href="https://wa.me/6282361143553" class="btn text-light" style="flex-shrink: 0; background-color: #197163;">Kontak Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="rounded float-right" width="80%" src="{{ asset('uploads/slides/school.png') }}" alt="" style="margin-top: -40px;">
            </div>
        </div>
    </div>
</div>

    {{-- <hr width="300"> --}}


{{-- Section Profil sekolah --}}
<div id="profile" class="">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg text-center">
                   <h1 class="font-weight-bold pb-5">Sejarah Berdirinya PAUD</h1>
                   <h5 class="text-justify font-weight-light" style="line-height: 1.5">
                    <span class="ml-5">PAUD</span> Smart Kids School merupakan lembaga pendidikan yang bernuansa alam yang didirikan oleh Yayasan Amaliyah, yang beralamat di Jalan AMD No. 21 Batoh, Kecamatan Lueng Bata, Banda Aceh. Sekolah PAUD yang bernuansa alam ini merupakan sekolah alam yang pertama sekali didirikan di Banda Aceh, salah satu konsep atau metode belajar mengajar yang digunakan adalah melalui pemberian stimulasi pendidikan kepada anak dengan pengamatan langsung pada objek yang diajarkan, guna untuk mengembangkan aspek-aspek yang terdapat pada pendidikan serta memberikan pengetahuan dan penyegaran kepada anak didik untuk dapat mencintai alam dan pencipta-Nya.

                   </h5>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-4 text-center">
                <h1 class="font-weight-bold pb-3">Visi</h1>
                <h5 class="mt-3 text-small font-weight-light">Be A Smart Student</h5>
            </div>
            <div class="col-lg-8">
                <h1 class="font-weight-bold text-center pb-3">Misi</h1>
                <div class="container ml-5">
                    <h5 class="mt-3 text-small font-weight-light text-justify">1. Menciptakan suasana bermain yang smart.</h5>
                    <h5 class="mt-3 text-small font-weight-light text-justify">2. Menanamkan cara belajar yang smart kepada anak dengan mengusung konsep alam terbuka mengedepankan spiritual, sosial budaya, bahasa dan teknologi.</h5>
                    <h5 class="mt-3 text-small font-weight-light text-justify">3. Mencetak generasi yang unggul sesuai dengan bakat dan minat anak serta berakhlak mulia sejak usia dini.</h5>
                    <h5 class="mt-3 text-small font-weight-light text-justify">4. Memberikan pelayanan yang prima (efektif, efisien, dan transparan) kepada anak serta orang tua.</h5>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Section program --}}
<div class="my-section">
    <div class="container">
        <h1 class="font-weight-bold pb-5 text-center">Program Pendidikan</h1>

        <div class="row">
            <div class="col-lg-4">
                <div class="" style="width: 18rem;">
                    <img width="100" height="100" src="{{ asset('images/toddler.svg') }}" class="card-img-top py-3" alt="Toddler">
                    <div class="card-body">
                        <h3 class="card-text text-center">Toodler</h3>
                        <p class="card-text text-center">Usia 3 Bulan - 3 Tahun</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="" style="width: 18rem;">
                    <img width="100" height="100" src="{{ asset('images/toddler_2.svg') }}" class="card-img-top py-3" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center">Play Group</h3>
                        <p class="card-text text-center">Usia 3 Tahun - 4 Tahun</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="" style="width: 18rem;">
                    <img width="100" height="100" src="{{ asset('images/boy.svg') }}" class="card-img-top py-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-text text-center">Taman Kanak-kanak A dan B</h5>
                        <p class="card-text text-center">Usia 4 Tahun - 7 Tahun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Section Fasilitas --}}
<div class="container py-5 mt-5">
    <h1 class="text-center font-weight-bold">Beragam Fasilitas Terbaik</h1>
    <div class="text-center font-weight-light">Menyediakan fasilitas untuk mendukung proses belajar mengajar yang
        nyaman dan berkualitas</div>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/forest.svg') }}" alt="green school">
                <h3 class="my-2">Green School</h3>
                <p class="mx-auto" style="max-width: 75%">Sekolah dibangun dengan lingkungan yang banyak tumbuhan dan bernuansa alam agar udara fresh.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/ac.svg') }}" alt="ac">
                <h3 class="my-2">Full AC</h3>
                <p class="mx-auto" style="max-width: 75%">Seluruh ruangan dilengkapi AC agar proses belajar menjadi nyaman.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/dice.svg') }}" alt="dice">
                <h3 class="my-2">Mainan yang Edukatif</h3>
                <p class="mx-auto" style="max-width: 75%">Kami memberikan pembelajaran yang menyenangkan bagi murid.</p>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/fishpond.svg') }}" alt="fishpond">
                <h3 class="my-2">Kolam Ikan</h3>
                <p class="mx-auto" style="max-width: 75%">Terdapat kolam ikan agar murid dapat bermain dengan ikan.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/basketcourt.svg') }}" alt="basketcourt">
                <h3 class="my-2">Lapangan Basket Mini</h3>
                <p class="mx-auto" style="max-width: 75%">Terdapat lapangan basket mini untuk murid berolahraga.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/teacher.svg') }}" alt="teacher">
                <h3 class="my-2">Tenaga Pengajar Terbaik</h3>
                <p class="mx-auto" style="max-width: 75%">Seluruh tenaga pengajar berkompeten dan berpengalaman di bidangnya.</p>
            </div>
        </div>
    </div>

</div>

@endsection

@extends('layout/main')
@section('title', 'Beranda - Smart Kids School')

@section('container')

<style>
    .my-section {
        margin: 6rem 0;
    }

    @media (max-width: 400px) {
        .carousel-img {
            height: 300px;
        }
    }

    @media (max-width: 400px) {
        h5,
        span {
            font-size: 1rem;
        }
    }

    @media (max-width: 400px){
        #map {
            width: 50px;
            height: 50px;
            margin: 0 0 100px 0;
        }
    }

</style>

{{-- Carousel --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carousel-img">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('uploads/slides/car1.jpeg') }}" alt="" height="500">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('uploads/slides/car2.jpeg') }}" alt="" height="500">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('uploads/slides/car3.jpeg') }}" alt="" height="500">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- End Carousel --}}


{{-- Section slogan PAUD --}}
<div class="my-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="font-weight-bold" style="color:#197163">Be A Smart Student With Us.</h1>
                <h5 class="mt-3 text-small font-weight-light">Mencetak generasi unggul dengan menanamkan cara belajar
                    yang smart</h5>
                <div class="d-flex mt-5">
                    <a href="#profile" class="btn mr-2"
                        style="flex-shrink: 0; border-color: #197163; color :#197163">Selengkapnya</a>
                    <a target="_blank" href="https://wa.me/6282361143553" class="btn text-light"
                        style="flex-shrink: 0; background-color: #197163;"><i class="fab fa-whatsapp mr-2"></i>Kontak
                        Kami</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img class="rounded float-right" width="80%" src="{{ asset('uploads/slides/school.png') }}" alt=""
                    style="margin-top: -40px;">
            </div>
        </div>
    </div>
</div>

{{-- Section Profil sekolah --}}
<div id="profile" class="">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md text-center">
                <h1 class="font-weight-bold pb-5" style="color:#197163">Sejarah Berdirinya PAUD</h1>
                <h5 class="text-justify font-weight-light text-sejarah" style="line-height: 1.5;">
                    <span class="ml-5">PAUD</span> Smart Kids School merupakan lembaga pendidikan yang bernuansa alam
                    yang didirikan oleh Yayasan Amaliyah, yang beralamat di Jalan AMD No. 21 Batoh, Kecamatan Lueng
                    Bata, Banda Aceh. Sekolah PAUD yang bernuansa alam ini merupakan sekolah alam yang pertama sekali
                    didirikan di Banda Aceh, salah satu konsep atau metode belajar mengajar yang digunakan adalah
                    melalui pemberian stimulasi pendidikan kepada anak dengan pengamatan langsung pada objek yang
                    diajarkan, guna untuk mengembangkan aspek-aspek yang terdapat pada pendidikan serta memberikan
                    pengetahuan dan penyegaran kepada anak didik untuk dapat mencintai alam dan pencipta-Nya.

                </h5>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md text-center">
                <h1 class="font-weight-bold pb-3" style="color:#197163">Visi</h1>
                <h5 class="mt-3 text-small font-weight-light">Be A Smart Student</h5>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md col-sm text-center">
                <h1 class="font-weight-bold pb-3" style="color:#197163">Misi</h1>
                <h5 class="mt-3 text-small font-weight-light text-left">1. Menciptakan suasana bermain yang
                    smart.</h5>
                <h5 class="mt-3 text-small font-weight-light text-left">2. Menanamkan cara belajar yang smart
                    kepada anak dengan mengusung konsep alam terbuka mengedepankan spiritual, sosial budaya, bahasa
                    dan teknologi.</h5>
                <h5 class="mt-3 text-small font-weight-light text-left">3. Mencetak generasi yang unggul sesuai
                    dengan bakat dan minat anak serta berakhlak mulia sejak usia dini.</h5>
                <h5 class="mt-3 text-small font-weight-light text-left">4. Memberikan pelayanan yang prima
                    (efektif, efisien, dan transparan) kepada anak serta orang tua.</h5>
            </div>
        </div>

    </div>
</div>

{{-- Section program --}}
<div class="my-section">
    <div class="container">
        <h1 class="font-weight-bold pb-5 text-center" style="color:#197163">Program Pendidikan</h1>

        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex flex-column text-center">
                    <img width="100" height="100" src="{{ asset('images/toddler.svg') }}" class="card-img-top py-3"
                        alt="Toddler">
                    <div class="card-body">
                        <h3 class="card-text text-center" style="color:#197163">Toodler</h3>
                        <p class="card-text text-center">Usia 3 Bulan - 3 Tahun</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column text-center">
                    <img width="100" height="100" src="{{ asset('images/toddler_2.svg') }}" class="card-img-top py-3"
                        alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center" style="color:#197163">Play Group</h3>
                        <p class="card-text text-center">Usia 3 Tahun - 4 Tahun</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column text-center">
                    <img width="100" height="100" src="{{ asset('images/boy.svg') }}" class="card-img-top py-3"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-text text-center" style="color:#197163">Taman Kanak-kanak A dan B</h5>
                        <p class="card-text text-center">Usia 4 Tahun - 7 Tahun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Section Fasilitas --}}
<div class="container py-5 mt-5">
    <h1 class="text-center font-weight-bold" style="color:#197163">Beragam Fasilitas Terbaik</h1>
    <div class="text-center font-weight-light">Menyediakan fasilitas untuk mendukung proses belajar mengajar yang
        nyaman dan berkualitas</div>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/forest.svg') }}"
                    alt="green school">
                <h3 class="my-2" style="color:#197163">Green School</h3>
                <p class="mx-auto" style="max-width: 75%">Sekolah dibangun dengan lingkungan yang
                    bernuansa alam dan sejuk.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/ac.svg') }}" alt="ac">
                <h3 class="my-2" style="color:#197163">Full AC</h3>
                <p class="mx-auto" style="max-width: 75%">Seluruh ruangan dilengkapi AC agar proses belajar menjadi
                    nyaman.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/dice.svg') }}" alt="dice">
                <h3 class="my-2" style="color:#197163">Mainan yang Edukatif</h3>
                <p class="mx-auto" style="max-width: 75%">Memberikan pembelajaran yang menyenangkan bagi murid.</p>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/fishpond.svg') }}"
                    alt="fishpond">
                <h3 class="my-2" style="color:#197163">Kolam Ikan</h3>
                <p class="mx-auto" style="max-width: 75%">Terdapat kolam ikan agar murid dapat bermain dengan ikan.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/basketcourt.svg') }}"
                    alt="basketcourt">
                <h3 class="my-2" style="color:#197163">Lapangan Basket Mini</h3>
                <p class="mx-auto" style="max-width: 75%">Terdapat lapangan basket mini untuk murid berolahraga.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column text-center">
                <img class="card-img-top" width="100" height="100" src="{{ asset('images/teacher.svg') }}"
                    alt="teacher">
                <h3 class="my-2" style="color:#197163">Tenaga Pengajar Terbaik</h3>
                <p class="mx-auto" style="max-width: 75%">Seluruh tenaga pengajar berkompeten di
                    bidangnya.</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-3">
    <h1 class="text-center font-weight-bold py-4" style="color:#197163">Lokasi PAUD</h1>
    <div id='map' style='width: 100%; height: 400px;'></div>
    <script>
        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZGFmZnJhemFuIiwiYSI6ImNrajFvdzJmcDFxdTYycG5yM3h1cXZ6aXIifQ.Au6KpW65herBsE7zQkLzWQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
            center: [95.33201177807732, 5.532579017031774], // starting position [lng, lat]
            zoom: 16 // starting zoom
        });

        var marker = new mapboxgl.Marker()
            .setLngLat([95.33201177807732, 5.532579017031774])
            .setPopup(new mapboxgl.Popup({ offset: [0, -15] }) //add popups
                .setHTML('<h5>Smart Kids School</h5>'))
            .addTo(map);
    </script>
</div>


@endsection

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>@yield('title')</title>

    <style>
        th,
        td,
        li,
        p,
        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
        }

        a {
            color: black;
        }

        html {
            scroll-behavior: smooth;
        }

        .custom-shape-divider-top-1605012693 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

    </style>
</head>

<body class="bg-light">
    @yield('container')

    <footer id="footer" class="py-5 " style="background-color: #197163; position: relative;">
        <div class="text-light custom-shape-divider-top-1605012693">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container" style="padding-top: 10rem ">
            <div class="row text-light mt-5">
                <div class="col-lg-6">
                    <h5>&copy; Smart Kids School <script>
                            document.write(new Date().getFullYear())

                        </script>. All Rights Reserved. </h5>
                    <div class="mt-4">
                        <p class="mb-0">NPSN 69981158 </p>
                        <p class="mb-0">Jam Kerja: Senin-Jumat (08.00 - 16.00 WIB)</p>
                        <p class="mb-0">Lokasi: Jl. AMD, No. 021 Batoh, Kec. Lueng Bata, Kota Banda Aceh</p>
                        <p class="mb-0">Kontak: 0853-2390-1499</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <h5>Tentang Kami</h5>
                    <div class="mt-4">
                        <ul class="" style="padding:0; list-style:none;">
                            <li class="mb-0"><a href="{{ url('/staff') }}" class="text-light"
                                    style="text-decoration:none;">Staff & Dewan Guru</a></li>
                            <li class="mb-0"><a href="{{ url('/fasilitas') }}" class="text-light"
                                    style="text-decoration:none;">Fasilitas Sekolah</a></li>
                            <li class="mb-0"><a href="{{ url('/kegiatan') }}" class="text-light"
                                    style="text-decoration:none;">Kegiatan Sekolah</a></li>
                            <li class="mb-0"><a href="{{ url('/galeri') }}" class="text-light"
                                    style="text-decoration:none;">Galeri Sekolah</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-3">
                    <h5>Sosial Media</h5>
                    <ul class="mt-4" style="padding: 0;list-style-type: none;">
                        <li class="mb-2">
                            <a href="{{url('//instagram.com/smart_kids_school')}}" class="text-light" target="_blank">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>

                                Smart Kids School
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-light">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24"
                                    height="24" viewBox="0 0 24 24">><path
                                        d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404 c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814 c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763 C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z">
                                    </path></svg>
                                Smart Kids School
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>


    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>

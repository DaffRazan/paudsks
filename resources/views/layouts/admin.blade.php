<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('uploads/slides/icon.jpg') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('adm-assets/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('adm-assets/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('adm-assets/assets/css/argon.css?v=1.2.0')}}" type="text/css">

    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center py-2 px-2">
                <p class="navbar-brand rounded-pill text-light text-sm font-weight-bold" style="background-color: #5e72e4">
                    Operator Smart Kids School
                </p>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/staff')) ? 'active' : '' }}"
                                href="{{ url('/admin/staff') }}">
                                <i class="ni ni-circle-08" style="color: #5e72e4;"></i>
                                <span class="nav-link-text">Manage Staff</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/fasilitas')) ? 'active' : '' }}"
                                href="{{ url('/admin/fasilitas') }}">
                                <i class="ni ni-books" style="color: #5e72e4;"></i>
                                <span class="nav-link-text">Manage Fasilitas</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/kegiatan')) ? 'active' : '' }}"
                                href="{{ url('/admin/kegiatan') }}">
                                <i class="ni ni-single-copy-04" style="color: #5e72e4;"></i>
                                <span class="nav-link-text">Manage Kegiatan</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/galeri')) ? 'active' : '' }}"
                                href="{{ url('/admin/galeri') }}">
                                <i class="ni ni-album-2" style="color: #5e72e4;"></i>
                                <span class="nav-link-text">Manage Galeri</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-collapse-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        {{-- ADMIN DROPDOWN MENU --}}
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{asset('adm-assets/assets/img/theme/avatar.png')}}">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }} </span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome {{ Auth::user()->name }}</h6>
                                </div>
                                <div class="dropdown-divider"></div>

                                <a href="{{ url("/change-password") }}" class="dropdown-item">
                                    <i class="ni ni-key-25"></i>
                                    <span>Ubah Password</span>
                                </a>


                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">

                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container-fluid mt-6">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer pt-0 pl-4">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2020 <a href="{{ url('/') }}" class="font-weight-bold ml-1">Smart Kids School</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('adm-assets/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('adm-assets/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adm-assets/assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('adm-assets/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('adm-assets/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

    <!-- Argon JS -->
    <script src="{{asset('adm-assets/assets/js/argon.js?v=1.2.0')}}"></script>

</body>

</html>

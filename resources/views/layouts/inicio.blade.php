<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tony - Portafolio Personal</title>
    <meta name="description" content="Bako - Personal Portfolio & Resume HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="outer">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <!-- mobile header -->
        <div class="mobile-header py-2 px-3 mt-4">
            <button class="menu-icon mr-2">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/about.png') }}" class="img-fluid rounded-circle" alt="Bako Doe" /></a>
            <a href="{{ url('/') }}" class="site-title dot ml-2">Antonio Tomas</a>
        </div>

        <!-- header -->
        <header class="left float-left shadow-dark" id="header">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="header-inner d-flex align-items-start flex-column">
                <a href="{{ url('/') }}"><img src="{{ asset('img/about.png') }}"  class="img-fluid rounded-circle w-50" alt="Bako Doe" /></a>
                <a href="{{ url('/') }}" class="site-title dot mt-3">Antonio Tomas</a>
                <span class="site-slogan">Desarrollador Web</span>

                <!-- navigation menu -->
                <nav>
                    <ul class="vertical-menu scrollspy">
                        <li><a href="{{ route('inicio') }}#home" class="active"><i class="icon-home"></i>Inicio</a></li>
                        <li><a href="{{ route('inicio') }}#about"><i class="icon-user"></i>Sobre mi</a></li>
                        <li><a href="{{ route('inicio') }}#services"><i class="icon-bulb"></i>Servicios</a></li>
                        <li><a href="{{ route('inicio') }}#resume"><i class="icon-graduation"></i>Experiencia</a></li>
                        <li><a href="{{ route('inicio') }}#works"><i class="icon-grid"></i>Portafolio</a></li>
                        {{-- <li><a href="{{ route('inicio') }}#blog"><i class="icon-pencil"></i>Blog</a></li> --}}
                        <li><a href="{{ route('inicio') }}#contact"><i class="icon-phone"></i>Contacto</a></li>
                    </ul>
                </nav>

                <!-- footer -->
                <div class="footer mt-auto">

                    <!-- social icons -->
                   {{--  <ul class="social-icons list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>

                    <!-- copyright -->
                    <span class="copyright">© 2022 Bako Template</span> --}}
                </div>
            </div>
        </header>

        <!-- main content area -->
        <main class="content float-right">
            @yield('content')
        </main>
    </div>
    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/infinite-scroll.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>

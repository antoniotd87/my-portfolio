<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e151828a19.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/TONY.png') }}" height="40" alt="" />
                </a>
                <div class="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('projects') }}">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Acerca de mi</a>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        <div class="container-fluid">
            <div class="container contact py-5">
                <div class="d-flex flex-column align-items-center text-center">
                    <div class="title mb-4">
                        <p class="text-blue-800">Yo estoy listo, ¿y tú?</p>
                        <h2 class="text-blue-800 font-weight-bold">Creemeos algo nuevo</h2>
                    </div>
                    <div class="buttons">
                        <router-link :to="{ name: 'contactme' }">
                            <a href="#" class="btn btn-light text-blue-800">Trabajemos Juntos</a>
                        </router-link>
                        <a href="#" class="btn btn-link text-blue-700">Mira mis otros proyectos</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex my-5 justify-content-between align-items-center">
                    <div class="redes">
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-whatsapp fa-2x"></i>
                        <i class="fab fa-linkedin fa-2x"></i>
                    </div>
                    <div class="info-contact">
                        <p>Contactame en:</p>
                        <span><i class="fas fa-phone-alt"></i> 712 173 5117</span>
                        <span><i class="fas fa-envelope"></i> antoniotd87@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .container.contact {
            background-image: url("/img/banner.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            border-radius: 10px;
            margin-top: 4rem;
        }

        .btn-link:hover {
            text-decoration: none;
        }

        .latest-project {
            position: relative;
        }

        .latest-project p {
            opacity: 0.9;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 0;
            margin: 0.4em 1rem;
            padding: 0.25rem;
            border-radius: 6px;
        }

        .latest-project p span {
            opacity: 1;
            color: white;
            font-weight: bold;
        }

        .container-fluid.banner {
            background-image: url("/img/banner.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .btn-link:hover {
            text-decoration: none;
        }

        .latest-project {
            position: relative;
            max-height: 300px;
            overflow: hidden;
            border-radius: 15px;
        }

        .latest-project p {
            opacity: 0.9;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 0;
            margin: 0.4em 1rem;
            padding: 0.25rem;
            border-radius: 6px;
        }

        .latest-project p span {
            opacity: 1;
            color: white;
            font-weight: bold;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 0;
            padding: 1rem;
        }

        .icon-control {
            padding: 0.8rem;
            border-radius: 50%;
        }

        .project {
            max-height: 300px;
            overflow: hidden;
            border-radius: 15px;
        }

        .img-profile-content {
            position: relative;
        }

        .img-profile {
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .img-profile img {
            max-width: 80%;
        }

        .fondo::after {
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 20px;
        }

    </style>
</body>

</html>

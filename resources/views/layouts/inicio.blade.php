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
    @yield('content')

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

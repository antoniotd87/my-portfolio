@extends('layouts.inicio')

@section('content')
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
            <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Bako Doe" /></a>
            <a href="index.html" class="site-title dot ml-2">Antonio Tomas</a>
        </div>

        <!-- header -->
        <header class="left float-left shadow-dark" id="header">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="header-inner d-flex align-items-start flex-column">
                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="Bako Doe" /></a>
                <a href="index.html" class="site-title dot mt-3">Antonio Tomas</a>
                <span class="site-slogan">Desarrollador Web</span>

                <!-- navigation menu -->
                <nav>
                    <ul class="vertical-menu scrollspy">
                        <li><a href="#home" class="active"><i class="icon-home"></i>Inicio</a></li>
                        <li><a href="#about"><i class="icon-user"></i>Sobre mi</a></li>
                        <li><a href="#services"><i class="icon-bulb"></i>Servicios</a></li>
                        <li><a href="#resume"><i class="icon-graduation"></i>Experiencia</a></li>
                        <li><a href="#works"><i class="icon-grid"></i>Portafolio</a></li>
                        <li><a href="#blog"><i class="icon-pencil"></i>Blog</a></li>
                        <li><a href="#contact"><i class="icon-phone"></i>Contacto</a></li>
                    </ul>
                </nav>

                <!-- footer -->
                <div class="footer mt-auto">

                    <!-- social icons -->
                    <ul class="social-icons list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>

                    <!-- copyright -->
                    <span class="copyright">© 2022 Bako Template</span>
                </div>
            </div>
        </header>

        <!-- main content area -->
        <main class="content float-right">

            <!-- section hero -->
            <section class="hero background parallax shadow-dark d-flex align-items-center" id="home"
                data-image-src="{{ asset('img/hero.jpg') }}">
                <div class="cta mx-auto mt-2">
                    <h1 class="mt-0 mb-4">Soy Tony Tomas<span class="dot"></span></h1>
                    <p class="mb-4">Un programador aun no titulado &#128549; con las ganas de mejorar cada
                        software que
                        se encuentre.</p>
                    <a href="#" class="btn btn-default btn-lg mr-3"><i class="icon-grid"></i>Ve mis Proyectos</a>
                    <div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
                    <a href="#" class="btn btn-border-light btn-lg"><i class="icon-envelope"></i>Contactame</a>
                </div>
                <div class="overlay"></div>
            </section>

            <!-- section about -->
            <section id="about" class="shadow-blue white-bg padding">
                <h3 class="section-title">Sobre mi</h3>
                <div class="spacer" data-height="80"></div>

                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('img/about.png') }}" alt="about" />
                    </div>
                    <div class="col-md-9">
                        <h2 class="mt-4 mt-md-0 mb-4">Hola,</h2>
                        <p class="mb-0">Soy Antonio Tomas, un desarrollador web con mas de un año de experiencia
                            en el
                            diseño y desarrollo de sistemas web, tambien he trabajado en un poco en Wordpress.</p>
                        <div class="row my-4">
                            <div class="col-md-6">
                                <p class="mb-0">Fecha de Nacimiento: <span
                                        class="text-dark">23/11/1999</span></p>
                            </div>
                            <div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
                                <p class="mb-0">Email: <span class="text-dark">antoniotd87@gmail.com</span>
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default mr-3"><i class="icon-cloud-download"></i>Descarga mi CV</a>
                        <a href="#" class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Contactame</a>
                    </div>
                </div>
            </section>

            <!-- section skills -->
            <section id="skills" class="shadow-blue white-bg padding">
                <h3 class="section-title">Mis conocimientos</h3>
                <div class="spacer" data-height="80"></div>

                <p class="mb-0">He tenido la experiencia de trabajar con tecnologias de desarrollo web para la
                    parte del
                    backend, y actualmente estoy reforzando mis conocimientos para frontend.</p>
                <p class="my-1">A continuacion menciono que me han ayudado a elaborar mis proyectos</p>
                <div class="row mt-5">

                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Laravel</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">PHP</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Livewire</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">CodeIgniter</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">MySQL</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">GIT</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">HTML</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">CSS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">JavaScript</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Shell de Linux</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Vue.js</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">React.js</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Node.js</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- skill item -->
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">Flutter</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section facts -->
            <section id="facts" class="shadow-dark color-white background parallax padding-50"
                data-image-src="{{ asset('img/background-1.jpg') }}">

                <div class="row relative z-1">
                    <div class="col-md-3 col-sm-6">
                        <!-- fact item -->
                        <div class="fact-item text-center">
                            <i class="icon-like icon-circle"></i>
                            <h2 class="count">10</h2>
                            <span>Proyectos terminados</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- fact item -->
                        <div class="fact-item text-center">
                            <i class="icon-cup icon-circle"></i>
                            <h2 class="count">389</h2>
                            <span>Tazas de cafe</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- fact item -->
                        <div class="fact-item text-center">
                            <i class="icon-emotsmile icon-circle"></i>
                            <h2 class="count">1</h2>
                            <span>Años de experiencia</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- fact item -->
                        <div class="fact-item text-center">
                            <i class="icon-trophy icon-circle"></i>
                            <h2 class="count">50</h2>
                            <span>Proyectos de cursos</span>
                        </div>
                    </div>
                </div>

                <div class="overlay"></div>

            </section>

            <!-- section services -->
            <section id="services" class="shadow-blue white-bg padding">
                <h3 class="section-title">Que puedo hacer</h3>
                <div class="spacer" data-height="80"></div>

                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <!-- service item -->
                        <div class="service-item text-center">
                            <i class="icon-globe icon-simple"></i>
                            <h4 class="my-3">Desarrollo de sistemas</h4>
                        </div>
                        <div class="spacer" data-height="20"></div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- service item -->
                        <div class="service-item text-center">
                            <i class="icon-chemistry icon-simple"></i>
                            <h4 class="my-3">Diseño de apps</h4>
                        </div>
                        <div class="spacer" data-height="20"></div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- service item -->
                        <div class="service-item text-center">
                            <i class="icon-directions icon-simple"></i>
                            <h4 class="my-3">Arquitectura de software</h4>
                        </div>
                        <div class="spacer" data-height="20"></div>
                    </div>

                </div>
            </section>

            <!-- section experience -->
            <section id="resume" class="shadow-blue white-bg padding">
                <h3 class="section-title">Experiencia</h3>
                <div class="spacer" data-height="80"></div>

                <!-- timeline -->
                <div class="timeline">
                    <div class="entry">
                        <div class="title">
                            <span>2021 - Actualidad</span>
                        </div>
                        <div class="body">
                            <h4 class="mt-0">Promo Life</h4>
                            <p>He tenido la oportunidad de liberar a produccion: Un sistema de encuestas, un Help Desk,
                                una app E-learning, un cotizador de productos, y un catalogo de productos. Esto con
                                ayuda de un equipo confiable y comprometido.</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">
                            <span>2020 - 2021</span>
                        </div>
                        <div class="body">
                            <h4 class="mt-0">Tecnologico de Estudios Superiores de San Felipe del Progreso</h4>
                            <p>En mis practicas profesionales, tuve la oportunidad de colaborar en el desarrollo de dos
                                sistemas web para el area de vunculacion de la institucion.</p>
                        </div>
                    </div>
                    <span class="timeline-line"></span>
                </div>
            </section>

            <!-- section works -->
            <section id="works" class="shadow-blue white-bg padding">
                <h3 class="section-title">Mis Proyectos</h3>
                <div class="spacer" data-height="80"></div>

                <!-- portfolio filter (desktop) -->
                <ul class="portfolio-filter list-inline">
                    <li class="current list-inline-item" data-filter="*">Todos</li>
                    <li class="list-inline-item" data-filter=".branding">Trabajo</li>
                    <li class="list-inline-item" data-filter=".creative">Personales</li>
                    <li class="list-inline-item" data-filter=".design">Cursos</li>
                </ul>

                <!-- portfolio filter (mobile) -->
                <div class="pf-filter-wrapper mb-4">
                    <select class="portfolio-filter-mobile">
                        <option value="*">Todos</option>
                        <option value=".creative">Trabajo</option>
                        <option value=".video">Personales</option>
                        <option value=".design">Cursos</option>
                    </select>
                </div>

                <!-- portolio wrapper -->
                <div class="row portfolio-wrapper">
                    @foreach ($projects as $project)
                        <!-- portfolio item -->
                        <div class="col-md-4 col-sm-6 grid-item video">
                            <a href="{{ route('show.project', ['project' => $project->id]) }}">
                                <div class="portfolio-item">
                                    <div class="details">
                                        <h4 class="title">{{ $project->name }}</h4>
                                        <span class="term">Art, Creative</span>
                                    </div>
                                    <span class="plus-icon">+</span>
                                    <div class="thumb">
                                        <img src="{{ asset('storage/'.$project->image) }}" alt="Portfolio-title" />
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item creative design">
                        <a href="work-single.html">
                            <div class="portfolio-item">
                                <div class="details">
                                    <h4 class="title">Apple USB</h4>
                                    <span class="term">Creative, Design</span>
                                </div>
                                <span class="plus-icon">+</span>
                                <div class="thumb">
                                    <img src="{{ asset('img/portfolio/2.jpg') }}" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item branding">
                        <a href="work-single.html">
                            <div class="portfolio-item">
                                <div class="details">
                                    <h4 class="title">Work Space</h4>
                                    <span class="term">Branding</span>
                                </div>
                                <span class="plus-icon">+</span>
                                <div class="thumb">
                                    <img src="{{ asset('img/portfolio/3.jpg') }}" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item creative">
                        <a href="work-single.html">
                            <div class="portfolio-item">
                                <div class="details">
                                    <h4 class="title">Creative Bulb</h4>
                                    <span class="term">Creative</span>
                                </div>
                                <span class="plus-icon">+</span>
                                <div class="thumb">
                                    <img src="{{ asset('img/portfolio/4.jpg') }}" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item video branding">
                        <a href="work-single.html">
                            <div class="portfolio-item">
                                <div class="details">
                                    <h4 class="title">iPhone 8</h4>
                                    <span class="term">Art, Branding</span>
                                </div>
                                <span class="plus-icon">+</span>
                                <div class="thumb">
                                    <img src="{{ asset('img/portfolio/5.jpg') }}" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item creative design">
                        <a href="work-single.html">
                            <div class="portfolio-item">
                                <div class="details">
                                    <h4 class="title">Minimal Art</h4>
                                    <span class="term">Design, Creative</span>
                                </div>
                                <span class="plus-icon">+</span>
                                <div class="thumb">
                                    <img src="{{ asset('img/portfolio/6.jpg') }}" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- more button -->
                <div class="load-more text-center mt-4">
                    <a href="javascript:" class="btn btn-default"><i class="fas fa-circle-notch"></i> Load more</a>
                    <!-- numbered pagination (hidden for infinite scroll) -->
                    <ul class="portfolio-pagination list-inline d-none">
                        <li class="list-inline-item">1</li>
                        <li class="list-inline-item"><a href="works-2.html">2</a></li>
                    </ul>
                </div>
            </section>

            <!-- section contact -->
            <section id="contact" class="shadow-blue white-bg padding">
                <h3 class="section-title">Contactame</h3>
                <div class="spacer" data-height="80"></div>

                <div class="row">

                    <div class="col-md-4 mb-4 mb-md-0">
                        <!-- contact info -->
                        <div class="contact-info mb-5">
                            <i class="icon-phone"></i>
                            <div class="details">
                                <h5>Telefono</h5>
                                <span>+52 712 173 51 17</span>
                            </div>
                        </div>
                        <div class="contact-info mb-5">
                            <i class="icon-envelope"></i>
                            <div class="details">
                                <h5>Email</h5>
                                <span>antoniotd87@gmail.com</span>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </main>

    </div>
@endsection

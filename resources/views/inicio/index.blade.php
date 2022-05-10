@extends('layouts.inicio')

@section('content')
    <!-- section hero -->
    <section class="hero background parallax shadow-dark d-flex align-items-center" id="home"
        data-image-src="{{ asset('img/hero.jpg') }}">
        <div class="cta mx-auto mt-2">
            <h1 class="mt-0 mb-4">Soy Tony Tomas<span class="dot"></span></h1>
            <p class="mb-4">Un programador aun no titulado &#128549; con las ganas de mejorar cada
                software que
                se encuentre.</p>
            <a href="#works" class="btn btn-default btn-lg mr-3"><i class="icon-grid"></i>Ve mis Proyectos</a>
            <div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
            <a href="#contact" class="btn btn-border-light btn-lg"><i class="icon-envelope"></i>Contactame</a>
        </div>
        <div class="overlay"></div>
    </section>

    <!-- section about -->
    <section id="about" class="shadow-blue white-bg padding">
        <h3 class="section-title">Sobre mi</h3>
        <div class="spacer" data-height="80"></div>

        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('img/about.png') }}" class="img-fluid rounded-circle" alt="about" />
            </div>
            <div class="col-md-9">
                <h2 class="mt-4 mt-md-0 mb-4">Hola,</h2>
                <p class="mb-0">Soy Antonio Tomas, un desarrollador web con mas de un año de experiencia
                    en el
                    diseño y desarrollo de sistemas web, tambien he trabajado en un poco en Wordpress.</p>
                <div class="row my-4">
                    <div class="col-md-6">
                        <p class="mb-0">Fecha de Nacimiento: <span class="text-dark">23/11/1999</span></p>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
                        <p class="mb-0">Email: <span class="text-dark">antoniotd87@gmail.com</span>
                        </p>
                    </div>
                </div>
                <a href="{{asset('cv/CV.pdf')}}" class="btn btn-default mr-3" download="CV Antonio Tomas Dominguez.pdf"><i class="icon-cloud-download"></i>Descarga mi CV</a>
                <a href="#contact" class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Contactame</a>
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
        <p class="my-1">A continuacion menciono las herramientas que me han ayudado a elaborar mis proyectos</p>
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
                    <h2 class="count">12</h2>
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
                    <span>Abr-2021 - Actualidad</span>
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
                    <span>Abr-2020 - Ene-2021</span>
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
            @foreach ($categories as $item)
                <li class="list-inline-item" data-filter=".{{ $item->slug }}">{{ $item->name }}</li>
            @endforeach
        </ul>

        <!-- portfolio filter (mobile) -->
        <div class="pf-filter-wrapper mb-4">
            <select class="portfolio-filter-mobile">
                <option value="*">Todos</option>
                @foreach ($categories as $item)
                    <option value=".{{ $item->slug }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- portolio wrapper -->
        <div class="row portfolio-wrapper">
            @foreach ($projects as $project)
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item {{ $project->category->slug }}">
                    <a href="{{ route('show.projectFront', ['project' => $project->id]) }}">
                        <div class="portfolio-item">
                            <div class="details">
                                <h4 class="title">{{ $project->name }}</h4>
                                <span class="term">{{ $project->description_corta }}</span>
                            </div>
                            <span class="plus-icon">+</span>
                            <div class="thumb">
                                <img src="{{ asset('storage/projects/' . explode(',', $project->images)[0]) }}"
                                    alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <!-- more button -->
        <div class="text-center mt-4">
            <a href="{{ route('show.projects') }}" class="btn btn-default"> Ver todos</a>
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
@endsection

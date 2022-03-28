@extends('layouts.inicio')

@section('content')
    <div class="container-fluid banner">
        <div class="container py-5">
            <div class="d-flex flex-column align-items-center text-center my-3 py-5">
                <div class="title mb-4">
                    <h2 class="text-blue-800 font-weight-bold">Conoce un poco mas sobre mi</h2>
                </div>
                <div class="buttons">
                    <a href="#" class="btn btn-light text-blue-800">Trabajemos Juntos</a>
                    <a href="#" class="btn btn-link text-blue-700">Mira mis otros proyectos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row mx-5 mt-5 pt-5">
                <div class="col-md-5 img-profile-content">
                    <div class="fondo"></div>
                    <div class="img-profile">
                        <img src="https://media-exp1.licdn.com/dms/image/D5603AQGR8bio9QyhAg/profile-displayphoto-shrink_800_800/0/1632182771117?e=1642636800&v=beta&t=DCZ6UaInhbFdCx-rnibTO3ADSvZYU-0bGBVo-wPXOWg"
                            alt="" srcset="" class="img-fluid rounded-circle" />
                    </div>
                </div>
                <div class="col-md-7 ">
                    <div class="bg-green-100 p-5 bg-opacity">
                        <div class="text">
                            <h4>Un poco sobre mi</h4>
                        </div>
                        <div class="info">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Perferendis reiciendis distinctio.
                            </p>
                            <p>
                                Iste odio ex commodi quaerat at magni explicabo saepe dolores
                                repudiandae quia obcaecati natus quae, doloribus excepturi porro
                                nostrum.
                            </p>
                            <a href="" class="btn btn-link p-0">Conoce mas sobre mi</a>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
                <div class="w-100 py-3"></div>
                <div class="col-md-7">
                    <div class="bg-yellow-100 p-5 bg-opacity">
                        <div class="text">
                            <h4>Tecnologias y herramientas</h4>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
                            reprehenderit corrupti laborum non voluptatum, laboriosam placeat
                            inventore, ad eos fuga quos quisquam, fugit dolor culpa officiis
                            sapiente ducimus alias veniam.
                        </p>
                        <div class="d-flex">
                            <div class="icon-tool p-1">
                                <div class="img-thumbnail">
                                    <img height="40" src="https://laravel.com/img/logomark.min.svg" alt="" />
                                </div>
                            </div>
                            <div class="icon-tool p-1">
                                <div class="img-thumbnail">
                                    <img height="40" src="https://vuejs.org/images/logo.svg" alt="" />
                                </div>
                            </div>
                            <div class="icon-tool p-1">
                                <div class="img-thumbnail">
                                    <img height="40" src="https://www.php.net/images/logos/php-logo.svg" alt="" />
                                </div>
                            </div>
                            <div class="icon-tool p-1">
                                <div class="img-thumbnail">
                                    <img height="40"
                                        src="data:image/png;base64,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"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 h-100">
                    <div class="bg-blue-100  p-5 bg-opacity">
                        <h4>Antecedenes y experiencia</h4>
                        <ul>
                            <li>Desarrollador web en Promo Life</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.webapp')

@section('assets')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

    <script type="text/javascript">
        $('.testimonio').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            dotsClass: 'slick-dots',
            infinite: true,
            responsive: [

                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection

@section('content')
    <div>
        <div id="carouselExampleSlidesOnly" class="slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item imgslide1 active"
                    style="background-image: url('{{ asset('images/assets/slider_foto1.png') }}')">
                    <div class="container">
                        <div class="carousel-caption text-start banner-home letra10">
                            <h1>Comienza tu</h1>
                            <p class="revo_inte">Revolución Interior</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-azulino">
            <div class="container">
                <div class="py-4 row text-white fw-se text-center home-icons">
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/assets/icono_desarrollo.png') }}"
                                    class="img-fluid" alt="desarrollo">
                            <p class="mb-0 ms-2 ms-md-3">Desarrollo</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-center pe-4 pe-md-0">
                            <img src="{{ asset('images/assets/icono_felicidad.png') }}"
                                    class="img-fluid" alt="felicidad">
                            <p class="mb-0 ms-2 ms-md-3">Felicidad</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/assets/icon_innovacion.png') }}"
                                    class="img-fluid" alt="innovacion">
                            <p class="mb-0 ms-2 ms-md-3">Innovación</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/assets/icon_contribucion.png') }}"
                                    class="img-fluid" alt="contribucion">
                            <p class="mb-0 ms-2 ms-md-3">Contribución</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container marketing pb-5">

            <div class="row featurette d-flex justify-content-center">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 cambio3">
                            <h2 class="featurette-heading letra5"><b>¿Qué es la Inteligencia Emocional?</b></h2>

                            <p class="lead" style="text-align: justify;"><b>Bruno Escobar,</b> fundador y director
                                de Allma -
                                Escuela
                                de Inteligencia Emocional nos cuenta principios fundamentales para iniciar un cambio
                                personal. En
                                ALLMA
                                capacitamos el talento y potencial a través de principios, valores, competencias vitales
                                para que
                                alcances tu éxito personal y profesional.</p>
                            <button class="btn_mx">Leer más</button>
                        </div>
                        <div class="col-md-7 cambio">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                                    dy=".3em">500x500</text>
                            </svg>
                            <!-- VIDEO -->
                        </div>
                    </div>
                </div>
            </div>
        </div><br><!-- /.container -->
        <div class="home-bg-reflex">
            <h2><b>#reflexionesdelallma</b></h2>
            <h2 class="text2">Blog global para el desarrollo de la Inteligencia Emocional</h2>
            <a class="btn position-relative" href="{{route('web.nosotros')}}">
                <img class="mano" src="{{ asset('images/home/icon_mano.png') }}" alt="">
                Entra aquí
            </a>
        </div><br><!-- /.container -->
        <div class="container pt-5 pb-5">
            <div class="text-center">
                <h2 class="fw-sesa">TESTIMONIOS</h2>
                <h3 class="flics"><b>FELICES</b></h3>
            </div>

            <div class="testimonio">
                <div class="card mb-3 custom-card text-white position-relative cardi1">
                    <span class="custom-img position-absolute top-0 start-100 translate-middle badge">
                        <img src="{{ asset('images/assets/comillas.png') }}" alt="quote">
                        <span class="visually-hidden">quote</span>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4 ima">
                            <img src="{{ asset('images/assets/janice_ortiz.png') }}" class="rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="text-center tarjeta">
                                <br>
                                <p class="card-text">Estuve buscando como entrenar a mis Distribuidores y brindarles
                                    herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                    profesionalmente como personalmente.
                                </p>
                                <br>
                                <h4 style="color: black; font-size: 18px;"><b>Janice Ortiz Clark</b></h4>
                                <h4 style="font-size: 20px;">TIENS Group</h4><br>
                                <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                    testimonio</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 custom-card text-white cardi2">
                    <span class="custom-img position-absolute top-0 start-100 translate-middle badge">
                        <img src="{{ asset('images/assets/comillas.png') }}" alt="quote">
                        <span class="visually-hidden">quote</span>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4 ima">
                            <img src="{{ asset('images/assets/foto_fredy.png') }}" class="rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="text-center tarjeta">
                                <br>
                                <p class="card-text">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                    conocer
                                    herramientas de autogestión y en Allma encontré alternativas para gestionar mis
                                    actividades, mis recursos y mis emociones.
                                </p>
                                <br>
                                <h4 style="color: black; font-size: 18px;"><b>Fredy Ochoa Del Aguila</b></h4>
                                <h4 style="font-size: 20px;">Actor</h4><br>
                                <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal2">Leer
                                    testimonio</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 custom-card text-white position-relative cardi1">
                    <span class="custom-img position-absolute top-0 start-100 translate-middle badge">
                        <img src="{{ asset('images/assets/comillas.png') }}" alt="quote">
                        <span class="visually-hidden">quote</span>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4 ima">
                            <img src="{{ asset('images/assets/janice_ortiz.png') }}" class="rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="text-center tarjeta">
                                <br>
                                <p class="card-text">Estuve buscando como entrenar a mis Distribuidores y brindarles
                                    herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                    profesionalmente como personalmente.
                                </p>
                                <br>
                                <h4 style="color: black; font-size: 18px;"><b>Janice Ortiz Clark</b></h4>
                                <h4 style="font-size: 20px;">TIENS Group</h4><br>
                                <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                    testimonio</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 custom-card text-white cardi2">
                    <span class="custom-img position-absolute top-0 start-100 translate-middle badge">
                        <img src="{{ asset('images/assets/comillas.png') }}" alt="quote">
                        <span class="visually-hidden">quote</span>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4 ima">
                            <img src="{{ asset('images/assets/foto_fredy.png') }}" class="rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="text-center tarjeta">
                                <br>
                                <p class="card-text">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                    conocer
                                    herramientas de autogestión y en Allma encontré alternativas para gestionar mis
                                    actividades, mis recursos y mis emociones.
                                </p>
                                <br>
                                <h4 style="color: black; font-size: 18px;"><b>Fredy Ochoa Del Aguila</b></h4>
                                <h4 style="font-size: 20px;">Actor</h4><br>
                                <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal2">Leer
                                    testimonio</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /.container -->

        <!-- Modal1 -->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content custom-modal">
                    <div class="modal-body p-0">
                        <div class="card modal-body text-white position-relative p-0">
                            <div class="row g-0">
                                <div class="col-md-4 ima2">
                                    <img src="{{ asset('images/assets/janice_ortiz.png') }}" class="rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8 card3">
                                    <div class="card-body text-center"><br>
                                        <h4 class="letra7"><b>Janice Ortiz Clark</b></h4>
                                        <h4 class="letra8">TIENS Group</h4><br><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <p class="card-text letra9">Estuve buscando como entrenar a mis Distribuidores y
                                            brindarles
                                            herramientas de negocio y de desarrollo personal para que puedan desarrollarse
                                            tanto
                                            profesionalmente como personalmente.
                                            <br><br>
                                            Lo que más me gustó fueron las dinámicas utilizadas en las sesiones, la
                                            capacidad didáctica el
                                            facilitador y el grato ambiente de las sesiones. Adicionalmente a ello todo me
                                            permitió avanzar
                                            en mi desarrollo profesional, ser más eficiente en mi autogestión y expandir mi
                                            red de
                                            contactos.
                                            <br><br>
                                            Se lo recomendaría a mi cualquier persona que busque expandir su visión y
                                            aprender a manejar
                                            mejor su estado emocional.
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal2 -->
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content custom-modal">
                    <div class="modal-body p-0">
                        <div class="card modal-body text-white position-relative p-0">
                            <div class="row g-0">
                                <div class="col-md-4 ima2">
                                    <img src="{{ asset('images/assets/foto_fredy.png') }}" class="rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8 card3">
                                    <div class="card-body text-center"><br>
                                        <h4 class="letra7"><b>Fredy Ochoa Del Aguila</b></h4>
                                        <h4 class="letra8">Actor</h4><br><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <p class="card-text letra9">Me encontraba en la búsqueda de mis áreas de mejora y
                                            de
                                            poder conocer
                                            herramientas de autogestión y en <b>Allma</b> encontré alternativas para
                                            gestionar mis
                                            actividades, mis recursos y mis emociones.
                                            <br><br>
                                            Lo que más me gustó fueron las dinámicas utilizadas en las sesiones, la
                                            capacidad didáctica el
                                            facilitador y el grato ambiente de las sesiones. Adicionalmente a ello todo me
                                            permitió avanzar
                                            en mi desarrollo profesional, ser más eficiente en mi autogestión y expandir mi
                                            red de
                                            contactos.
                                            <br><br>
                                            Se lo recomendaría a mi cualquier persona que busque expandir su visión y
                                            aprender a manejar
                                            mejor su estado emocional.

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button-wspp">
            <img class="wspp" src="{{ asset('images/assets/icon_whasapp.png') }}" alt="wspp">
        </button>
    </div>



@endsection

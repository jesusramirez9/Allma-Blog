@extends('layouts.webapp')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/slick.js') }}"></script>

    <script type="text/javascript">
        $('.testimonio').slick({
            prevArrow: '.arrow_prev',
            nextArrow: '.arrow_next',
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000,

            dotsClass: 'slick-dots',
            infinite: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,

                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
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
                <div class=" py-4 row text-white fw-se text-center">
                    <div class="col-6 col-md-3">
                        <div>
                            <p class="m-0"><img src="{{ asset('images/assets/icono_desarrollo.png') }}"
                                    class="mx-2" alt="desarrollo"> Desarrollo
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div>
                            <p class="m-0"><img src="{{ asset('images/assets/icono_felicidad.png') }}"
                                    class="mx-2" alt="felicidad"> Felicidad
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div>
                            <p class="m-0"><img src="{{ asset('images/assets/icon_innovacion.png') }}"
                                    class="mx-2" alt="innovacion"> Innovación
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div>
                            <p class="m-0"><img src="{{ asset('images/assets/icon_contribucion.png') }}"
                                    class="mx-2" alt="contribucion">
                                Contribución</p>
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
        <div class="carousel-inner">
            <div class="carousel-item active slide-azul">
                <img src="{{ asset('images/assets/slider_azul.png') }}" class="img-fluid" alt="slider">
                <div class="centrado">
                    <h2><b>#reflexionesdelallma</b></h2>
                    <h2 class="texto">Blog global para el desarrollo de la Inteligencia Emocional</h2><br>
                    <button><img class="mano" src="{{ asset('images/home/icon_mano.png') }}" alt="">Entra
                        aquí</button>

                </div>
            </div>
        </div><br><!-- /.container -->
        <div class="container pt-5 pb-5 ">
            <div class="text-center">
                <h2 class="fw-sesa">TESTIMONIOS</h2>
                <h3 class="flics"><b>FELICES</b></h3>
            </div>
 
            <div class="position-relative testimt">
                <div class="testimonio">

                    <div>
                        <div class="row pdlg">
                            <div class="col-12 col-md-4 np nm">
                                <div class="img_testimonio"
                                    style="background-image: url('{{ asset('images/assets/janice_ortiz.png') }}')">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 np nm">
                                <div class="bg-azulin text-center contntest h-100">
                                    <p class="txtwhite">Estuve buscando como entrenar a mis Distribuidores y
                                        brindarles
                                        herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                        profesionalmente como personalmente.
                                    </p>
                                    <p class="m-0 txt-vldk">Janice Ortiz Clark</p>
                                    <p class="txtwhite fwbolddd">TIENS Group</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                        testimonio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pdlg">
                            <div class="col-12 col-md-4 np nm">
                                <div class="img_testimonio"
                                    style="background-image: url('{{ asset('images/assets/foto_fredy.png') }}')">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 np nm">
                                <div class="bg-azulin text-center contntest h-100">
                                    <p class="txtwhite">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                        conocer herramientas de autogestión y en Allma encontré alternativas para gestionar
                                        mis actividades, mis recursos y mis emociones.
                                    </p>
                                    <p class="m-0 txt-vldk">Fredy Ochoa Del Aguila</p>
                                    <p class="txtwhite fwbolddd">Actor</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                        testimonio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pdlg">
                            <div class="col-12 col-md-4 np nm">
                                <div class="img_testimonio"
                                    style="background-image: url('{{ asset('images/assets/janice_ortiz.png') }}')">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 np nm">
                                <div class="bg-azulin text-center contntest h-100">
                                    <p class="txtwhite">Estuve buscando como entrenar a mis Distribuidores y
                                        brindarles
                                        herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                        profesionalmente como personalmente.
                                    </p>
                                    <p class="m-0 txt-vldk">Janice Ortiz Clark</p>
                                    <p class="txtwhite fwbolddd">TIENS Group</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                        testimonio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pdlg">
                            <div class="col-12 col-md-4 np nm">
                                <div class="img_testimonio"
                                    style="background-image: url('{{ asset('images/assets/foto_fredy.png') }}')">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 np nm">
                                <div class="bg-azulin text-center contntest h-100">
                                    <p class="txtwhite">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                        conocer herramientas de autogestión y en Allma encontré alternativas para gestionar
                                        mis actividades, mis recursos y mis emociones.
                                    </p>
                                    <p class="m-0 txt-vldk">Fredy Ochoa Del Aguila</p>
                                    <p class="txtwhite fwbolddd">Actor</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#Modal1">Leer
                                        testimonio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow_prev position-absolute prev1">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="arrow_next position-absolute prev2">
                    <i class="fas fa-chevron-right"></i>
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

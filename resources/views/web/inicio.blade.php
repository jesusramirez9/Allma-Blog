@extends('layouts.webapp')

@section('assets')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

    <script type="text/javascript">
        $('.testimonio').slick({
            prevArrow: '.arrow_prev',
            nextArrow: '.arrow_next',
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            Margin: '50px',
            autoplaySpeed: 5000,
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
    <div class="secini1">
        <div id="carouselExampleSlidesOnly" class="slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item imgslide1 active"
                    style="background-image: url('{{ asset('images/assets/slider_foto1.png') }}')">
                    <div class="container">
                        <div class="carousel-caption text-start banner-home letra10 scrollflow -slide-left -opacity">
                            <h1 class="animate__animated animate__fadeInLeft ">Comienza tu</h1>
                            <p class="revo_inte animate__animated animate__fadeInLeft ">Revolución Interior</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-azulino">
            <div class="container">
                <div class="py-4 row text-white fw-se text-center home-icons">
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-center scrollflow -slide-left -opacity">
                            <img src="{{ asset('images/assets/icono_desarrollo.png') }}"
                                    class="img-fluid animate__animated animate__fadeInLeft" alt="desarrollo">
                            <p class="mb-0 ms-2 ms-md-3 animate__animated animate__fadeInLeft">Desarrollo</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-center pe-4 pe-md-0 scrollflow -slide-right -opacity">
                            <img src="{{ asset('images/assets/icono_felicidad.png') }}"
                                    class="img-fluid animate__animated animate__fadeInRight" alt="felicidad">
                            <p class="mb-0 ms-2 ms-md-3 animate__animated animate__fadeInRight">Felicidad</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center scrollflow -slide-left -opacity">
                            <img src="{{ asset('images/assets/icon_innovacion.png') }}"
                                    class="img-fluid animate__animated animate__fadeInLeft" alt="innovacion">
                            <p class="mb-0 ms-2 ms-md-3 animate__animated animate__fadeInLeft">Innovación</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center scrollflow -slide-right -opacity">
                            <img src="{{ asset('images/assets/icon_contribucion.png') }}"
                                    class="img-fluid animate__animated animate__fadeInRight" alt="contribucion">
                            <p class="mb-0 ms-2 ms-md-3 animate__animated animate__fadeInRight">Contribución</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative secini1">
        <div class="container marketing pb-5">

            <div class="row featurette d-flex justify-content-center">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 cambio3 scrollflow -slide-left -opacity">
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
                            <button class="btn_mx scrollflow -slide-left -opacity">Leer más</button>
                        </div>
                        <div class="col-md-7 cambio scrollflow -slide-right -opacity">
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
            <h2 class="scrollflow -slide-bottom -opacity"><b>#reflexionesdelallma</b></h2>
            <h2 class="text2 scrollflow -slide-top -opacity ">Blog global para el desarrollo de la Inteligencia Emocional</h2>
            <a class="btn position-relative scrollflow -slide-top -opacity" href="{{route('web.nosotros')}}">
                <img class="mano" src="{{ asset('images/home/icon_mano.png') }}" alt="">
                Entra aquí
            </a>
        </div><br><!-- /.container -->
        <div class="container pt-5 pb-5 ">
            <div class="text-center">
                <h2 class="fw-sesa scrollflow -slide-left -opacity">TESTIMONIOS</h2>
                <h3 class="flics scrollflow -slide-right -opacity"><b>FELICES</b></h3>
            </div>

            <div class="position-relative testimt">
                <div class="position-absolute comilld">
                    <img src="{{ asset('images/assets/comillas.png') }}" alt="">
                </div>
                <div class="position-absolute comillda comlla2">
                    <img src="{{ asset('images/assets/comillas.png') }}" alt="">
                </div>
                <div class="testimonio">
                    <div>
                        <div class="row pdlg">
                            <div class="col-12 col-md-4 np nm">
                                <div class="img_testimonio"
                                    style="background-image: url('{{ asset('images/assets/janice_ortiz.png') }}')">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 np nm">
                                <div class="bg-azulin text-center contntest h-100 position-relative">
                                    
                                    <p class="txtwhite">Estuve buscando como entrenar a mis Distribuidores y
                                        brindarles
                                        herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                        profesionalmente como personalmente.
                                    </p>
                                    <p class="m-0 txt-vldk">Janice Ortiz Clark</p>
                                    <p class="txtwhite fwbolddd">TIENS Group</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#modal1">Leer
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
                                <div class="bg-azulin text-center contntest h-100 position-relative">
                                    
                                    <p class="txtwhite">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                        conocer herramientas de autogestión y en Allma encontré alternativas para gestionar
                                        mis actividades, mis recursos y mis emociones.
                                    </p>
                                    <p class="m-0 txt-vldk">Fredy Ochoa Del Aguila</p>
                                    <p class="txtwhite fwbolddd">Actor</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#modal2">Leer
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
                                <div class="bg-azulin text-center contntest h-100 position-relative">
                                    
                                    <p class="txtwhite">Estuve buscando como entrenar a mis Distribuidores y
                                        brindarles
                                        herramientas de negocio y de desarrollo personal para que puedan desarrollarse tanto
                                        profesionalmente como personalmente.
                                    </p>
                                    <p class="m-0 txt-vldk">Janice Ortiz Clark</p>
                                    <p class="txtwhite fwbolddd">TIENS Group</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#modal1">Leer
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
                                <div class="bg-azulin text-center contntest h-100 position-relative">
                                    
                                    <p class="txtwhite">Me encontraba en la búsqueda de mis áreas de mejora y de poder
                                        conocer herramientas de autogestión y en Allma encontré alternativas para gestionar
                                        mis actividades, mis recursos y mis emociones.
                                    </p>
                                    <p class="m-0 txt-vldk">Fredy Ochoa Del Aguila</p>
                                    <p class="txtwhite fwbolddd">Actor</p>
                                    <button class="btn2" data-bs-toggle="modal" data-bs-target="#modal2">Leer
                                        testimonio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn arrow_prev position-absolute prev1">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="btn arrow_next position-absolute prev2">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>


        </div><!-- /.container -->

        <!-- Modal1 -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-lg modal-dialog-centered">
                <div class="modal-content custom-modal">
                    <div class="modal-body p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="card modal-body text-white position-relative p-0 border-0">
                            <div class="row mx-0">
                                <div class="col-md-4 modal-home-img d-none d-md-block" style="background-image: url({{asset('images/assets/janice_ortiz.png')}})"></div>
                                <div class="col-md-8 card3 px-4">
                                    <div class="card-body text-center px-3"><br>
                                        <h4 class="letra7"><b>Janice Ortiz Clark</b></h4>
                                        <h4 class="letra8">TIENS Group</h4><br><br>
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
                                            <br><br>
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
        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-lg modal-dialog-centered">
                <div class="modal-content custom-modal">
                    <div class="modal-body p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="card modal-body text-white position-relative p-0 border-0">
                            <div class="row mx-0">
                                <div class="col-md-4 modal-home-img d-none d-md-block" style="background-image: url({{asset('images/assets/foto_fredy.png')}})"></div>
                                <div class="col-md-8 card3 px-4">
                                    <div class="card-body text-center px-3"><br>
                                        <h4 class="letra7"><b>Fredy Ochoa Del Aguila</b></h4>
                                        <h4 class="letra8">Actor</h4><br><br>
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
                                            <br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection

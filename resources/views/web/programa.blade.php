@extends('layouts.webapp')

@section('content')
    <div id="myCarousel" class=" slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <img src="{{ asset('images/programa/slider.png') }}" class="img-fluid" alt="slider">
                <div class="container">
                    <div class="centrado contac_txt">
                        <h1 class="txtcontc1">NUESTROS</h1>
                        <p class="txtcontc2">PROGRAMAS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container program1">
        <div class="">
            <h2 class=" text-center" id="title-program">El sendero del Allma</h2>
        </div>
        <div class="mb-4" id="slick-empresa">
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/foto_sendero_del_allma.png)"></div>
            </div>
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/felicitacion_del_allma_principal.png)"></div>
            </div>
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/allma_del_lider_principal.png)">
                </div>
            </div>
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/foto_sendero_del_allma.png)"></div>
            </div>
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/felicitacion_del_allma_principal.png)"></div>
            </div>
            <div class="program-item">
                <div class="img-square" style="background-image: url(images/programa/allma_del_lider_principal.png)">
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-md-6 mx-auto px-3">
                <p class="card-text text-justify mb-4" id="text-program">Este Programa es un proceso transformacional para el desarrollo del Ser, donde de forma experiencial cada participante trabaja en mejorar sus habilidades emocionales para así potenciar su mundo interior y que desde ese nuevo lugar se genere una transformación exterior.</p>
                <div class="text-center">
                    <a href="#" class="btn btn-primary btn_progrms">DESCARGAR BROCHURE</a>
                </div>
            </div>
        </div>
        <div class="text-center slick-flechas">
            <button class="btn btn-primary" id="prev-slick"><i class="fas fa-chevron-left"></i></button>
            <span class="d-inline-block"><i class="fas fa-circle"></i></span>
            <button class="btn btn-primary" id="next-slick"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <div class="container">
        <div class="row mrgprogr">
            <div class="col-12 col-md-6">
                <p class="m-0  txtprogr1 txtbluex fwbold">¿necesitas información?</p>
                <p class="txtprogr2 txtbluex fwbold">ESCRÍBENOS</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-black fwbold">Nombre:</label>
                            <input type="text" class="form-control  inptprgrs " id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-black fwbold">Dirección:</label>
                            <input type="email" class="form-control  inptprgrs " id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-black fwbold">Correo:</label>

                            <input type="text" class="form-control  inptprgrs " id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-black fwbold">Teléfonos:</label>

                            <input type="number" class="form-control inptprgrs " id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-black fwbold">Mensaje:</label>
                            <textarea class="form-control form-msj inptprgrs" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary btn_contacto">Enviar</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-self-center fot2prog">
                <div>
                    <img src="{{ asset('images/programa/foto_cuestinorio.png') }}" class="img-fluid" alt="slider">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let programas = [
            {
                title: 'El sendero del Allma',
                text: 'Este Programa es un proceso transformacional para el desarrollo del Ser, donde de forma experiencial cada participante trabaja en mejorar sus habilidades emocionales para así potenciar su mundo interior y que desde ese nuevo lugar se genere una transformación exterior.'
            },
            {
                title: 'Allma de Líder',
                text: 'Este Programa es un proceso de entrenamiento mental para explorar tu potencial como líder y ayudarte a desarrollarlo de la mejor manera, todo esto desde la aplicación de metodologías observación y el trabajo en diferentes aspectos.'
            },
            {
                title: 'Facilitación desde el Allma',
                text: 'Programa de especialización diseñado para todos aquellos que quieran llevar sus aprendizajes y experiencias a otras personas.<br>Este programa está centrado en la creación, diseño y puesta en práctica de espacios de aprendizaje y enseñanza, como talleres y capacitaciones.'
            },
            {
                title: 'El sendero del Allma',
                text: 'Este Programa es un proceso transformacional para el desarrollo del Ser, donde de forma experiencial cada participante trabaja en mejorar sus habilidades emocionales para así potenciar su mundo interior y que desde ese nuevo lugar se genere una transformación exterior.'
            },
            {
                title: 'Allma de Líder',
                text: 'Este Programa es un proceso de entrenamiento mental para explorar tu potencial como líder y ayudarte a desarrollarlo de la mejor manera, todo esto desde la aplicación de metodologías observación y el trabajo en diferentes aspectos.'
            },
            {
                title: 'Facilitación desde el Allma',
                text: 'Programa de especialización diseñado para todos aquellos que quieran llevar sus aprendizajes y experiencias a otras personas.<br>Este programa está centrado en la creación, diseño y puesta en práctica de espacios de aprendizaje y enseñanza, como talleres y capacitaciones.'
            }
        ];
        $('#slick-empresa').slick({
            infinite: true,
            centerMode: true,
            centerPadding: '50px',
            slidesToShow: 3,
            /*responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]*/
        });
        $('#slick-empresa').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            console.log(nextSlide);
            const nextItem = nextSlide;
            $('#title-program').text(programas[nextItem].title);
            $('#text-program').html(programas[nextItem].text);
        });
        $('#next-slick').on('click', function(){
            $('#slick-empresa').slick('slickNext');
        });
        $('#prev-slick').on('click', function(){
            $('#slick-empresa').slick('slickPrev');
        });
        
    </script>
@endsection

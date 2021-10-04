@extends('layouts.webapp')
@section('content')

<div id="carouselExampleSlidesOnly" class=" slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item imgslide1 active"
            style="background-image: url('{{asset('images/empresa/SLIDER_.png')}}')">
            <div class="banner-text">
                <h1>Consultoría en<br class="d-none d-lg-block"> INTELIGENCIA EMOCIONAL<br class="d-none d-lg-block"> Y BIENESTAR LABORAL 360°</h1>
            </div>
        </div>
    </div>
</div>
 

    <div class="container">
        <p class="text-justify text-empre1">En la Consultoría de inteligencia emocional y bienestar laboral 360° analizaremos desde
            varias perspectivas la
            situación actual de tu empresa, Mediante una metodología basada en un algoritmo de más de 15 factores que
            afectan a la inteligencia emnocional de los trabajadores. seremos capaces de detectar fortalezas y puntos de
            mejora para desarrollar un plan personalizado que responda a las necesidades reales de tu equipo. </p>

        <div class="row fw600">
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul">
                        Metodología  a medida
                    </div>
                </div>
                <p class="text-justify text-last spac_min">método adaptado a las necesidades de las empresas y teniendo en
                    cuenta las demandas del talento</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul">
                        Algoritmo propio
                    </div>
                </div>
                <p class="text-justify text-last spac_min">Conocemos los factores que hacen emocionalmente inteligentes a tus
                    trabajadores y la relevancia de cada
                    uno de ellos</p>

            </div>
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul">
                        Innovación continua
                    </div>
                </div>
                <p class="text-justify text-last spac_min">Actualizamos la metodología y los factores en función de la evolución
                    del mercado de talento</p>
            </div>
        </div>

        <p class="text-center txt-compromis">NUESTRO COMPROMISO</p>

        <div class="row mb-24">
            <div class="col-12 col-md-6">
                <div class="d-flex">
                    <div class="tick bg-primaryfuerte">
                    </div>
                    <p class="fwbold ml-2 txt-black">REDUCIMOS (AHORRO)</p>
                </div>

                <p class="fs-6 m-0 pt-2">Bajas laborales</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-66 h-100">
                        66%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Rotación de personal</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-65 h-100">
                        65%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Absentismo laboral</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-50 h-100">
                        50%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Productos defectuosos (sector industrial)</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-41 h-100">
                        41%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Problemas de seguridad del paciente (sector sanitario)</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-41 h-100">
                        41%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mr_progres2">
                <div class="d-flex">
                    <div class="tick bg-primaryfuerte">
                    </div>
                    <p class="fwbold ml-2 txt-black">AUMENTAMOS (GANANCIAS)</p>
                </div>
                <p class="fs-6 m-0 pt-2">Compromiso</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-100 h-100">
                        100%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Creatividad</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-86 h-100">
                        86%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Energia</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-65 h-100">
                        65%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Productividad</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-43 h-100">
                        43%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Ventas</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-20 h-100">
                        20%
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Calificaciones de Clientes</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-10 h-100">
                        10%
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="myCarousel" class=" slide mt-14rm" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{ asset('images/empresa/slider_2.png') }}" class="img-fluid w-100 h-100" alt="slider">
                <div class="container">
                    <div class="centrado centraddemo">
                        <p class="fwbold text-center">DEMO</p>
                        <p class="m-0 tx-cntr">Si tienes dudas acerca de nuestra <span class="fwbold">consultoría en Inteligencia Emocional,</span> </p>
                        <p class="tx-cntr">pídenos una DEMO y te brindaremos un espacio de muestra para que podamos conocernos.</p>
                        <P class="fwbold tx-cntr">Nos pondremos en contacto para organizar tu demo.</P>
                        <div class="d-flex align-items-center btnesrx">
                            <div class="position-relative">
                                <a href=" " class="btn btn-outline-primary btn_empresa h-50">Ponte en contacto aquí</a>
                                <img src="{{ asset('images/empresa/click_hand.png') }}"
                                    class="img-fluid position-absolute mano1" alt="slider">
                            </div>
                            <div class="position-relative">
                                <a href="" class="btn btn-outline-primary btn_empresa mx-4">Descarga aquí nuestra <br>
                                    presentación
                                    corporativa pdf</a>
                                <img src="{{ asset('images/empresa/click_hand.png') }}"
                                    class="img-fluid position-absolute mano2" alt="slider">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

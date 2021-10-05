@extends('layouts.webapp')
@section('content')

    <div id="carouselExampleSlidesOnly" class=" slide secini1" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item imgslide1 active"
                style="background-image: url('{{ asset('images/empresa/SLIDER_.png') }}')">
                <div class="banner-text">
                    <h1 class="animate__animated animate__fadeInLeft">Consultoría en<br class="d-none d-lg-block "> INTELIGENCIA EMOCIONAL<br class="d-none d-lg-block"> Y
                        BIENESTAR LABORAL 360°</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container rmprsporce secini1">
        <p class="text-justify text-empre1 animate__animated animate__fadeInDown">En la Consultoría de inteligencia emocional y bienestar laboral 360° analizaremos
            desde
            varias perspectivas la
            situación actual de tu empresa, Mediante una metodología basada en un algoritmo de más de 15 factores que
            afectan a la inteligencia emnocional de los trabajadores. seremos capaces de detectar fortalezas y puntos de
            mejora para desarrollar un plan personalizado que responda a las necesidades reales de tu equipo. </p>

        <div class="row fw600 ">
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul animate__animated animate__fadeInLeft">
                        Metodología a medida
                    </div>
                </div>
                <p class="text-justify text-last spac_min">método adaptado a las necesidades de las empresas y teniendo en
                    cuenta las demandas del talento</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul animate__animated animate__fadeInDown">
                        Algoritmo propio
                    </div>
                </div>
                <p class="text-justify text-last spac_min">Conocemos los factores que hacen emocionalmente inteligentes a
                    tus
                    trabajadores y la relevancia de cada
                    uno de ellos</p>

            </div>
            <div class="col-12 col-md-4">
                <div class="mx_3web">
                    <div class="text-center cajaazul animate__animated animate__fadeInRight">
                        Innovación continua
                    </div>
                </div>
                <p class="text-justify text-last spac_min">Actualizamos la metodología y los factores en función de la
                    evolución
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
                    <div class="position-absolute bg-primaryfuerte text-end  h-100" id="progreso1">
                        <span id="porcentaje1">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Rotación de personal</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end h-100" id="progreso2">
                        <span id="porcentaje2">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Absentismo laboral</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end  h-100" id="progreso3">
                        <span id="porcentaje3">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Productos defectuosos (sector industrial)</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-41 h-100" id="progreso4">
                        <span id="porcentaje4">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Problemas de seguridad del paciente (sector sanitario)</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-41 h-100" id="progreso5">
                        <span id="porcentaje5">0</span>
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
                    <div class="position-absolute bg-primaryfuerte text-end " id="progreso6">
                        <span id="porcentaje6">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Creatividad</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-86 h-100" id="progreso7">
                       <span id="porcentaje7">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Energia</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-65 h-100" id="progreso8">
                       <span id="porcentaje8">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Productividad</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-43 h-100" id="progreso9">
                       <span id="porcentaje9">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Ventas</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-20 h-100" id="progreso10">
                       <span id="porcentaje10">0</span>
                    </div>
                </div>
                <p class="fs-6 m-0 pt-2">Calificaciones de Clientes</p>
                <div class="position-relative bg-primarysuave text-white w-100 h-18">
                    <div class="position-absolute bg-primaryfuerte text-end w-10 h-100" id="progreso11">
                        <span id="porcentaje11">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="myCarousel" class=" slide mt-14rm secini1" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{ asset('images/empresa/slider_2.png') }}" class="img-fluid w-100 h-100" alt="slider">
                <div class="container">
                    <div class="centrado centraddemo">
                        <p class="fwbold text-center scrollflow -slide-bottom -opacity">DEMO</p>
                        <p class="m-0 tx-cntr scrollflow -slide-right -opacity">Si tienes dudas acerca de nuestra <span class="fwbold">consultoría
                                en Inteligencia Emocional,</span> </p>
                        <p class="tx-cntr scrollflow -slide-left  -opacity">pídenos una DEMO y te brindaremos un espacio de muestra para que podamos
                            conocernos.</p>
                        <P class="fwbold tx-cntr scrollflow -slide-top -opacity">Nos pondremos en contacto para organizar tu demo.</P>
                        <div class="d-flex align-items-center btnesrx">
                            <div class="position-relative">
                                <a href=" " class="btn btn-outline-primary btn_empresa h-50 scrollflow -slide-top -opacity">Ponte en contacto aquí</a>
                                <img src="{{ asset('images/empresa/click_hand.png') }}"
                                    class="img-fluid position-absolute mano1 scrollflow -slide-right -opacity" alt="slider">
                            </div>
                            <div class="position-relative">
                                <a href="" class="btn btn-outline-primary btn_empresa mx-4 scrollflow -slide-top -opacity">Descarga aquí nuestra <br>
                                    presentación
                                    corporativa pdf</a>
                                <img src="{{ asset('images/empresa/click_hand.png') }}"
                                    class="img-fluid position-absolute mano2 scrollflow -slide-left -opacity" alt="slider">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        let porcentaje1 = document.getElementById('porcentaje1')
        const progreso1 = document.getElementById('progreso1')
        let cantidad1 = 0;
        let tiempo1 = setInterval(() => {
            cantidad1 += 1
            progreso1.style.width = `${cantidad1}%`

            if (cantidad1 == 66) {
                clearInterval(tiempo1)
            }
            porcentaje1.textContent = `${cantidad1}%`
        }, 70);
    </script>
    <script>
        let porcentaje2 = document.getElementById('porcentaje2')
        const progreso2 = document.getElementById('progreso2')
        let cantidad2 = 0;
        let tiempo2 = setInterval(() => {
            cantidad2 += 1
            progreso2.style.width = `${cantidad2}%`

            if (cantidad2 == 65) {
                clearInterval(tiempo2)
            }
            porcentaje2.textContent = `${cantidad2}%`
        }, 70);
    </script>
    <script>
        let porcentaje3 = document.getElementById('porcentaje3')
        const progreso3 = document.getElementById('progreso3')
        let cantidad3 = 0;
        let tiempo3 = setInterval(() => {
            cantidad3 += 1
            progreso3.style.width = `${cantidad3}%`

            if (cantidad3 == 50) {
                clearInterval(tiempo3)
            }
            porcentaje3.textContent = `${cantidad3}%`
        }, 70);
    </script>
    <script>
        let porcentaje4 = document.getElementById('porcentaje4')
        const progreso4 = document.getElementById('progreso4')
        let cantidad4 = 0;
        let tiempo4 = setInterval(() => {
            cantidad4 += 1
            progreso4.style.width = `${cantidad4}%`

            if (cantidad4 == 41) {
                clearInterval(tiempo4)
            }
            porcentaje4.textContent = `${cantidad4}%`
        }, 70);
    </script>
    <script>
        let porcentaje5 = document.getElementById('porcentaje5')
        const progreso5 = document.getElementById('progreso5')
        let cantidad5 = 0;
        let tiempo5 = setInterval(() => {
            cantidad5 += 1
            progreso5.style.width = `${cantidad5}%`

            if (cantidad5 == 41) {
                clearInterval(tiempo5)
            }
            porcentaje5.textContent = `${cantidad5}%`
        }, 70);
    </script>
    <script>
        let porcentaje6 = document.getElementById('porcentaje6')
        const progreso6 = document.getElementById('progreso6')
        let cantidad6 = 0;
        let tiempo6 = setInterval(() => {
            cantidad6 += 1
            progreso6.style.width = `${cantidad6}%`

            if (cantidad6 == 100) {
                clearInterval(tiempo6)
            }
            porcentaje6.textContent = `${cantidad6}%`
        }, 70);
    </script>
    <script>
        let porcentaje7 = document.getElementById('porcentaje7')
        const progreso7 = document.getElementById('progreso7')
        let cantidad7 = 0;
        let tiempo7 = setInterval(() => {
            cantidad7 += 1
            progreso7.style.width = `${cantidad7}%`

            if (cantidad7 == 86) {
                clearInterval(tiempo7)
            }
            porcentaje7.textContent = `${cantidad7}%`
        }, 70);
    </script>
    <script>
        let porcentaje8 = document.getElementById('porcentaje8')
        const progreso8 = document.getElementById('progreso8')
        let cantidad8 = 0;
        let tiempo8 = setInterval(() => {
            cantidad8 += 1
            progreso8.style.width = `${cantidad8}%`

            if (cantidad8 == 65) {
                clearInterval(tiempo8)
            }
            porcentaje8.textContent = `${cantidad8}%`
        }, 70);
    </script>
    <script>
        let porcentaje9 = document.getElementById('porcentaje9')
        const progreso9 = document.getElementById('progreso9')
        let cantidad9 = 0;
        let tiempo9 = setInterval(() => {
            cantidad9 += 1
            progreso9.style.width = `${cantidad9}%`

            if (cantidad9 == 43) {
                clearInterval(tiempo9)
            }
            porcentaje9.textContent = `${cantidad9}%`
        }, 70);
    </script>
    <script>
        let porcentaje10 = document.getElementById('porcentaje10')
        const progreso10 = document.getElementById('progreso10')
        let cantidad10 = 0;
        let tiempo10 = setInterval(() => {
            cantidad10 += 1
            progreso10.style.width = `${cantidad10}%`

            if (cantidad10 == 20) {
                clearInterval(tiempo10)
            }
            porcentaje10.textContent = `${cantidad10}%`
        }, 70);
    </script>
    <script>
        let porcentaje11 = document.getElementById('porcentaje11')
        const progreso11 = document.getElementById('progreso11')
        let cantidad11 = 0;
        let tiempo11 = setInterval(() => {
            cantidad11 += 1
            progreso11.style.width = `${cantidad11}%`

            if (cantidad11 == 10) {
                clearInterval(tiempo11)
            }
            porcentaje11.textContent = `${cantidad11}%`
        }, 70);
    </script>

@endsection

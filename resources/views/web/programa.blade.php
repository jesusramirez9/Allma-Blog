@extends('layouts.webapp')

@section('content')

    <div id="carouselExampleSlidesOnly" class=" slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item imgslide1 active"
                style="background-image: url('{{ asset('images/programa/slider.png') }}')">
                <div class="container">
                    <div class="centrado contac_txt">
                        <h1 class="txtcontc1">NUESTROS</h1>
                        <p class="txtcontc2">PROGRAMAS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container progra1rp">
        <div class="card cardpromrp">
            <img src="{{ asset('images/programa/felicitacion_del_allma_principal.png') }}"
                class="card-img-top w-100 img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text text-justify">Este programa es un proceso transformacional para el desarrollo del Ser
                    donde de forma experiencial cada participante trabaja en mejorar sus habilidades emocionales para asi
                    potenciar su mundo interior y que desde ese nuevo lugar se genere una transformación exterior</p>
                <a href="#" class="btn btn-primary w-100 btn_progrms">DESCARGAR BROCHURE</a>
            </div>
        </div>
        <div class="card cardpromrp">
            <img src="{{ asset('images/programa/foto_sendero_del_allma.png') }}" class="card-img-top w-100 img-fluid"
                alt="...">
            <div class="card-body">
                <p class="card-text text-justify">Este Programa es un proceso de entrenamiento mental para explorar tu
                    potencial como lider y ayudarte a desarrollarlo de la mejor manera, todo esto desde la aplicación de
                    metodologías observación y el trabajo en diferentes aspectos vinculados al liderazgo como son la
                    empatía, el servicio, la comunicación, entre otras; logrando con ello líderes preparados para afrontar
                    los retos del mundo actual transformándolo en un lugar mejor.</p>
                <a href="#" class="btn btn-primary btn_progrms">DESCARGAR EL PDF DEL PROGRAMA</a>
            </div>
        </div>
        <div class="card cardpromrp">
            <img src="{{ asset('images/programa/allma_del_lider_principal.png') }}" class="card-img-top w-100 img-fluid"
                alt="...">
            <div class="card-body">
                <p class="card-text text-justify">Programa de especialización diseñado para todos aquellos que quieran
                    llevar sus aprendizajes y experiencias a otras personas. <br> Este programa está centrado en la
                    creación, diseño y puesta en práctica de espacios de aprendizaje y enseñanza, como talleres y
                    capacitaciones.</p>
                <a href="#" class="btn btn-primary btn_progrms">DESCARGA EL PDF DEL PROGRAMA</a>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row mrgprogr">
            <div class="col-12 col-md-6">
                <p class="m-0  txtprogr1 txtbluex fwbold">¿necesitas información?</p>
                <p class="txtprogr2 txtbluex fwbold">ESCRÍBENOS</p>
                <form action="{{ route('contactopro.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-black fwbold">Nombre:</label>
                                <input type="text" name="name" class="form-control  inptprgrs "
                                    id="exampleFormControlInput1"  required>
                                @error('name')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-black fwbold">Dirección:</label>
                                <input type="text" name="empresa" class="form-control  inptprgrs "
                                    id="exampleFormControlInput1" required>
                                @error('empresa')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-black fwbold">Correo:</label>

                                <input type="email" name="correo" class="form-control  inptprgrs "
                                    id="exampleFormControlInput1" required>
                                @error('correo')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-black fwbold">Teléfonos:</label>

                                <input type="number" name="celular" class="form-control inptprgrs "
                                    id="exampleFormControlInput1" placeholder="" required>
                                @error('celular')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-black fwbold">Mensaje:</label>
                                <textarea name="mensaje" class="form-control form-msj inptprgrs"
                                    id="exampleFormControlTextarea1" rows="3"></textarea required>
                                        @error('mensaje')
                                            <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn_contacto">Enviar</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 align-self-center fot2prog">
                    <div>
                        <img src="{{ asset('images/programa/foto_cuestinorio.png') }}" class="img-fluid" alt="slider">
                    </div>
                </div>
            </div>

        </div>

        @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif

@endsection

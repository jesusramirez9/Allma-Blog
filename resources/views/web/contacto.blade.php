@extends('layouts.webapp')
@section('content')

    <div id="carouselExampleSlidesOnly" class="secini1 slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item imgslide1 active"
                style="background-image: url('{{ asset('images/contacto/banner.png') }}')">
                <div class="container">
                    <div class="centrado contac_txt">
                        <h1 class="txtcontc1 animate__animated animate__fadeInLeft ">¡Hablemos!</h1>
                        <p class="txtcontc2 animate__animated animate__fadeInLeft ">Dudas y consultas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mbconcts secini1">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="txtbluex fstxtblux animate__animated animate__fadeInLeft">¡Hablemos!</p>
                <div class="d-flex align-items-center  scrollflow -slide-left -opacity">
                    <div class="text-center w_rm">
                        <img src="{{ asset('images/contacto/email.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="mx-3 ">
                        <p class="m-0 txt-black fwbold">Por email</p>
                        <p class="fs_sm txt-grs m-0">info@allma.pe</p>
                    </div>
                </div>
                <div class="d-flex pt-4 align-items-center scrollflow -slide-right -opacity">
                    <div class="text-center w_rm scrollflow -slide-left -opacity">
                        <img src="{{ asset('images/contacto/phone.png') }}" class="img-fluid" alt="">

                    </div>
                    <div class="mx-3">
                        <p class="m-0 txt-black fwbold">Por teléfono</p>
                        <p class="fs_sm txt-grs m-0">983576879</p>
                    </div>
                </div>
                <div class="d-flex pt-4 align-items-center scrollflow -slide-right -opacity">
                    <div class="text-center w_rm scrollflow -slide-left -opacity">
                        <img src="{{ asset('images/contacto/ubicacion.png') }}" class="img-fluid" alt="">

                    </div>
                    <div class="   mx-3">
                        <p class="m-0 txt-black fwbold">Lima</p>
                        <p class="fs_sm txt-grs m-0">Calle Ortega y Gasset 284</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <p class="txtbluex fstxtblux animate__animated animate__fadeInRight">¡Cuéntanos!</p>
                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control   frmnput form-inpt frm-nc"
                                    id="exampleFormControlInput1" placeholder="Nombre" required>
                                @error('name')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 scrollflow -slide-right -opacity">
                                <input type="email" name="correo" class="form-control  frmnput form-inpt"
                                    id="exampleFormControlInput1" placeholder="Correo electrónico" required>
                                @error('correo')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 scrollflow -slide-right -opacity">
                                <input type="text" name="empresa" class="form-control  frmnput form-inpt frm-nc"
                                    id="exampleFormControlInput1" placeholder="Empresa" required>
                                @error('empresa')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 scrollflow -slide-right -opacity">
                                <input type="number" name="celular" class="form-control frmnput  form-inpt"
                                    id="exampleFormControlInput1" placeholder="Teléfono" required>
                                @error('celular')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 scrollflow -slide-right -opacity">
                                <label for="exampleFormControlTextarea1" class="form-label txt-gray_s">Mensaje</label>
                                <textarea class="form-control form-msj" name="mensaje" id="exampleFormControlTextarea1"
                                    rows="3" required></textarea>
                                @error('mensaje')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end scrollflow -slide-top -opacity mb-4">
                            <button type="submit" class="btn btn-primary btn_contacto">Enviar</button>
                        </div>
                </form>
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

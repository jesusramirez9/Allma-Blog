@extends('layouts.webapp')
@section('content')

    <div id="myCarousel" class=" slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <img src="{{ asset('images/contacto/banner.png') }}" class="img-fluid" alt="slider">
                <div class="container">
                    <div class="centrado contac_txt">
                        <h1 class="txtcontc1">¡Hablemos!</h1>
                        <p class="txtcontc2">Dudas y consultas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mbconcts">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="txtbluex fstxtblux">¡Hablemos!</p>
                <div class="d-flex align-items-center">
                    <div class="text-center w_rm">
                        <img src="{{ asset('images/contacto/email.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="mx-3">
                        <p class="m-0 txt-black fwbold">Por email</p>
                        <p class="fs_sm txt-grs m-0">info@allma.pe</p>
                    </div>
                </div>
                <div class="d-flex pt-4 align-items-center">
                    <div class="text-center w_rm">
                        <img src="{{ asset('images/contacto/phone.png') }}" class="img-fluid" alt="">

                    </div>
                    <div class="mx-3">
                        <p class="m-0 txt-black fwbold">Por teléfono</p>
                        <p class="fs_sm txt-grs m-0">983576879</p>
                    </div>
                </div>
                <div class="d-flex pt-4 align-items-center">
                    <div class="text-center w_rm">
                        <img src="{{ asset('images/contacto/ubicacion.png') }}" class="img-fluid" alt="">

                    </div>
                    <div class="   mx-3">
                        <p class="m-0 txt-black fwbold">Lima</p>
                        <p class="fs_sm txt-grs m-0">Calle Ortega y Gasset 284</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <p class="txtbluex fstxtblux">¡Cuéntanos!</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control  frmnput form-inpt frm-nc" id="exampleFormControlInput1"
                                placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="email" class="form-control  frmnput form-inpt" id="exampleFormControlInput1"
                                placeholder="Correo electrónico">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control  frmnput form-inpt frm-nc" id="exampleFormControlInput1"
                                placeholder="Empresa">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="number" class="form-control frmnput  form-inpt" id="exampleFormControlInput1"
                                placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label txt-gray_s">Mensaje</label>
                            <textarea class="form-control form-msj" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary btn_contacto">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

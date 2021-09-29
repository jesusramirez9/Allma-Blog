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

@endsection

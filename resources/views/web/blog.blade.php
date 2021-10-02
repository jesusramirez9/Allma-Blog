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
                    <h1 class="txtcontc1">Blog</h1>
                    <p class="txtcontc2">Consejos y noticias</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="indx-blg">
            <p class="m-0 fw600">Mantente enterado de todo</p>
            <p class="bluzol">Acerca de una vida más feliz</p>
        </div>
        <div class="row mrowblg">
            @foreach ($posts as $post)
                <div class="col-12 col-md-6 mt-4  position-relative">
                    <div class=" shadow mrl bg-nrpte bg-cover  bg-body h-18  bg-center"
                        style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg @endif)">

                        <div class="fondo_graybajo position-absolute">
                            <div class="p-2">
                                <h1 class="mrgnt">
                                    <a class="rute_a" href="{{ route('posts.show', $post) }}">
                                        {{ $post->name }}
                                    </a>

                                </h1>
                                <div class="txtsizesm mrgdas">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet accusantium assumenda nam
                                    nobis cupiditate voluptatibus obcaecati rerum expedita illum maiores ea co </div>
                                <div class="text-black fw600 mrgdas txt_dte">
                                    12 mayo 19
                                </div>
                                {{-- <div class="position-relative" >
                                {!!$post->extract!!}
                            </div> --}}
                            </div>
                        </div>



                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

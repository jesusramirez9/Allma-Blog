@extends('layouts.webapp')
@section('content')
    <div id="carouselExampleSlidesOnly" class="secini1 slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item imgslide1 active"
                style="background-image: url('{{ asset('images/blog/slider.png') }}')">
                <div class="container">
                    <div class="centrado contac_txt">
                        <h1 class="txtcontc1 animate__animated animate__fadeInLeft">Blog</h1>
                        <p class="txtcontc2 animate__animated animate__fadeInLeft">Consejos y noticias</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container secini1">
        <div class="indx-blg">
            <p class="m-0 fw600 animate__animated animate__fadeInLeft">Mantente enterado de todo</p>
            <p class="bluzol animate__animated animate__fadeInLeft">Acerca de una vida más feliz</p>
        </div>
        <div class="row mrowblg animate__animated animate__fadeIn">
            @foreach ($posts as $post)
                <div class="col-12 col-md-6 mt-4  position-relative scrollflow -slide-bottom -opacity">
                    <div class=" shadow mrl bg-nrpte bg-cover  bg-body h-sda  bg-center"
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

    {{-- <div class="container py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2   @endif"
                    style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}"
                                    class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>

                </article>
            @endforeach
        </div>

    </div> --}}
@endsection

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

<div class="container py-8">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($posts as $post)
        <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2   @endif"
         style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg @endif)">
            <div class="w-full h-full px-8 flex flex-col justify-center">

                <div>
                    @foreach($post->tags as $tag)
                    <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                    @endforeach
                </div>

                <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                    <a href="{{route('posts.show',$post)}}">
                        {{$post->name}}
                    </a>
                </h1>
            </div>

        </article>
        @endforeach
    </div>
    <div class="mt-4">
        {{$posts->links()}}
    </div>
</div>

@endsection

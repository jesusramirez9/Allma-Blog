@extends('layouts.webapp')
@section('content')
<div id="myCarousel" class=" slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%"></rect>
            </svg>
            <img src="{{ asset('images/blog/slider.png') }}" class="img-fluid" alt="slider">
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
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{--Contenido principal--}}
            <div class="lg:col-span-2">
                <figure>
                    @if($post->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-500  mt-4">
                    {!!$post->body!!}
                </div>
            </div>  
            {{--Contenido Relacionado--}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show',$similar)}}">
                                
                                @if ($similar->image)
                                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">     
                                @else
                                <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg" alt="">
                                @endif

                               
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
    @endsection
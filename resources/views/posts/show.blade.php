@extends('layouts.webapp')
@section('content')
    <div id="carouselExampleSlidesOnly" class=" slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item imgslide1 active"
                style="background-image: url('{{ asset('images/blog/slider.png') }}')">
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
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <div class="mrg-indtl">
                        <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="img-fluid" alt="">
                    </div>
                    <hr class="hrmg">
                    <div>
                        <p class="bluzol">10 Pasos para organizarte</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, sequi dolore, molestiae aspernatur
                            dignissimos ullam tenetur iure perferendis laborum dolorem illo accusamus commodi omnis quas
                            odio, unde
                            eveniet esse ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus aut
                            numquam
                            consequuntur deleniti dolorum qui iste. Maxime quos laborum sit, ullam nulla libero est quas
                            dolorem
                            eius harum necessitatibus minus?</p>
                        <p>where dosent coasdasdas sdasdsa <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Similique
                            recusandae laudantium deleniti sapiente at, consectetur doloribus, quibusdam enim </p>
                        <br>
                        <p class="bluzol">10 Pasos para organizarte</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, sequi dolore, molestiae aspernatur
                            dignissimos ullam tenetur iure perferendis laborum dolorem illo accusamus commodi omnis quas
                            odio, unde
                            eveniet esse ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus aut
                            numquam
                            consequuntur deleniti dolorum qui iste. Maxime quos laborum sit, ullam nulla libero est quas
                            dolorem
                            eius harum necessitatibus minus?</p>
                        <p>where dosent coasdasdas sdasdsa <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Similique
                            recusandae laudantium deleniti sapiente at, consectetur doloribus, quibusdam enim </p>

                        <div class="spcrm5">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="img-fluid" alt="">
                            <h5 class="fwsm fwbold pt-2">Contry asdmasd asdsd og aodfai fasopafima fas ofaskfasf asfosafiasf
                            </h5>
                            <div class="d-flex justify-content-between align-items-center mtd-sa ">
                                <a href=""><img src="{{ asset('images/blogdetail/compartir.png') }}" alt=""></a>
                                <a href="{{ route('posts.index') }}" class="btn btn-primary btn_contacto">VOLVER</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <aside>
                    <p class="text-black fwbold pstremc">Post recientes</p>

                    <div class="d-flex justify-content-center pb-4 align-items-center">
                        <div class="text-center w_rmsa">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="w-100 img-fluid" alt="">
                        </div>
                        <div class="mx-3">
                            <p class="m-0 txt-black fwbold">titulo del post 1s sasdasd</p>
                            <p class="fs_sm txt-grs m-0">12 mayo 19</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pb-4 align-items-center">
                        <div class="text-center w_rmsa">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="w-100 img-fluid" alt="">
                        </div>
                        <div class="mx-3">
                            <p class="m-0 txt-black fwbold">titulo del post 1s sasdasd</p>
                            <p class="fs_sm txt-grs m-0">12 mayo 19</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pb-4 align-items-center">
                        <div class="text-center w_rmsa">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="w-100 img-fluid" alt="">
                        </div>
                        <div class="mx-3">
                            <p class="m-0 txt-black fwbold">titulo del post 1s sasdasd</p>
                            <p class="fs_sm txt-grs m-0">12 mayo 19</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pb-4 align-items-center">
                        <div class="text-center w_rmsa">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="w-100 img-fluid" alt="">
                        </div>
                        <div class="mx-3">
                            <p class="m-0 txt-black fwbold">titulo del post 1s sasdasd</p>
                            <p class="fs_sm txt-grs m-0">12 mayo 19</p>
                        </div>
                    </div>

                </aside>
            </div>
        </div>

    </div>

    {{-- <div class="container py-8">
         <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div> 
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-500  mt-4">
                    {!!$post->body!!}
                </div>
            </div>  
           
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
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
    </div> --}}
@endsection

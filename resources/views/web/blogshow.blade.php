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
                            dignissimos ullam tenetur iure perferendis laborum dolorem illo accusamus commodi omnis quas odio, unde
                            eveniet esse ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus aut numquam
                            consequuntur deleniti dolorum qui iste. Maxime quos laborum sit, ullam nulla libero est quas dolorem
                            eius harum necessitatibus minus?</p>
                        <p>where dosent coasdasdas sdasdsa <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
                            recusandae laudantium deleniti sapiente at, consectetur doloribus, quibusdam enim </p>
        
                        <p class="bluzol spcrm5">10 Pasos para organizarte</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, sequi dolore, molestiae aspernatur
                            dignissimos ullam tenetur iure perferendis laborum dolorem illo accusamus commodi omnis quas odio, unde
                            eveniet esse ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus aut numquam
                            consequuntur deleniti dolorum qui iste. Maxime quos laborum sit, ullam nulla libero est quas dolorem
                            eius harum necessitatibus minus?</p>
                        <p>where dosent coasdasdas sdasdsa <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
                            recusandae laudantium deleniti sapiente at, consectetur doloribus, quibusdam enim </p>
        
                        <div class="spcrm5">
                            <img src="{{ asset('images/blogdetail/IMAGEN_1.png') }}" class="img-fluid" alt="">
                            <h5 class="fwsm fwbold pt-2">Contry asdmasd asdsd og aodfai fasopafima fas ofaskfasf asfosafiasf</h5>
                            <div class="d-flex justify-content-between align-items-center mtd-sa ">
                                <a href=""><img src="{{ asset('images/blogdetail/compartir.png') }}" alt=""></a>
                                <button class="btn btn-primary btn_contacto">VOLVER</button>
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

@endsection

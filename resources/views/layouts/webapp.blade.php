<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allma || Escuela de Inteligencia Emocional</title>
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/hover.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/empresa.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/nosotros.css')}}" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    @yield('assets')
</head>

<body>
    <header class="header secini1">
        <div class="header-content">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand py-0" href="/">
                    <img src="{{asset('images/logo.png')}}" alt="logo Allma" class="img-fluid logo-header">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse py-3 justify-content-md-end" id="navbarHeader">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }} prime"
                                href="{{ route('web.inicio') }}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('nosotros') ? 'active' : '' }} prime"
                                href="{{ route('web.nosotros') }}">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('empresa') ? 'active' : '' }} prime"
                                href="{{ route('web.empresa') }}">EMPRESA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('programa') ? 'active' : '' }} prime"
                                href="{{ route('web.programa') }}">PROGRAMAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }} prime"
                                href="{{ route('posts.index') }}">BLOG</a>
                        </li>
                        <li class="nav-item mb-3 mb-lg-0">
                            <a class="nav-link {{ request()->is('contactanos') ? 'active' : '' }} prime"
                                href="{{ route('contacto') }}">CÚENTAME ALGO</a>
                        </li>
                        <li class="nav-item nav-item-social ms-xl-3">
                            <a class="nav-link" href="https://www.facebook.com/allma.pe" target="_blank"><img
                                    src="{{asset('images/logo_fb.png')}}" class="img-red-header" width="8px"></a>
                        </li>
                        <li class="nav-item nav-item-social">
                            <a class="nav-link" href="https://www.instagram.com/allma.pe/" target="_blank"><img
                                    src="{{asset('images/logo_ig.png')}}" class="img-red-header" width="20px"></a>
                        </li>
                        <li class="nav-item nav-item-social">
                            <a class="nav-link" href="https://www.linkedin.com/company/allmaescuela/"
                                target="_blank"><img src="{{asset('images/logo_linkedin.png')}}" class="img-red-header"
                                    width="20px"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer bg-dark secini1">
        <div class="container-footer text-md-left">
            <div class="row col-md-12 col-lg-11 col-xl-10 col-xxl-9 mx-auto">
                <div class="col-md-6 col-lg-4 py-4 px-3">
                    <ul class="list-unstyled d-none d-md-block scrollflow -slide-right -opacity">
                        <li class="mb-2 "><a href="{{ route('web.inicio') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
                        <li class="mb-2 "><a href="{{ route('web.nosotros') }}" class="{{ request()->is('nosotros') ? 'active' : '' }}">Nosotros</a></li>
                        <li class="mb-2 "><a href="{{ route('web.empresa') }}" class="{{ request()->is('empresa') ? 'active' : '' }}">Empresa</a></li>
                        <li class="mb-2 "><a href="{{ route('web.programa') }}" class="{{ request()->is('programa') ? 'active' : '' }}">Programas</a></li>
                        <li class="mb-2 "><a href="{{ route('posts.index') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
                        <li class="mb-2 "><a href="{{ route('contacto') }}" class="{{ request()->is('contactanos') ? 'active' : '' }}">Cuéntame algo</a></li>
                    </ul>
                    <div class="redes-footer d-flex align-items-center py-3">
                        <div class=" scrollflow -slide-right -opacity">
                            <a href=" https://www.facebook.com/allma.pe" target="_blank" class="d-inline-block me-2"><img src="{{asset('images/fb_blanco.png')}}" alt="Facebook"></a>
                            <a  href="https://www.instagram.com/allma.pe/" target="_blank" class="d-inline-block me-2"><img src="{{asset('images/ig_blanco.png')}}" alt="Instagram"></a>
                            <a href="https://www.linkedin.com/company/allmaescuela/" target="_blank" class="d-inline-block me-2"><img src="{{asset('images/linkedind_blanco.png')}}" alt="Linkedin"></a>
                        </div>
                        <p class="text-white mb-0 ms-3 scrollflow -slide-left -opacity">Telf: 983576879<br>info@allma.pe</p>
                    </div>
                </div>
                <div class="col-md-4 px-3 text-center footer-logo d-md-none d-lg-block scrollflow -slide-bottom -opacity">
                    <img src="{{asset('images/logo_blanco.png')}}" alt="Logo Allma" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-4 py-4 px-3">
                    <div class="col-lg-11 col-xl-9 ms-auto footer-contacto">
                        <p class="fw-bold">Suscríbete a nuestro Newsletter:</p>
                        <form action="">
                            <div class="mb-3 scrollflow -slide-left -opacity">
                                <label class="mb-1">Nombre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 scrollflow -slide-left -opacity">
                                <label class="mb-1">Correo electrónico</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class=" scrollflow -slide-top -opacity">
                                <button type="button" class="btn btn-primary">Registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end bg-white">
            <p class="text-center mb-0">Allma 2021 Todos los derechos reservados</p>
        </div>
        
        <a href="https://wa.me/51983576879" target="_blank" class="button-wspp">
            <img class="wspp" src="{{ asset('images/assets/icon_whasapp.png') }}" alt="wspp">
        </a>
    </footer>

    {{-- Scripts por pagina --}}
    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('plugin/scrollflow/eskju.jquery.scrollflow.min.js') }}"></script>
    @yield('scripts')
</body>

</html>

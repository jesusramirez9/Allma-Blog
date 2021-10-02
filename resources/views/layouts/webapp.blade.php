<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/empresa.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nosotros.css') }}" rel="stylesheet">

    @yield('assets')
</head>

<body>
    <header class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand text-dark py-0" href="/">
                    <img src="{{ 'images/logo.png' }}" alt="logo Allma" class="img-fluid text-dark">
                </a>
                <button id="menuToggle" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse py-3 justify-content-md-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }} prime"
                                href="{{ route('web.inicio') }}">INICIO</a>
                        </li>
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('nosotros') ? 'active' : '' }} prime"
                                href="{{ route('web.nosotros') }}">NOSOTROS</a>
                        </li>
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('empresa') ? 'active' : '' }} prime"
                                href="{{ route('web.empresa') }}">EMPRESA</a>
                        </li>
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('programa') ? 'active' : '' }} prime"
                                href="{{ route('web.programa') }}">PROGRAMAS</a>
                        </li>
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }} prime"
                                href="{{ route('posts.index') }}">BLOG</a>
                        </li>
                        <li class="nav-item ms-xl-3">
                            <a class="nav-link {{ request()->is('contacto') ? 'active' : '' }} prime"
                                href="{{ route('contacto') }}">CÚENTAME ALGO</a>
                        </li>
                        <li class="nav-item nav-item-social ms-xl-3">
                            <a class="nav-link" href="https://www.facebook.com/allma.pe" target="_blank"><img
                                    src="{{ 'images/logo_fb.png' }}" class="img-red-header" width="8px"></a>
                        </li>
                        <li class="nav-item nav-item-social">
                            <a class="nav-link" href="https://www.instagram.com/allma.pe/" target="_blank"><img
                                    src="{{ 'images/logo_ig.png' }}" class="img-red-header" width="20px"></a>
                        </li>
                        <li class="nav-item nav-item-social">
                            <a class="nav-link" href="https://www.linkedin.com/company/allmaescuela/"
                                target="_blank"><img src="{{ 'images/logo_linkedin.png' }}" class="img-red-header"
                                    width="20px"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer bg-dark">
        <div class="container-footer text-md-left">
            <div class="row col-md-12 col-lg-11 col-xl-10 col-xxl-9 mx-auto">
                <div class="col-md-4 py-4">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('web.inicio') }}">Inicio</a></li>
                        <li class="mb-2"><a href="{{ route('web.nosotros') }}">Nosotros</a></li>
                        <li class="mb-2"><a href="{{ route('web.empresa') }}">Empresa</a></li>
                        <li class="mb-2"><a href="{{ route('web.programa') }}">Programas</a></li>
                        <li class="mb-2"><a href="{{ route('posts.index') }}">Blog</a></li>
                        <li class="mb-2"><a href="{{ route('contacto') }}">Cuéntame algo</a></li>
                    </ul>
                    <div class="redes-footer d-flex align-items-center py-3">
                        <div class="">
                  <a href=" https://www.facebook.com/allma.pe" target="_blank" class="d-inline-block me-2"><img src="{{ 'images/fb_blanco.png' }}" alt="Facebook"></a>
                 <a  href="https://www.instagram.com/allma.pe/" target="_blank" class="d-inline-block me-2"><img src="{{ 'images/ig_blanco.png' }}" alt="Instagram"></a>
                 <a href="https://www.linkedin.com/company/allmaescuela/" target="_blank" class="d-inline-block me-2"><img src="{{ 'images/linkedind_blanco.png' }}" alt="Linkedin"></a>
                        </div>
                        <p class="text-white mb-0 ms-3">Telf: 983576879<br>info@allma.pe</p>
                    </div>
                </div>
                <div class="col-md-4 text-center footer-logo">
                    <img src="{{ 'images/logo_blanco.png' }}" alt="Logo Allma" class="img-fluid">
                </div>
                <div class="col-md-4 py-4">
                    <div class="col-md-7 ms-auto footer-contacto">
                        <p class="fw-bold">Suscríbete a nuestro Newsletter:</p>
                        <form action="">
                            <div class="mb-3">
                                <label class="mb-1">Nombre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="mb-1">Correo electrónico</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="">
                    <button class=" btn btn-primary">Registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end bg-white">
            <p class="text-center mb-0">Allma 2021 Todos los derechos reservados</p>
        </div>
    </footer>

    {{-- Scripts por pagina --}}
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    @yield('scripts')

</body>

</html>

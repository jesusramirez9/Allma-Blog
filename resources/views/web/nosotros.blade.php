@extends('layouts.webapp')
@section('content')

<div>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner cuadro">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <img src="{{asset('images/assets/SLIDER.png')}}" class="img-fluid" alt="slider">
                <div class="container">
                    <div class="centrado centro">
                        <h1>Tenemos el reto de Impulsar tu revolución interior</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing pb-5 contenido1">
        <div class="row featurette pt-0 pb-5">
            <div class="col-md-12 order-md-2 pt-0 letra10">
                <div class="title-container letra11">
                    <h2 class="custom-title">Así somos y</h2>
                    <h2 class="custom-title">así pensamos-</h2>
                </div>
                <p>Día a día mas personas se vuelven conscientes de que la vida no es un lugar para pasarlo mal,
                    hacer trabajos mediocres y solo sobrevivir; sino, para vivir enfocados en su propósito,
                    explotando al máximo su potencial interior e iluminando el mundo para otros que vienen
                    después.
                </p>
                <p>
                    En esa consciencia reconocen que la mejor herramienta para lograrlo es la Inteligencia
                    Emocional
                    y todas sus aristas.
                </p>
                <p>Un espacio de investigación, creación de metodologías innovadoras, espacios de enseñanza y
                    aprendizaje donde se respeta la individualidad y el proceso de cada persona y organización
                    para
                    lograr sus objetivos es lo que desde Allma - Escuela de Inteligencia Emocional ofrecemos
                    para
                    lograr un mundo más pleno.
                </p>
            </div>
        </div>
        <div class="rayita">

        </div>

        <div class="row featurette contenido2">
            <div class="col-md-7 order-md-2 contenido3">
                <div class="title-container subida">
                    <h2 class="featurette-heading custom-title letra12">Bruno Escobar</h2>
                    <p class="custom-description beta">Padre, empresario, coach, mentor, facilitador y claun.
                    </p>
                </div>
                <p>Me encantan los momentos previos al amanecer donde puedo absorber la calma y hacerla mía,
                    quizás
                    acompañado de un buen libro o haciendo algo de ejercicio; equilibra mi día el poder
                    observarlo
                    desde el silencio de las mañanas; sin embargo, eso no me resta el disfrute del resto del día
                    donde estoy seguro me encontrarán totalmente activo y rodeado de la gente que amo.
                </p>
                <p>
                    Creo apasionadamente en el potencial ilimitado de cada ser humano y como todos y cada uno
                    estamos llamados a ser legendarios y hacer de nuestras vidas obras maestras, por ello me
                    dedicó
                    fervientemente al estudio, creación y enseñanza de diversas metodologías y herramientas que
                    liberen ese potencial.

                </p>

                <div class="redes">
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/icon_fb2.png')}}"
                            alt="Facebook"></a>
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/ig_2.png')}}" alt="Instagram"></a>
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/In_icon_2.png')}}"
                            alt="Linkedin"></a>
                </div>


            </div>
            <div class="col-md-5 order-md-1 contenido4">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                <img src="{{asset('images/assets/bruno_escobar.png')}}" alt="">
            </div>
        </div>
        <div class="row featurette contenido2">
            <div class="col-md-7 contenido5">
                <div class="title-container subida">
                    <h2 class="featurette-heading custom-title letra13">Yaniree Quineche</h2>
                    <p class="custom-description alfa">Madre, empresaria, facilitadora, entrenadora de ventas y
                        claun.
                    </p>
                </div>
                <p>Me encanta pasar el tiempo acompañada de buena música, tomarme una tarde para tomar un café
                    con
                    amigas o pasear en familia, siempre es bueno si podemos reír muchísimo más no te confundas
                    también me gustan las conversaciones profundas y emocionales; y no te sorprendas si por ahí
                    me
                    encuentras en alguna librería comprando papelería, cuadernos o lápices, me encantan.
                </p>
                <p>
                    Las neurociencias y ese lugar donde las habilidades duras se encuentran con las blandas son
                    mi
                    pasión; entender, estudiar, enseñar y poner en práctica cada competencia que esto me permite
                    adquirir hace que mis ojos brillan de emoción.

                </p>
                <p>

                    En 14 años de pertenecer al área comercial he comprobado que el secreto del éxito es la
                    planificación y la estrategia con metodologías que hagan este proceso ágil y dinámico.

                </p>


                <div class="redes2">
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/icon_fb2.png')}}"
                            alt="Facebook"></a>
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/ig_2.png')}}" alt="Instagram"></a>
                    <a href="#" class="d-inline-block me-2"><img src="{{asset('images/nosotros/In_icon_2.png')}}"
                            alt="Linkedin"></a>
                </div>
            </div>
            <div class="col-md-5 contenido6">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="520" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>

            </div>

        </div>

    </div><!-- /.container -->


    <button class="button-wspp">
        <img class="wspp" src="{{asset('images/assets/icon_whasapp.png')}}" alt="wspp">
    </button>



</div>

@endsection

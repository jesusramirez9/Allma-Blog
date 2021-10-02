@extends('adminlte::page')

@section('title', 'Allma')

@section('content_header')
    <h1>Editar Testimonio</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($testimonial, ['route' => ['admin.testimonials.update', $testimonial], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

            @include('admin.testimonials.partials.form')

            {!! Form::submit('Actualizar Testimonio', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }

    </style>
@stop


@section('js')
    <script>
        //cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection

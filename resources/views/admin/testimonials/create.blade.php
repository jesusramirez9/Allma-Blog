@extends('adminlte::page')

@section('title', 'Allma')

@section('content_header')
<h1>Crear nuevo testimonio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.testimonials.store', 'autocomplete' => 'off', 'files'=>true]) !!}

        @include('admin.testimonials.partials.form')

        {!! Form::submit('Crear Testimonio', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
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
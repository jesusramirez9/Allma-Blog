<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la persona']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('occupation', 'Ocupación:') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ocupación de la persona']) !!}

    @error('occupation')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-3">
        {!! Form::radio('status', 1, true) !!}
        Activado
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Desactivado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <div class="image-wrapper">
            @isset($testimonial->image)
                <img id="picture" src="{{ Storage::url($testimonial->image->url) }}" class="img-fluid">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg" class="img-fluid">
            @endisset
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('file', 'Seleccione la imagen de la persona') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

<div class="form-group">
    {!! Form::label('message', 'Testimonio:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => 3]) !!}

    @error('message')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

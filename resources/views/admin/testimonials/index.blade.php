@extends('adminlte::page')

@section('title', 'Allma')

@section('content_header')
    @can('admin.testimonials.index')
        <a class="btn btn-secondary float-right " href="{{ route('admin.testimonials.create') }}">Agregar Testimonio</a>
    @endcan
    <h1>Lista de Testimonios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-danger">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->status == 1 ? 'Activo':'Desactivado' }}</td>
                            <td width="10px">
                                @can('admin.testimonials.edit')
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.testimonials.edit', $testimonial) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.testimonials.destroy')
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

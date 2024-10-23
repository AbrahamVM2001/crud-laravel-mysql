@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card mt-5">
    <h5 class="card-header">Eliminar usuario</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!
                <table class="table table-sm table-responsive table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->paterno }}</td>
                            <td>{{ $personas->materno }}</td>
                            <td>{{ $personas->nombre }}</td>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{ route('personas.destroy', $personas->id) }}" class="mt-2" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('personas.index') }}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </p>
    </div>
</div>
@endsection
@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel')

@section('contenido')
<div class="card mt-5">
    <div class="card-header">CRUD | LARAVEL | MYSQL | BOOTSTRAP</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
            </div>
        </div>
        <h5 class="card-title">Listado de personas en el sistema</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Agregar nueva persona</a>
        </p>
    </div>
    <div class="card-text mt-2">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Editar</th>
                    <th>Elimar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>
                                <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-user-minus"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
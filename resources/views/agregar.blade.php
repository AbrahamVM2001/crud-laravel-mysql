@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card mt-5">
    <h5 class="card-header">Agregar nuevo</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 text-center">
                    <button class="btn btn-primary">Agregar</button>
                    <a href="{{ route("personas.index") }}" class="btn btn-info me-5">Regresar</a>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection
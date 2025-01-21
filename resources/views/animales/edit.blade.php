@extends('layouts.app')

@section('content')
    <h1>Editar animal</h1>
    <form action="{{route('animales.update',$animal)}}" method="POST">
        @csrf
        @method("PUT")
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{ $animal->nombre }}">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="{{ $animal->especie }}">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Url Imagen</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url de la imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('animales.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
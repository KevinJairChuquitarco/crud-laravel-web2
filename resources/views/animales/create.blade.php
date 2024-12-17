@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Registro de Animales</h1>
        <form action="{{ route('animales.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Ingrese la especie">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
@endsection
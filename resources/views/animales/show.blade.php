@extends('layouts.app')

@section('content')
    <h1>Detalle de animal</h1>
    <img src="{{ $animal->url }}" alt="Imagen animal" class="img-fluid">
    <p><strong>Nombre:</strong> {{ $animal->nombre }}</p>
    <p><strong>Especie:</strong> {{ $animal->especie }}</p>
@endsection
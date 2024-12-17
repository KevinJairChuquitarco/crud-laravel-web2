@extends('layouts.app')

@section('content')
    <h1>Detalle de animal</h1>
    <p><strong>Nombre:</strong> {{ $animal->nombre }}</p>
    <p><strong>Especie:</strong> {{ $animal->especie }}</p>
@endsection
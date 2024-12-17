@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de animales</h1>
        <a href="{{ route('animales.create')}}" class="btn btn-primary">Agregar Animal</a>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($animales as $animal)
                <tr>
                  <th scope="row">{{ $animal->id }}</th>
                  <td>{{ $animal->nombre }}</td>
                  <td> {{ $animal->especie}} </td>
                  <td>
                      <a href="{{ route('animales.show', $animal) }}" class="btn btn-info">Ver</a>
                      <a href="{{ route('animales.edit',$animal)}}" class="btn btn-dark">Editar</a>
                      <form style="display:inline-block" action="{{ route('animales.destroy',$animal)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</Button>
                      </form>
                      
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
@extends('layout.plantilla')
@section('contenido')
@if(session()->has('mensaje'))
    <p style="color:red">{{session('mensaje')}}</p>
@endif

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Detalles</th>
      <th scope="col"></th>
      <td scope="col">
      <form action="{{route('estudiantes.create')}}"method="post">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-outline-primary">Agregar</button>
      </form>
      </td>
    </tr>
  </thead>
  <tbody>
  @foreach ($estudiantes as $estudiante)
    <tr>
      <td>{{$estudiante->nombre}}</td>
      <td>{{$estudiante->email}}</td>
      <td><a href="{{route('estudiantes.show',$estudiante->id)}}">Ver ficha</a></td>
      <td><a href="{{route('estudiantes.edit',$estudiante->id)}}">Editar</a></td>
      <td>
      <form action="{{route('estudiantes.destroy',$estudiante->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

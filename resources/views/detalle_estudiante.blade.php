@extends('layout.plantilla')
@section('contenido')
<h1>Detalles de estudiante</h1>
<table>
  <th>nombre:</th>
  <td>{{$estudiante->nombre}}</td>
  <th>email:</th>
  <td>{{$estudiante->email}}</td>
  <th>edad:</th>
  <td>{{$estudiante->edad}}</td>

</table>
@endsection

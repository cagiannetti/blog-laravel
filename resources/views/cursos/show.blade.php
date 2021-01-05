@extends('layouts.plantilla')

@section('title', 'Detalles del curso '.$curso->nombre)

@section('content')
<h1>Detalle de CURSO {{$curso->nombre}}</h1>
<a href="{{route('cursos.index')}}">Vover a cursos</a><br>
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
<p><strong>Categoría: </strong>{{$curso->categoria}}</p>
<p><strong>Descripción: </strong>{{$curso->descripcion}}</p>
<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar curso</button>
</form>
@endsection

@extends('layouts.plantilla')

@section('title', 'Detalles del curso '.$curso->nombre)

@section('content')
<h1>Detalle de CURSO {{$curso->nombre}}</h1>
<a href="{{route('cursos.index')}}">Vover a cursos</a><br>
<a href="{{route('cursos.edit', $curso->id)}}">Editar curso</a>
<p><strong>Categoría: </strong>{{$curso->categoria}}</p>
<p><strong>Descripción: </strong>{{$curso->descripcion}}</p>
@endsection

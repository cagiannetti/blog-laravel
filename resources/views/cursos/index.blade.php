@extends('layouts.plantilla')

@section('title', 'Listado de cursos')

@section('content')
    <h1>Listado de CURSOS</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a></li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection

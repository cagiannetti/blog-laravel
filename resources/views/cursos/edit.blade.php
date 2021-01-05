@extends('layouts.plantilla')

@section('title', 'Modificar Curso')

@section('content')
<h1>Modificar Curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
@csrf
@method('put')
    <label>
        Nombre:<br>
        <input type="text" name="nombre" value="{{old('nombre', $curso->nombre)}}"><br><!-- //el old con 2 parámetros es para cuando edito por primera vez ó cuando el formulario es enviado con errores-->
    </label>

    @error('nombre')
        <small>*{{$message}}</small><br>
    @enderror
    <br>

    <label>
        Slug:<br>
        <input type="text" name="slug" value="{{old('slug', $curso->slug)}}"><br>
    </label>

    <label>
        Descripción:<br>
        <textarea name="descripcion">{{old('descripcion', $curso->descripcion)}}</textarea><br>
    </label>

    @error('descripcion')
        <small>*{{$message}}</small><br>
    @enderror
    <br>

    <label>
        Categoría:<br>
        <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}"><br>
    </label>

    @error('categoria')
        <small>*{{$message}}</small><br>
    @enderror
    <br>

    <button type="submit">Guardar</button>
</form>
@endsection
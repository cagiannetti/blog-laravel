@extends('layouts.plantilla')

@section('title', 'Nuevo Curso')

@section('content')
<h1>Nuevo Curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
@csrf
    <label>
        Nombre:<br>
        <input type="text" name="nombre" value="{{old('nombre')}}"><br>
    </label>

    @error('nombre')
        <small>*{{$message}}</small><br>
    @enderror
    <br>
    
    <label>
        Slug:<br>
        <input type="text" name="slug" value="{{old('slug')}}"><br>
    </label>
    
    <label>
        Descripción:<br>
        <textarea name="descripcion">{{old('descripcion')}}</textarea><br>
    </label>

    @error('descripcion')
        <small>*{{$message}}</small><br>
    @enderror
    <br>
    

    <label>
        Categoría:<br>
        <input type="text" name="categoria" value="{{old('categoria')}}"><br>
    </label>

    @error('categoria')
        <small>*{{$message}}</small><br>
    @enderror
    <br>
    

    <button type="submit">Guardar</button>
</form>
@endsection


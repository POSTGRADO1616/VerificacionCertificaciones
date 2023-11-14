@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CURSOS U.A.T.F.</h1>
@stop

@section('content')

    <h2>
        Edita el Nombre del Curso
    </h2>

    <form action={{route("Cursos.update",['Curso'=>$cursos])}} method="post">
        @csrf
        @method('PUT')
        <input type="text" name="EdicionCurso" id="curso" value="{{ $cursos->nombre}}">
        <select name="idCarrera" id="carrera">
    @foreach($carreras as $carrera)
        <option value="{{ $carrera->id }}">
            {{ $carrera->NombreCarrera}}
        </option>
    @endforeach
</select>
<select name="idFacultad" id="facultad">
    @foreach($facultades as $facultad)
        <option value="{{ $facultad->id }}" {{ $carreras->idFacultad == $facultad->id ? 'selected' : '' }}>
            {{ $facultad->NombreFacultad }}
        </option>
    @endforeach
</select>
        <br>
        <button type="submit">Editar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
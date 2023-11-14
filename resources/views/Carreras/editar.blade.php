@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FACULTADES U.A.T.F.</h1>
@stop

@section('content')

    <h2>
        Edita el Nombre de la facultad
    </h2>

    <form action={{route("Carreras.update",['Carrera'=>$carreras])}} method="post">
        @csrf
        @method('PUT')
        <input type="text" name="EdicionCarrera" id="carrera" value="{{ $carreras->NombreCarrera}}">
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
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FACULTADES U.A.T.F.</h1>
@stop

@section('content')

    <h2>
        Edita el Nombre de la facultad
    </h2>

    <form action={{route("Facultades.update",['Facultade'=>$facultades])}} method="post">
        @csrf
        @method('PUT')
        <input type="text" name="EdicionFacultad" id="agregar" value="{{$facultades->NombreFacultad}}">
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
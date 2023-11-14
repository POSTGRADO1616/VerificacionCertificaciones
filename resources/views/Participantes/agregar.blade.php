@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PARTICIPANTES U.A.T.F.</h1>
@stop

@section('content')


    <form action={{route("Participantes.store")}} method="post">
        @csrf
        <label for="">CI:</label>
        <input type="text" name="ci" id="ci" required>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="">Apellido Paterno:</label>
        <input type="text" name="apellido_p" id="apellido_p">
        <label for="">Apellido Materno:</label>
        <input type="text" name="apellido_m" id="apellido_m">
        <button type="submit">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
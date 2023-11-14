@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FACULTADES U.A.T.F.</h1>
@stop

@section('content')


    <form action={{route("Facultades.store")}} method="post">
        @csrf
        <input type="text" name="Agregar" id="agregar">
        <button type="submit">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
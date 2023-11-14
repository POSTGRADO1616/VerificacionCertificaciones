@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Carreras U.A.T.F.</h1>
@stop

@section('content')


    <form action="{{ route('Carreras.store') }}" method="post">
    @csrf

    <label for="facultad">Facultad:</label>
    <select name="facultad" id="facultad" required>
        {{-- Iterar sobre las facultades y generar opciones --}}
        @foreach($facultades as $facultad)
            <option value="{{ $facultad->id }}">{{ $facultad->NombreFacultad }}</option>
        @endforeach
    </select>

    <label for="carrera">Nombre de la Carrera:</label>
    <input type="text" name="carrera" id="carrera" required>

    <button type="submit">Agregar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
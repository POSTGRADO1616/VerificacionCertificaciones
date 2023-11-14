@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CURSOS U.A.T.F.</h1>
@stop

@section('content')
    <form action="{{ route('Cursos.store') }}" method="post">
        @csrf

        <label for="facultad">Facultad:</label>
        <select name="facultad" id="facultad" required>
            {{-- Iterar sobre las facultades y generar opciones --}}
            @foreach($facultades as $f)
                <option value="{{ $f->id }}">{{ $f->NombreFacultad }}</option>
            @endforeach
        </select>

        <label for="carrera">Carrera:</label>
<select name="carrera" id="carrera" required>
    {{-- Las carreras se llenarán dinámicamente según la facultad seleccionada --}}
    @foreach($carreras as $carrera)
        <option value="{{ $carrera->id }}">{{ $carrera->NombreCarrera }}</option>
    @endforeach
</select>



        <label for="curso">Nombre del Curso:</label>
        <input type="text" name="curso" id="curso" required>

        <button type="submit">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        // Tu script JavaScript aquí, si es necesario
    </script>
@stop

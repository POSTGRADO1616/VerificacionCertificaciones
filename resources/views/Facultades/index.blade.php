@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FACULTADES U.A.T.F.</h1>
@stop

@section('content')

    <form action={{route('Facultades.create')}} method="get">
        <input type="submit" value="Agregar">
    </form>
    {{-- Setup data for datatables --}}
    @php
    $heads = [
        'ID',
        'Facultad',
        ['label' => 'Actions', 'no-export' => true, 'width' => 5],
    ];

    
    $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button>';

    $dataArray = [];
    foreach ($facultades as $key => $value) {
        array_push($dataArray, [
            'id' => $value->id,
            'NombreFacultad' => $value->NombreFacultad,
            "<nobr> 
                <form action='" . route('Facultades.edit', ['Facultade' => $value->id]) . "' method='GET'>
                    <button class='btn btn-xs btn-default text-teal mx-1 shadow' title='Details'>
                        <i class='fa fa-lg fa-fw fa-pen'></i>
                    </button>
                </form>"
                .
                "<form action='" . route('Facultades.destroy', ['Facultade' => $value->id]) . "' method='POST'>
                " . csrf_field() . "
                " . method_field('DELETE') . "
                    <button class='btn btn-xs btn-default text-danger mx-1 shadow' title='Details'>
                        <i class='fa fa-lg fa-fw fa-trash'></i>
                    </button>
                </form>"
                .
            "</nobr>"
        ]);
    }
    $config = [
        'data' => $dataArray,
        'order' => [[1, 'asc']],
        'columns' => [null, null, ['orderable' => false]],
    ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads">
        @foreach($config['data'] as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
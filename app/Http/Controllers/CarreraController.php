<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Facultad;;
class CarreraController extends Controller


{
    public function index()
    {
        $carreras = Carrera::with('facultad')->select('id', 'NombreCarrera', 'idFacultad')->get();
        return view('Carreras.index', compact('carreras'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {   $facultades = Facultad::all();
        return view('Carreras.agregar', compact('facultades'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        Carrera::create([
        'NombreCarrera' => $request->carrera,
        'idFacultad' => $request->facultad
        ]);
        
        return redirect()->route('Carreras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($carrera)
{
    
    $carreras=Carrera::find($carrera);
    $facultades = Facultad::all();
    return view('Carreras.editar', compact('carreras', 'facultades'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $carrera)
    {
        $carreraAct = Carrera::find($carrera);
        $carreraAct->update([
            "NombreCarrera" => $request->EdicionCarrera,
            "idFacultad" => $request->idFacultad,
        ]);
    
        return redirect()->route('Carreras.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($carrera)
    {
        Carrera::destroy($carrera);
        return redirect()->route('Carreras.index');
    }
}

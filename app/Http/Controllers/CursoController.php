<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Facultad;;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::with('facultad', 'carrera')->select('id', 'nombre', 'idFacultad', 'idCarrera')->get();
        return view('Cursos.index', compact('cursos'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facultades = Facultad::all();
        $carreras = Carrera::all();;  
        return view('Cursos.agregar', compact('facultades', 'carreras'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Curso::create([
            'nombre' => $request->curso,
            'idCarrera' => $request->carrera,
            'idFacultad' => $request->facultad
            ]);
            
            return redirect()->route('Cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($curso)
    {
        $cursos=Curso::find($curso);
        $carreras = Carrera::all();
        $facultades = Facultad::all();
        return view('Cursos.editar', compact('cursos','carreras', 'facultades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$curso)
    {
        $cursoAct = Carrera::find($curso);
        $cursoAct->update([
            "nombre" => $request->EdicionCarrera,
            "idFacultad" => $request->idFacultad,
            "idCarrera" => $request->idCarrera,
        ]);
    
        return redirect()->route('Cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultades=Facultad::select('id','NombreFacultad')->get();
        return view('Facultades.index', compact('facultades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Facultades.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Facultad::create([
            'NombreFacultad'=>$request->Agregar
        ]);
        return redirect()->route('Facultades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($facultad)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($facultad)
    {
        $facultades=Facultad::find($facultad);
        return view('Facultades.editar', compact('facultades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $facultad)
    {
        $facultadAct=Facultad::find($facultad);
        $facultadAct->update([
            "NombreFacultad"=>$request->EdicionFacultad
        ]);
        return redirect()->route('Facultades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($facultad)
    {
        Facultad::destroy($facultad);
        return redirect()->route('Facultades.index');
    }
}

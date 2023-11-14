<?php

namespace App\Http\Controllers;
use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participantes=Participante::select('id','ci','nombre','apellido_paterno','apellido_materno')->get();
        return view('Participantes.index', compact('participantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Participantes.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Participante::create([
            'ci'=>$request->ci,
            'nombre'=>$request->nombre,
            'apellido_paterno'=>$request->apellido_p,
            'apellido_materno'=>$request->apellido_m
            
        ]);
        return redirect()->route('Participantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participante $participante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participante $participante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participante $participante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participante $participante)
    {
        //
    }
}

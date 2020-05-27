<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langilea;
use App\Argazkia;
use App\Zita;
    

class LangileaController extends Controller {

    public function listaTrabajadores() {
        $trabajadores = Langilea::all();

        return view('trabajadores.galeria', compact("trabajadores"));
    }

    public function artista($id) {
        $trabajadores = Langilea::all();
        $trabajador = Langilea::findOrFail($id);
        $fotos = Argazkia::where('langile_id', $id)->get();
        //$fotos = $trabajador->argazkiak;

        return view('trabajadores.trabajos',  compact("trabajadores", "trabajador","fotos"));
    }
    

    public function perfil($id) {   
        
        $zitas = Zita::findOrFail($id);
        $trabajadores = Langilea::all();
        $trabajador = Langilea::where('erabiltzailea_id', $id);
        $foto = Argazkia::where('langile_id', $id)->where('izena', 'perfil')->get();

        return view('trabajadores.perfil',  compact("trabajadores", "trabajador", "foto", "zitas"));       
    }
       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Langilea  $langilea
     * @return \Illuminate\Http\Response
     */
    public function show(Langilea $langilea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Langilea  $langilea
     * @return \Illuminate\Http\Response
     */
    public function edit(Langilea $langilea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Langilea  $langilea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Langilea $langilea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Langilea  $langilea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Langilea $langilea)
    {
        //
    }
}

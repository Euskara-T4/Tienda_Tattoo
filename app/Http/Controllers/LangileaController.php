<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langilea;
use App\Argazkia;

class LangileaController extends Controller {

    // SECCION TRABAJADORES
    public function listaTrabajadores() {
        return view('trabajadores.galeria');
    }

    // TRABAJOS REALIZADOS POR UN TRABAJADOR
    public function trabajador() {
        return view('trabajadores.trabajos');
    }

    // SECCION DE CITAS QUE TIENE
    public function tablaCitas() {
        return view('trabajadores.citas');
    }
    
    // SECCION DE TODAS LAS FOTOS
    public function galeria() {
        $argazkiak = Argazkia::all();
        return view('trabajadores.galeria', compact('argazkiak'));
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

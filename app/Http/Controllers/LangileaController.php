<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langilea;
use App\Argazkia;
use App\Zita;

class LangileaController extends Controller {

    // SECCION TRABAJADORES
    public function listaTrabajadores() {
        $trabajadores = Langilea::all();

        return view('trabajadores.galeria', compact("trabajadores"));
    }

    // TRABAJOS REALIZADOS POR UN TRABAJADOR
    public function perfil($id) {     
        $zitas = Zita::findOrFail($id);

        $trabajadores = Langilea::all();
        $trabajador = Langilea::findOrFail($id);
        
        return view('trabajadores.perfil',  compact("trabajadores", "trabajador" ,"zitas"));       
    }

    public function artista($img_id) {


       $foto = Argazkia::all();
        $trabajadores = Langilea::all();
        $trabajador = Langilea::findOrFail($img_id);

        return view('trabajadores.trabajos',  compact("trabajadores", "trabajador","foto"));
    }
    

    // TRABAJOS REALIZADOS POR UN TRABAJADOR
    public function trabajador($id) {
        // if(Auth::check() ) {
        //     $usuario = Auth::user();
        // } else {
        //     $usuario = "anonimo";
        // }
        
        $trabajadores = Langilea::all();
        $trabajador = Langilea::findOrFail($id);

        return view('trabajadores.perfil',  compact("trabajadores", "trabajador"));
    }

    // SECCION DE CITAS QUE TIENE
    public function tablaCitas() {
        $trabajadores = Langilea::all();

        return view('trabajadores.citas', compact("trabajadores"));
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

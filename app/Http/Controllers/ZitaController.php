<?php

namespace App\Http\Controllers;

use App\Zita;
use App\Langilea;
use Illuminate\Http\Request;

class ZitaController extends Controller
{

    public function cita() {
        $trabajadores = Langilea::all();

        return view('formularioCita', compact("trabajadores"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviarFormulario(Request $formulario)
    {


        $zita = new Zita();

        $zita->deskripzioa = $formulario->descripcion;
        $zita->lana_id = $formulario->lana_id;
        $zita->ordutegia =$formulario->ordutegia;
        
        $zita->save();

        return back()->with('enviarFormulario' , 'se ha enviado correctamente');
    }




     /**
     * Display the specified resource.
     *
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function show(Zita $zita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function edit(Zita $zita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zita $zita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zita $zita)
    {
        //
    }


    }


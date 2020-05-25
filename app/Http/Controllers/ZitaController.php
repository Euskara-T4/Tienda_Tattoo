<?php

namespace App\Http\Controllers;

use App\Lana;
use App\Zita;
use App\Langilea;
use Illuminate\Http\Request;

class ZitaController extends Controller
{

    // SECCION DE CITAS QUE TIENE
    public function tablaCitas() {
        $trabajadores = Langilea::all();
        $zitas = Zita::all();


        return view('trabajadores.citas', compact("trabajadores", "zitas"));
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
        $zita->bezero_izena = $formulario->nombre;
        $zita->bezero_email = $formulario->email;
        $zita->deskripzioa = $formulario->mensaje;
        $zita->lana_id = $formulario->trabajo;
        $zita->telefonoa = $formulario->movil;

        $zita->save();

        return back()->with('enviarFormulario' , 'se ha enviado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function edit($zitaID)
    {
        $trabajadores = Langilea::all();
        $zitaActualizar = Zita::findOrFail($zitaID);

        return view('trabajadores.editar', compact('zitaActualizar', 'trabajadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $zitaID)
    {
        $zita = Zita::findOrFiail($zitaID);
        $zita->bezero_izena = $request->nombre;
        $zita->bezero_email = $request->email;
        $zita->deskripzioa = $request->desk;
        $zita->lana_id = $request->trabajo;
        $zita->telefonoa = $request->movil;

        $zita->save();

        return redirect()->route('perfil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function destroy($zitaBorrar)
    {
        $zita = Zita::findorFail($zitaBorrar);
        $zita->delete();

        return back();
    }

}

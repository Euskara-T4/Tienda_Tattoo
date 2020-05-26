<?php

namespace App\Http\Controllers;

use App\Lana;
use App\Zita;
use App\Langilea;
use Illuminate\Http\Request;

class ZitaController extends Controller
{

    public function tablaCitas() {
        $trabajadores = Langilea::all();
        $zitas = Zita::all();

        return view('trabajadores.citas', compact("trabajadores", "zitas"));
    }

    public function tablaCitaTrabajador($id) {
        $trabajadores = Langilea::all();
        $zitas = Zita::where('lana_id', $id)->firstOrFail();
  
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zita  $zita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $zitaID)
    {
        $zita = Zita::findOrFail($zitaID);
        $zita->eguna = $request->eguna;
        $zita->ordua = $request->ordua;        
        $zita->save();

        return redirect()->route('citas');
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

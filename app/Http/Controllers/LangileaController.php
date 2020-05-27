<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        $trabajadores = Langilea::all();
        $trabajador = Auth::user()->langilea;      
        $fotos = Argazkia::all();

        // $trabajador = Langilea::where('erabiltzailea_id','=', $id)->get();
        //$fotos = Argazkia::where('langile_id', $id)->get();

        return view('trabajadores.perfil',  compact("trabajadores", "trabajador", "fotos"));       
    }
       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Langilea  $langilea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $langilea_id)
    {
        $langilea = Langilea::findOrFail($langilea_id);
        $langilea->izena = $request->izena;
        /* $langilea->abizena = $request->abizena;   
        $langilea->erabiltzailea->username = $request->username;        
        $langilea->erabiltzailea->email = $request->email;        
 */
        $langilea->save();

        return redirect()->route('perfil');
    
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

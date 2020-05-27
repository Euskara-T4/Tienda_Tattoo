<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Lana;
use App\Argazkia;
use App\Langilea;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index() {        
        $trabajadores = Langilea::all();

        return view('home', compact("trabajadores"));
    }

     // SECCION DE TODAS LAS FOTOS
     public function galeria() {
         
        $trabajadores = Langilea::all();
        $argazkiak = Argazkia::all();

        return view('galeria', compact('trabajadores', 'argazkiak'));
    }

    // SECCION PREGUNTAS
    public function preguntas() {
        $trabajadores = Langilea::all();

        return view('preguntas', compact("trabajadores"));

    }

    // SECCION SOBRE NOSOTROS
    public function sobreNosotros() {
        $trabajadores = Langilea::all();
        $trabajos = Lana::all();

        return view('informacion', compact("trabajadores", "trabajos"));
    }


}
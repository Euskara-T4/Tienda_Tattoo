<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome() {
        return view('welcome');
    }


    public function index() {
        return view('home');
    }


    // SECCION SOBRE NOSOTROS
    public function sobreNosotros() {
        return view('informacion');
    }


    // SECCION PARA COGER LA CITA
    public function formularioCita() {
        return view('formularioCita');
    }


    // SECCION PREGUNTAS
    public function preguntas() {
        return view('preguntas');
    }

}

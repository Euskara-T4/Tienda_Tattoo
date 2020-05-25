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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index() {
        if(Auth::check() ) {
            $usuario = Auth::user();
        } else {
            $usuario = "bezeroa";
        }

        $trabajadores = Langilea::all();

        return view('home', compact("usuario", "trabajadores"));
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


 

    /* ESTO EN PRINCIPIO LO HICIMOS PARA AÑADIR LOS TRABAJADORES
    public function registro() {
        $trabajadores = Langilea::all();
        return view('registro', compact("trabajadores"));
    }
    public function registrado(Request $registrado) {
        $user = new user;
        $user->izena = $registrado->nombre;
        $user->abizena = $registrado->apellido;
        $user->email =$registrado->email;
        $user->pasahitza = bcrypt($registrado->contraseña); // Se encripta la contraseña usando la función bcrypt().
        $user->save();
        return back()->with('registrado' , 'usuario registrado correctamente');
    }
    */
}

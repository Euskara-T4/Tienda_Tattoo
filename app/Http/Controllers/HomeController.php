<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langilea;
use App\User;
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

        $trabajadores = Langilea::all();

        return view('home', compact("trabajadores"));
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


    public function registro() {


        return view('registro');

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





}

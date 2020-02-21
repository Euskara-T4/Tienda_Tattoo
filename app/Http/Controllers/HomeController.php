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
<<<<<<< HEAD


=======
>>>>>>> fe9f39a283d927955458c39f9f961e80cefb1a46

    public function index() {
        $trabajadores = Langilea::all();

        return view('home', compact("trabajadores"));
    }


    // SECCION SOBRE NOSOTROS
    public function sobreNosotros() {
        $trabajadores = Langilea::all();

        return view('informacion', compact("trabajadores"));
    }


    // SECCION PARA COGER LA CITA
    public function formularioCita() {
        $trabajadores = Langilea::all();

        return view('formularioCita', compact("trabajadores"));
    }


    // SECCION PREGUNTAS
    public function preguntas() {
        $trabajadores = Langilea::all();

        return view('preguntas', compact("trabajadores"));

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

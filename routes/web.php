<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Middleware\CheckAdmin;

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
 
// Rutas para logearte
// Route::get('/login', 'Auth\LoginController@loginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'HomeController@index')->name('home');

Route::get('listaTrabajadores', 'LangileaController@listaTrabajadores')->name('listaTrabajadores');
Route::get('perfil{id}', 'LangileaController@perfil')->name('perfil');

Route::get('galeria', 'HomeController@galeria')->name('galeria');
Route::get('preguntas', 'HomeController@preguntas')->name('preguntas');
Route::get('sobreNosotros', 'HomeController@sobreNosotros')->name('sobreNosotros');

Route::get('formularioCita', 'ZitaController@cita')->name('formularioCita');
Route::post('enviarFormulario', 'ZitaController@enviarFormulario')->name('enviarFormulario');
Route::get('citas', 'ZitaController@tablaCitas')->name('citas');
Route::get('editar/{zita_id}', 'ZitaController@edit')->name('editar');
Route::put('update/{zita_id}', 'ZitaController@update')->name('update');
Route::delete('eliminar/{zita_id}', 'ZitaController@destroy')->name('eliminar');

// Route::get('registro', 'HomeController@registro')->name('registro');
// Route::post('registrado', 'HomeController@registrado')->name('registrado');


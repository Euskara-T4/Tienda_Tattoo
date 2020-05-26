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
Route::get('home', 'HomeController@index')->name('home');

Route::get('listaTrabajadores', 'LangileaController@listaTrabajadores')->name('listaTrabajadores');
Route::get('perfil{id}', 'LangileaController@perfil')->middleware('auth')->name('perfil');

Route::get('galeria', 'HomeController@galeria')->name('galeria');
Route::get('preguntas', 'HomeController@preguntas')->name('preguntas');
Route::get('sobreNosotros', 'HomeController@sobreNosotros')->name('sobreNosotros');

Route::get('formularioCita', 'ZitaController@cita')->name('formularioCita');
Route::post('enviarFormulario', 'ZitaController@enviarFormulario')->name('enviarFormulario');

Route::get('citas', 'ZitaController@tablaCitas')->middleware('is_admin')->name('citas');
Route::get('cita/trabajador{id}', 'ZitaController@tablaCitaTrabajador')->middleware('auth')->name('citaTrabajador');

Route::get('editar/{zita_id}', 'ZitaController@edit')->name('editar');
Route::put('update/{zita_id}', 'ZitaController@update')->name('update');
Route::delete('eliminar/{zita_id}', 'ZitaController@destroy')->name('eliminar');

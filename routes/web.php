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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
 
// Rutas para logearte
// Route::get('/login', 'Auth\LoginController@loginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'HomeController@index')->name('home');

Route::get('listaTrabajadores', 'LangileaController@listaTrabajadores')->name('listaTrabajadores');
Route::get('trabajador{id}', 'LangileaController@trabajador')->name('trabajador');

Route::get('galeria', 'HomeController@galeria')->name('galeria');

Route::get('preguntas', 'HomeController@preguntas')->name('preguntas');

Route::get('sobreNosotros', 'HomeController@sobreNosotros')->name('sobreNosotros');

Route::get('formularioCita', 'ZitaController@cita')->name('formularioCita');
Route::post('enviarFormulario', 'ZitaController@enviarFormulario')->name('enviarFormulario');

// Route::get('registro', 'HomeController@registro')->name('registro');
// Route::post('registrado', 'HomeController@registrado')->name('registrado');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

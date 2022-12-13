<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VerificardispController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registrar');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/inicio2', function () {
    return view('inicio2');
});

Route::get('/inicio3', function () {
    return view('inicio3');
});

Route::get('/misdispositivos', function () {
    return view('dispositivo/index2');
});

Route::get('/misvehiculos', function () {
    return view('vehiculo/index2');
});

//Usuario
Route::post('/login', 'App\Http\Controllers\UsuarioController@login')->name("usuario.login");
Route::post('/registrar', 'App\Http\Controllers\UsuarioController@registrar')->name("usuario.registrar");

//Plantilla
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('alumno', 'App\Http\Controllers\AlumnoController@index')->name("alumno.index");
Route::get('alumno/create', 'App\Http\Controllers\AlumnoController@create')->name("alumno.create");
Route::get('alumno/store', 'App\Http\Controllers\AlumnoController@store')->name("alumno.store");
Route::get('alumno/{idalumno}/update', 'App\Http\Controllers\AlumnoController@update')->name("alumno.update");
Route::get('alumno/{idalumno}/edit', 'App\Http\Controllers\AlumnoController@edit')->name("alumno.edit");
Route::get('cancelar', function(){
    return redirect()->route('alumno.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('alumno/{idalumno}/confirmar', 'App\Http\Controllers\AlumnoController@confirmar')->name("alumno.confirmar");
Route::get('alumno/{idalumno}/destroy', 'App\Http\Controllers\AlumnoController@destroy')->name("alumno.destroy");

//Dispositivo
Route::get('dispositivo', 'App\Http\Controllers\DispositivoController@index')->name("dispositivo.index");
Route::get('dispositivo/create', 'App\Http\Controllers\DispositivoController@create')->name("dispositivo.create");
Route::get('dispositivo/store', 'App\Http\Controllers\DispositivoController@store')->name("dispositivo.store");
Route::patch('dispositivo/update/{iddispositivo}', 'App\Http\Controllers\DispositivoController@update')->name("dispositivo.update");
Route::get('dispositivo/{iddispositivo}/edit', 'App\Http\Controllers\DispositivoController@edit')->name("dispositivo.edit");
Route::get('cancelar', function(){
    return redirect()->route('dispositivo.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::delete('dispositivo/destroy/{iddispositivo}', 'App\Http\Controllers\DispositivoController@destroy')->name("dispositivo.destroy");

//Vehiculo
Route::get('vehiculo', 'App\Http\Controllers\VehiculoController@index')->name("vehiculo.index");
Route::get('vehiculo/create', 'App\Http\Controllers\VehiculoController@create')->name("vehiculo.create");
Route::get('vehiculo/store', 'App\Http\Controllers\VehiculoController@store')->name("vehiculo.store");
Route::patch('vehiculo/update/{idvehiculo}', 'App\Http\Controllers\VehiculoController@update')->name("vehiculo.update");
Route::get('vehiculo/edit/{idvehiculo}', 'App\Http\Controllers\VehiculoController@edit')->name("vehiculo.edit");
Route::get('cancelar', function(){
    return redirect()->route('vehiculo.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('vehiculo/{idvehiculo}/confirmar', 'App\Http\Controllers\VehiculoController@confirmar')->name("vehiculo.confirmar");
Route::delete('vehiculo/destroy/{idvehiculo}', 'App\Http\Controllers\VehiculoController@destroy')->name("vehiculo.destroy");

//Usuario
Route::get('usuario', 'App\Http\Controllers\UsuarioController@index')->name("usuario.index");
Route::get('usuario/create', 'App\Http\Controllers\UsuarioController@create')->name("usuario.create");
Route::get('usuario/store', 'App\Http\Controllers\UsuarioController@store')->name("usuario.store");
Route::patch('usuario/update/{id}', 'App\Http\Controllers\UsuarioController@update')->name("usuario.update");
Route::get('usuario/{idusuario}/edit', 'App\Http\Controllers\UsuarioController@edit')->name("usuario.edit");
Route::get('usuario/cancelar', function(){
    return redirect()->route('usuario.index')->with('datos', 'Acción Cancelada');
})->name('usuario/cancelar');
Route::delete('usuario/destroy/{id}', 'App\Http\Controllers\UsuarioController@destroy')->name("usuario.destroy");

//Vigilante
Route::get('vigilante', 'App\Http\Controllers\VigilanteController@index')->name("vigilante.index");
Route::get('vigilante/create', 'App\Http\Controllers\VigilanteController@create')->name("vigilante.create");
Route::get('vigilante/store', 'App\Http\Controllers\VigilanteController@store')->name("vigilante.store");

Route::get('vigilante/{idvigilante}/update', 'App\Http\Controllers\VigilanteController@update')->name("vigilante.update");
Route::get('vigilante/{idvigilante}/edit', 'App\Http\Controllers\VigilanteController@edit')->name("vigilante.edit");
Route::get('cancelar', function(){
    return redirect()->route('vigilante.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('vigilante/{idvigilante}/confirmar', 'App\Http\Controllers\VigilanteController@confirmar')->name("vigilante.confirmar");
Route::get('vigilante/{idvigilante}/destroy', 'App\Http\Controllers\VigilanteController@destroy')->name("vigilante.destroy");

//Personal
Route::get('personal', 'App\Http\Controllers\PersonalController@index')->name("personal.index");
Route::get('personal/create', 'App\Http\Controllers\PersonalController@create')->name("personal.create");
Route::get('personal/store', 'App\Http\Controllers\PersonalController@store')->name("personal.store");

Route::get('personal/{idpersonal}/update', 'App\Http\Controllers\PersonalController@update')->name("personal.update");
Route::get('personal/{idpersonal}/edit', 'App\Http\Controllers\PersonalController@edit')->name("personal.edit");
Route::get('cancelar', function(){
    return redirect()->route('personal.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('personal/{idpersonal}/confirmar', 'App\Http\Controllers\PersonalController@confirmar')->name("personal.confirmar");
Route::get('personal/{idpersonal}/destroy', 'App\Http\Controllers\PersonalController@destroy')->name("personal.destroy");

//Verificar
Route::get('verificar', 'App\Http\Controllers\VerificardispController@index')->name("verificar.vdispositivo");
Route::get('verificarv', 'App\Http\Controllers\VerificardispController@index2')->name("verificar.vvehiculo");
Route::get('verificar/create', 'App\Http\Controllers\VerificardispController@create')->name("verificar.create1");
Route::get('verificar/store', 'App\Http\Controllers\VerificardispController@store')->name("verificar.store");
Route::get('verificar/{iddis}/buscar', 'App\Http\Controllers\VerificardispController@show')->name("verificar.show");

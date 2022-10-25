<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\UsuarioController;
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
    return view('bienvenido');
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

Route::get('dispositivo', 'App\Http\Controllers\DispositivoController@index')->name("dispositivo.index");
Route::get('create', 'App\Http\Controllers\DispositivoController@create')->name("dispositivo.create");
Route::get('store', 'App\Http\Controllers\DispositivoController@store')->name("dispositivo.store");
Route::get('dispositivo/{iddispositivo}/update', 'App\Http\Controllers\DispositivoController@update')->name("dispositivo.update");
Route::get('dispositivo/{iddispositivo}/edit', 'App\Http\Controllers\DispositivoController@edit')->name("dispositivo.edit");
Route::get('cancelar', function(){
    return redirect()->route('dispositivo.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('confirmar', 'App\Http\Controllers\DispositivoController@confirmar')->name("dispositivo.confirmar");
Route::get('destroy', 'App\Http\Controllers\DispositivoController@destroy')->name("dispositivo.destroy");

Route::get('vehiculo', 'App\Http\Controllers\VehiculoController@index')->name("vehiculo.index");
Route::get('vehiculo/create', 'App\Http\Controllers\VehiculoController@create')->name("vehiculo.create");
Route::get('vehiculo/store', 'App\Http\Controllers\VehiculoController@store')->name("vehiculo.store");
Route::get('vehiculo/{idvehiculo}/update', 'App\Http\Controllers\VehiculoController@update')->name("vehiculo.update");
Route::get('vehiculo/{idvehiculo}/edit', 'App\Http\Controllers\VehiculoController@edit')->name("vehiculo.edit");
Route::get('cancelar', function(){
    return redirect()->route('vehiculo.index')->with('datos', 'Acción Cancelada');
})->name('cancelar');
Route::get('vehiculo/{idvehiculo}/confirmar', 'App\Http\Controllers\VehiculoController@confirmar')->name("vehiculo.confirmar");
Route::get('vehiculo/{idvehiculo}/destroy', 'App\Http\Controllers\VehiculoController@destroy')->name("vehiculo.destroy");

Route::get('usuario', 'App\Http\Controllers\UsuarioController@index')->name("usuario.index");
Route::get('usuario/create', 'App\Http\Controllers\UsuarioController@create')->name("usuario.create");
Route::get('usuario/store', 'App\Http\Controllers\UsuarioController@store')->name("usuario.store");
Route::get('usuario/{idusuario}/update', 'App\Http\Controllers\UsuarioController@update')->name("usuario.update");
Route::get('usuario/{idusuario}/edit', 'App\Http\Controllers\UsuarioController@edit')->name("usuario.edit");
Route::get('usuario/cancelar', function(){
    return redirect()->route('usuario.index')->with('datos', 'Acción Cancelada');
})->name('usuario/cancelar');
Route::get('usuario/{idusuario}/confirmar', 'App\Http\Controllers\UsuarioController@confirmar')->name("usuario.confirmar");
Route::get('usuario/{idusuario}/destroy', 'App\Http\Controllers\UsuariooController@destroy')->name("usuario.destroy");
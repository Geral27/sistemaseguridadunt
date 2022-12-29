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
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('inicio');
});

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
Route::get('dispositivopdf', 'App\Http\Controllers\DispositivoController@descargar')->name("dispositivo.pdf");

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
Route::get('vehiculopdf', 'App\Http\Controllers\VehiculoController@descargar')->name("vehiculo.pdf");

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
Route::get('usuariopdf', 'App\Http\Controllers\UsuarioController@descargar')->name("usuario.pdf");

//Verificar
Route::get('verificar', 'App\Http\Controllers\VerificardispController@index')->name("verificar.vdispositivo");
Route::get('verificarv', 'App\Http\Controllers\VerificardispController@index2')->name("verificar.vvehiculo");
Route::get('verificar/create', 'App\Http\Controllers\VerificardispController@create')->name("verificar.create1");
Route::get('verificar/store', 'App\Http\Controllers\VerificardispController@store')->name("verificar.store");
Route::get('verificar/{iddis}/buscar', 'App\Http\Controllers\VerificardispController@show')->name("verificar.show");
Route::get('verificar/create2', 'App\Http\Controllers\VerificardispController@create2')->name("verificar.create2");
Route::get('verificar/store2', 'App\Http\Controllers\VerificardispController@store2')->name("verificar.store2");
Route::get('verificar/{idplac}/buscar2', 'App\Http\Controllers\VerificardispController@buscarve')->name("verificar.show2");
Route::get('verificardispdf', 'App\Http\Controllers\VerificardispController@descargar1')->name("verificar.verificardispdf");
Route::get('verificarvepdf', 'App\Http\Controllers\VerificardispController@descargar2')->name("verificar.verificarvepdf");

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo = Vehiculo::where('estado', '=', '1')->get();
        return view('vehiculo.index', compact('vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Alumno::all();
        return view('vehiculo.create',compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = Alumno::all();
        $vehiculo = new Vehiculo();
        $vehiculo->codigovehiculo=$request->codigovehiculo;
        $vehiculo->tipovehiculo=$request->tipovehiculo;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->placa=$request->placa;
        $vehiculo->soat=$request->soat;
        $vehiculo->facultad=$request->facultad;
        $vehiculo->escuela=$request->escuela;
        $vehiculo->idalumno=$request->idalumno;
        $vehiculo->estado='1';
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idvehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idvehiculo)
    {
        $alumno = Alumno::all();
        $vehiculo=Vehiculo::findOrFail($idvehiculo);
        
        return view('vehiculo.edit', compact('vehiculo', 'alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvehiculo)
    {
        $vehiculo=Vehiculo::findOrFail($idvehiculo);
        $vehiculo->codigovehiculo=$request->codigovehiculo;
        $vehiculo->tipovehiculo=$request->tipovehiculo;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->placa=$request->placa;
        $vehiculo->soat=$request->soat;
        $vehiculo->facultad=$request->facultad;
        $vehiculo->escuela=$request->escuela;
        $vehiculo->idalumno=$request->idalumno;
        $vehiculo->estado='1';
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvehiculo)
    {
        $vehiculo=Vehiculo::findOrFail($idvehiculo);
        $vehiculo->estado='0';
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('datos', 'Registro eliminado');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivo = Dispositivo::where('estado', '=', '1')->get();
        return view('dispositivo.index', compact('dispositivo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Alumno::all();
        return view('dispositivo.create',compact('alumno'));
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
        $dispositivo = new Dispositivo();
        $dispositivo->codigodispositivo=$request->codigodispositivo;
        $dispositivo->tipodispositivo=$request->tipodispositivo;
        $dispositivo->marca=$request->marca;
        $dispositivo->color=$request->color;
        $dispositivo->serie=$request->serie;
        $dispositivo->alumno_id=$request->idalumno;
        $dispositivo->facultad=$request->facultad;
        $dispositivo->escuela=$request->escuela;
        $dispositivo->estado='1';
        $dispositivo->save();
        return redirect()->route('dispositivo.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    // $iddispositivo
    {
        $alumno = Alumno::all();
        $dispositivo = new Dispositivo();
        $dispositivo->codigodispositivo=$request->codigodispositivo;
        $dispositivo->tipodispositivo=$request->tipodispositivo;
        $dispositivo->marca=$request->marca;
        $dispositivo->color=$request->color;
        $dispositivo->serie=$request->serie;
        $dispositivo->alumno_id=$request->idalumno;
        $dispositivo->facultad=$request->facultad;
        $dispositivo->escuela=$request->escuela;
        $dispositivo->estado='1';
        $dispositivo->save();
        return redirect()->route('dispositivo.index2')->with('datos', 'Mis dispositivos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($iddispositivo)
    {
        $alumno = Alumno::all();
        $dispositivo=Dispositivo::findOrFail($iddispositivo);

        return view('dispositivo.edit', compact('dispositivo', 'alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iddispositivo)
    {
        $dispositivo = Dispositivo::findOrFail($iddispositivo);
        $dispositivo->codigodispositivo=$request->codigodispositivo;
        $dispositivo->tipodispositivo=$request->tipodispositivo;
        $dispositivo->marca=$request->marca;
        $dispositivo->color=$request->color;
        $dispositivo->serie=$request->serie;
        $dispositivo->alumno_id=$request->idalumno;
        $dispositivo->facultad=$request->facultad;
        $dispositivo->escuela=$request->escuela;
        $dispositivo->estado='1';
        $dispositivo->save();
        return redirect()->route('dispositivo.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddispositivo)
    {
        $dispositivo=Dispositivo::findOrFail($iddispositivo);
        $dispositivo->estado='0';
        $dispositivo->save();
        return redirect()->route('dispositivo.index')->with('datos', 'Registro eliminado');
    }
}

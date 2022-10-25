<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Alumno::where('estado', '=', '1')->get();
        return view('alumno.index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'dni' => 'required|max:8',
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'codigomatricula' => 'required|max:10',
            'facultad' => 'required|max:100',
            'escuela' => 'required|max:100',
            'telefono' => 'required|max:9',
            'correo' => 'required|max:100'
        ],
        [
            'dni.required' => 'Ingresar dni del alumno.',
            'dni.max' => 'Máximo 8 caracteres.',
            'nombres.required' => 'Ingresar nombres del alumno.',
            'apellidos.required' => 'Ingresar apellidos del alumno.',
            'codigomatricula.required' => 'Ingresar código de matrícula del alumno.',
            'codigomatricula.max' => 'Máximo 10 caracteres.',
            'facultad.required' => 'Ingresar facultad del alumno.',
            'escuela.required' => 'Ingresar escuela del alumno.',
            'telefono.required' => 'Ingresar telefono del alumno.',
            'telefono.max' => 'Máximo 9 caracteres.',
            'correo.required' => 'Ingresar correo del alumno.'
        ]);
        $alumno = new Alumno();
        $alumno->dni=$request->dni;
        $alumno->nombres=$request->nombres;
        $alumno->apellidos=$request->apellidos;
        $alumno->codigomatricula=$request->codigomatricula;
        $alumno->facultad=$request->facultad;
        $alumno->escuela=$request->escuela;
        $alumno->telefono=$request->telefono;
        $alumno->correo=$request->correo;
        $alumno->estado='1';
        $alumno->save();
        return redirect()->route('alumno.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idalumno)
    {
        $alumno=Alumno::findOrFail($idalumno);
        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idalumno)
    {
        $data=request()->validate([
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'codigomatricula' => 'required|max:10',
            'facultad' => 'required|max:100',
            'escuela' => 'required|max:100',
            'telefono' => 'required|max:9',
            'correo' => 'required|max:100'
        ],
        [
            'nombres.required' => 'Ingresar nombres del alumno.',
            'apellidos.required' => 'Ingresar apellidos del alumno.',
            'codigomatricula.required' => 'Ingresar código de matrícula del alumno.',
            'codigomatricula.max' => 'Máximo 10 caracteres.',
            'facultad.required' => 'Ingresar facultad del alumno.',
            'escuela.required' => 'Ingresar escuela del alumno.',
            'telefono.required' => 'Ingresar telefono del alumno.',
            'telefono.max' => 'Máximo 9 caracteres.',
            'correo.required' => 'Ingresar correo del alumno.'
        ]);
        error_log("2");
        $alumno = Alumno::findOrFail($idalumno);
        $alumno->nombres=$request->nombres;
        $alumno->apellidos=$request->apellidos;
        $alumno->codigomatricula=$request->codigomatricula;
        $alumno->facultad=$request->facultad;
        $alumno->escuela=$request->escuela;
        $alumno->telefono=$request->telefono;
        $alumno->correo=$request->correo;
        $alumno->save();
        return redirect()->route('alumno.index')->with('datos', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idalumno)
    {
        $alumno=Alumno::findOrFail($idalumno);
        $alumno->estado='0';
        $alumno->save();
        return redirect()->route('alumno.index')->with('datos', 'Registro eliminado');
    }

    public function confirmar($idalumno)
    {
        $alumno=Alumno::findOrFail($idalumno);
        return view('alumno.confirmar', compact('alumno'));
    }
}

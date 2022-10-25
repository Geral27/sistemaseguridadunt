<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::where('estado', '=', '1')->get();
        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
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
        ],
        [
            'dni.required' => 'Ingresar dni del personal.',
            'dni.max' => 'Máximo 8 caracteres.',
            'nombres.required' => 'Ingresar nombres del personal.',
            'apellidos.required' => 'Ingresar apellidos del personal.',
        ]);
        $personal = new Personal();
        $personal->dni=$request->dni;
        $personal->nombres=$request->nombres;
        $personal->apellidos=$request->apellidos;
        $personal->estado='1';
        $personal->save();
        return redirect()->route('personal.index')->with('datos', 'Registro nuevo guardado');
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
    public function edit($idpersonal)
    {
        $personal=Personal::findOrFail($idpersonal);
        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpersonal)
    {
        $data=request()->validate([
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
        ],
        [
            'dni.max' => 'Máximo 8 caracteres.',
            'nombres.required' => 'Ingresar nombres del personal.',
            'apellidos.required' => 'Ingresar apellidos del personal.',
        ]);
        $personal = Personal::findOrFail($idpersonal);
        $personal->nombres=$request->nombres;
        $personal->apellidos=$request->apellidos;
        $personal->save();
        return redirect()->route('personal.index')->with('datos', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpersonal)
    {
        $personal=Personal::findOrFail($idpersonal);
        $personal->estado='0';
        $personal->save();
        return redirect()->route('personal.index')->with('datos', 'Registro eliminado');
    }

    public function confirmar($idpersonal)
    {
        $personal=Personal::findOrFail($idpersonal);
        return view('personal.confirmar', compact('personal'));
    }
}

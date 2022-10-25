<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vigilante;

class VigilanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vigilante = Vigilante::where('estado', '=', '1')->get();
        return view('vigilante.index', compact('vigilante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vigilante.create');
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
            'turno' => 'required|max:100',
        ],
        [
            'dni.required' => 'Ingresar dni del vigilante.',
            'dni.max' => 'Máximo 8 caracteres.',
            'nombres.required' => 'Ingresar nombres del vigilante.',
            'apellidos.required' => 'Ingresar apellidos del vigilante.',
        ]);
        $vigilante = new Vigilante();
        $vigilante->dni=$request->dni;
        $vigilante->nombres=$request->nombres;
        $vigilante->apellidos=$request->apellidos;
        $vigilante->turno=$request->turno;
        $vigilante->estado='1';
        $vigilante->save();
        return redirect()->route('vigilante.index')->with('datos', 'Registro nuevo guardado');
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
    public function edit($idvigilante)
    {
        $vigilante=Vigilante::findOrFail($idvigilante);
        return view('vigilante.edit', compact('vigilante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvigilante)
    {
        $data=request()->validate([
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'turno' => 'required|max:100',
        ],
        [
            'dni.max' => 'Máximo 8 caracteres.',
            'nombres.required' => 'Ingresar nombres del vigilante.',
            'apellidos.required' => 'Ingresar apellidos del vigilante.',
        ]);
        $vigilante = Vigilante::findOrFail($idvigilante);
        $vigilante->nombres=$request->nombres;
        $vigilante->apellidos=$request->apellidos;
        $vigilante->turno=$request->turno;
        $vigilante->save();
        return redirect()->route('vigilante.index')->with('datos', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvigilante)
    {
        $vigilante=Vigilante::findOrFail($idvigilante);
        $vigilante->estado='0';
        $vigilante->save();
        return redirect()->route('vigilante.index')->with('datos', 'Registro eliminado');
    }

    public function confirmar($idvigilante)
    {
        $vigilante=Vigilante::findOrFail($idvigilante);
        return view('vigilante.confirmar', compact('vigilante'));
    }
}

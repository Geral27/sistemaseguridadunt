<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::where('estado', '=', '1')->get();
        return view('usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::all();
        return view('usuario.create',compact('rol'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = Rol::all();
        $usuario = new Usuario();
        $usuario->nombres=$request->nombres;
        $usuario->apellidos=$request->apellidos;
        $usuario->email=$request->email;
        $usuario->idrol=$request->idrol;
        $usuario->usuario=$request->usuario;
        $usuario->contraseña=$request->contraseña;
        $usuario->estado='1';
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos', 'Registro nuevo guardado');
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
    public function edit($idusuario)
    {
        $rol = Rol::all();
        $usuario=Usuario::findOrFail($idusuario);
        
        return view('usuario.edit', compact('usuario', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idusuario)
    {
        $usuario = Usuario::findOrFail($idusuario);
        $usuario->nombres=$request->nombres;
        $usuario->apellidos=$request->apellidos;
        $usuario->email=$request->email;
        $usuario->idrol=$request->idrol;
        $usuario->usuario=$request->usuario;
        $usuario->contraseña=$request->contraseña;
        $usuario->estado='1';
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idusuario)
    {
        $usuario=Usuario::findOrFail($idusuario);
        $usuario->estado='0';
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos', 'Registro eliminado');
    }
}

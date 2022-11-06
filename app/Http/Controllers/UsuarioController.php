<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rol;
use App\Models\User;

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

    public function login(Request $request){
        $data=request()->validate(
            [
                'email'=> 'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Ingresar Usuario',
                'password.required'=>'Ingresar Contraseña',

            ]
            );
            if(Auth::attempt($data)){
                $con='OK';
            }
        $email=$request->get('email');
        $query=User::where('email','=',$email)->get();
        if($query->count()!=0){
            $hashp=$query[0]->password;
            $password=$request->get('password');
            if(password_verify($password, $hashp)){
                return view('inicio');
            }
            else{
                return back()->withErrors(['password'=>'Contraseña inválida'])->withInput([request('password')]);
            }
        }
        else{
            return back()->withErrors(['email'=>'Email inválido'])->withInput([request('email')]);
        }

    }
}

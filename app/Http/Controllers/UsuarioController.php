<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = user::where('estado', '=', '1')->get();
        return view('usuario.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id = $request->input('user_id');
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->codigoi = $request->input('codigoi');
        $user->facultad = $request->input('facultad');
        $user->escuela = $request->input('escuela');
        $user->turno = $request->input('turno');
        $user->password = Hash::make($request->input('password'));
        $user->estado = '1';
        $user->save();

        $user->attachRole($request->input('role_id'));
        //event(new Registered($user));
        return redirect('usuario')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('usuario.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        $user->fill($input)->save();
        return redirect('usuario')->with('datos', 'Registro nuevo guardado');
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
                if(Auth::user()->hasRole('administrador')){
                    return view('inicio');
                }elseif(Auth::user()->hasRole('alumno')){
                    return view('inicio2');
                }elseif(Auth::user()->hasRole('vigilante')){
                    return view('inicio3');
                }elseif(Auth::user()->hasRole('personal')){
                    return view('inicio2');
                }
           }
            else{
                return back()->withErrors(['password'=>'Contraseña inválida'])->withInput([request('password')]);
            }
        }
        else{
            return back()->withErrors(['email'=>'Email inválido'])->withInput([request('email')]);
        }

    }

    public function registrar(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=>'required',
            'dni' => 'required',
            'direccion'=> 'required',
            'codigoi'=>'required'
        ]);
        Auth::login($user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'dni' => $request->dni,
            'direccion'=> $request->direccion,
            'telefono'=> $request->telefono,
            'turno'=> $request->turno,
            'codigoi' => $request->codigoi,
            'facultad'=> $request->facultad,
            'escuela'=> $request->escuela,
            'estado' => $user->estado = '1',
            'password'=> Hash:: make($request->password),
        ]));
        $user->attachRole($request->role_id);
        event(new Registered($user));
        return view('login');
    }
}

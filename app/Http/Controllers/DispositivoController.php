<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dispositivo;
use PDF;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        #$users = User::pluck('name','id');
        /* $alumnos = $users->where(function($query) {
            $query->hasRole('alumno');
        }); */
        foreach ($users as $k => $user) {
            if($user->hasRole('alumno')){
                $alumnos_id[] = $user->id;
                $alumnos_name[] = $user->name;
            }
        }
        $alumnos = array_combine($alumnos_id,$alumnos_name);
        $dispositivo = Dispositivo::where('estado', '=', '1')->with('user')->get();
        return view('dispositivo.index', compact('dispositivo','alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('dispositivo.create', compact('user'));
        //$alumno = Alumno::all();
        //return view('dispositivo.create',compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispositivo = new Dispositivo();
        $dispositivo->codigodispositivo = $request->input('codigodispositivo');
        $dispositivo->tipodispositivo = $request->input('tipodispositivo');
        $dispositivo->marca = $request->input('marca');
        $dispositivo->color = $request->input('color');
        $dispositivo->serie = $request->input('serie');
        $dispositivo->facultad = $request->input('facultad');
        $dispositivo->escuela = $request->input('escuela');
        $dispositivo->estado = '1';
        $dispositivo->user_id = $request->input('id_user');
        $dispositivo->save();
        return redirect('dispositivo')->with('datos', 'Registro nuevo guardado');
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
        //$alumno = Alumno::all();
        $dispositivo = new Dispositivo();
        /*$dispositivo->codigodispositivo=$request->codigodispositivo;
        $dispositivo->tipodispositivo=$request->tipodispositivo;
        $dispositivo->marca=$request->marca;
        $dispositivo->color=$request->color;
        $dispositivo->serie=$request->serie;
        $dispositivo->alumno_id=$request->idalumno;
        $dispositivo->facultad=$request->facultad;
        $dispositivo->escuela=$request->escuela;
        $dispositivo->estado='1';*/
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
        $user = User::all();
        $dispositivo=Dispositivo::findOrFail($iddispositivo);

        return view('dispositivo.edit', compact('dispositivo', 'user'));
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
        $input = $request->all();
        //$user->attachRole($request->input('role_id'));
        $dispositivo->fill($input)->save();
        return redirect('dispositivo')->with('datos', 'Registro nuevo guardado');
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
        return redirect('dispositivo')->with('datos', 'Registro eliminado');
    }

    public function descargar()
    {
        $dispositivo = Dispositivo::where('estado', '=', '1')->get();
        $pdf = PDF::loadView('dispositivo.pdf', compact('dispositivo'));
        return $pdf->download('dispositivo.pdf');
    }
}

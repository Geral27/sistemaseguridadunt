<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehiculo;
use PDF;

class VehiculoController extends Controller
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
        $vehiculo = Vehiculo::where('estado', '=', '1')->get();
        return view('vehiculo.index', compact('vehiculo','alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('vehiculo.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('estado','=','1')->get();
        $vehiculo = new Vehiculo();
        $vehiculo->codigovehiculo=$request->input('codigovehiculo');
        $vehiculo->tipovehiculo=$request->input('tipovehiculo');
        $vehiculo->modelo=$request->input('modelo');
        $vehiculo->placa=$request->input('placa');
        $vehiculo->soat=$request->input('soat');
        $vehiculo->facultad=$request->input('facultad');
        $vehiculo->escuela=$request->input('escuela');
        $vehiculo->user_id = $request->input('id_user');
        $vehiculo->estado='1';
        $vehiculo->save();
        return redirect('vehiculo')->with('datos', 'Registro nuevo guardado');
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
        $user = User::all();
        $vehiculo=Vehiculo::findOrFail($idvehiculo);

        return view('vehiculo.edit', compact('vehiculo', 'user'));
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
        $input = $request->all();
        $vehiculo->fill($input)->save();
        return redirect('vehiculo')->with('datos', 'Registro nuevo guardado');
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
        return redirect('vehiculo')->with('datos', 'Registro eliminado');
    }

    public function descargar()
    {
        $vehiculo = Vehiculo::where('estado', '=', '1')->get();
        $pdf = PDF::loadView('vehiculo.pdf', compact('vehiculo'));
        return $pdf->download('vehiculo.pdf');
    }
}

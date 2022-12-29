<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\VerificarDis;
use App\Models\VerificarVe;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use PDF;

class VerificardispController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        #$users = User::pluck('name','id');
        /* $alumnos = $users->where(function($query) {
            $query->hasRole('alumno');
        }); */
        foreach ($users as $k => $user) {
            if($user->hasRole('vigilante')){
                $alumnos_id[] = $user->id;
                $alumnos_name[] = $user->name;
            }
        }
        $alumnos = array_combine($alumnos_id,$alumnos_name);
        $verificardis = VerificarDis::where('estado', '=', '1')->get();
        return view('verificar.vdispositivo', compact('verificardis', 'alumnos'));
    }

    public function index2()
    {
        
        $users = User::all();
        #$users = User::pluck('name','id');
        /* $alumnos = $users->where(function($query) {
            $query->hasRole('alumno');
        }); */
        foreach ($users as $k => $user) {
            if($user->hasRole('vigilante')){
                $alumnos_id[] = $user->id;
                $alumnos_name[] = $user->name;
            }
        }
        $alumnos = array_combine($alumnos_id,$alumnos_name);
        $verificarve = VerificarVe::where('estado', '=', '1')->get();
        return view('verificar.vvehiculo', compact('verificarve', 'alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('verificar.create1', compact('user'));
    }

    public function create2()
    {
        $user = User::all();
        return view('verificar.create2', compact('user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificardis = new VerificarDis();
        $verificardis->dispositivo_id = $request->input('iddispositivo');
        $verificardis->user_id = $request->input('id_vigi');
        $verificardis->estado = '1';
        $verificardis->save();
        return redirect('verificar')->with('datos', 'Registro nuevo guardado');
    }

    public function store2(Request $request)
    {
        $verificarve = new VerificarVe();
        $verificarve->vehiculo_id = $request->input('idvehiculo');
        $verificarve->user_id = $request->input('id_vigi');
        $verificarve->estado = '1';
        $verificarve->save();
        return redirect('verificarv')->with('datos', 'Registro nuevo guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($iddis)
    {
        try {
            $dis = Dispositivo::where('codigodispositivo',$iddis)->with("user")->get();
            return $dis;
        } catch (\Throwable $th) {
            return new JsonResponse(["message" => 'Dispositivo no encontrado'], 404);
        }
    }

    public function buscarve($idplac)
    {
        $vev = Vehiculo::all();
        error_log($vev);
        try {
            $dis = Vehiculo::where('placa',$idplac)->with("user")->get();
            error_log($dis);
            return $dis;
            
        } catch (\Throwable $th) {
            return new JsonResponse(["message" => 'Vehiculo no encontrado'], 404);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function descargar1()
    {
        $verificardis = VerificarDis::where('estado', '=', '1')->get();
        $pdf = PDF::loadView('verificar.verificardispdf', compact('verificardis'));
        return $pdf->download('verificardis.pdf');
    }

    public function descargar2()
    {
        $verificarve = VerificarVe::where('estado', '=', '1')->get();
        $pdf = PDF::loadView('verificar.verificarvepdf', compact('verificarve'));
        return $pdf->download('verificarve.pdf');
    }
}

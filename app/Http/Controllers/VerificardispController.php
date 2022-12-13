<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use App\Models\VerificarDis;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class VerificardispController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verificardis = VerificarDis::get();
        return view('verificar.vdispositivo', compact('verificardis'));
    }

    public function index2()
    {
        //
        return view('verificar.vvehiculo');
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
        $verificardis->user_id = $request->input('id_user');
        $verificardis->estado = '1';
        $verificardis->save();
        return redirect('verificar')->with('datos', 'Registro nuevo guardado');
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
            $dis = Dispositivo::where('id',$iddis)->with("user")->get();
            return $dis;
        } catch (\Throwable $th) {
            return new JsonResponse(["message" => 'Dispositivo no encontrado'], 404);
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
}

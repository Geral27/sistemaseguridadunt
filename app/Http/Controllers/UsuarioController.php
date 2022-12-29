<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use PDF;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
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
        //$user->attachRole($request->input('role_id'));      
        $user->fill($input)->save();
        return redirect('usuario')->with('datos', 'Registro nuevo guardado');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->estado='0';
        $user->save();
        return redirect('usuario')->with('datos', 'Registro eliminado');
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
                    $chart_options = [
                        'chart_title' => 'Total de Usuarios',
                        'report_type' => 'group_by_date',
                        'model' => 'App\Models\User',
                        'group_by_field' => 'created_at',
                        'group_by_period' => 'day',
                        'chart_type' => 'bar',
                   ];
                   $chart = new LaravelChart($chart_options);
                   $chart_options1 = [
                        'chart_title' => 'Total de Dispositivos',
                        'report_type' => 'group_by_string',
                        'model' => 'App\Models\Dispositivo',
                        'group_by_field' => 'tipodispositivo',
                        'chart_type' => 'bar',
                    ];
                    $chart1 = new LaravelChart($chart_options1);
                    $chart_options2 = [
                        'chart_title' => 'Total de Vehículos',
                        'report_type' => 'group_by_string',
                        'model' => 'App\Models\Vehiculo',
                        'group_by_field' => 'tipovehiculo',
                        'chart_type' => 'bar',
                    ];
                    $chart2 = new LaravelChart($chart_options2);
                    $settings1 = [
                        'chart_title'           => 'Verfificaciones Dispositivos',
                        'chart_type'            => 'line',
                        'report_type'           => 'group_by_date',
                        'model'                 => 'App\Models\VerificarDis',
                        'group_by_field'        => 'created_at',
                        'group_by_period'       => 'day',
                        'aggregate_function'    => 'count',
                        'filter_field'          => 'created_at',
                    ];
                    $settings2 = [
                        'chart_title'           => 'Verfificaciones Vehículos',
                        'chart_type'            => 'line',
                        'report_type'           => 'group_by_date',
                        'model'                 => 'App\Models\VerificarVe',
                        'group_by_field'        => 'created_at',
                        'group_by_period'       => 'day',
                        'aggregate_function'    => 'count',
                        'filter_field'          => 'created_at',
                        // ... other values identical to $settings1
                    ];
                    $chart3 = new LaravelChart($settings1, $settings2);
                    return view('inicio', compact('chart', 'chart1', 'chart2', 'chart3'));
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

    public function descargar()
    {
        $user = User::where('estado', '=', '1')->get();
        $pdf = PDF::loadView('usuario.pdf', compact('user'));
        return $pdf->download('user.pdf');
    }
}

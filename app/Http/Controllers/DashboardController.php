<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
   public function index()
   {
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
}

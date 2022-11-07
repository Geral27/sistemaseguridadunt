<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
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
}

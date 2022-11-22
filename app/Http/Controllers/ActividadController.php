<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function Bactividad(){
        return view('actividades.Bactividad');
    }
    public function Ractividad(){
        return view('actividades.Ractividad');
    }
}

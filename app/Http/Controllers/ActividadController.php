<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function actividad(){
        return view('actividades.index');
    }
}

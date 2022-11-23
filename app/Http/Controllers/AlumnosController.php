<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function Balumno(){
        return view('alumnos.Balumno');
    }
    public function Ralumno(){
        return view('alumnos.Ralumno');
    }
    public function Cincidencia(){
        return view('alumnos.Cincidencia');
    }
    
}

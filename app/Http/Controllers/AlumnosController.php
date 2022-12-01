<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function alumno(){
        return view('alumnos.Balumno');
    }    
    public function ralumno(){
        return view('alumnos.Ralumno');
    }
    
    public function ealumno($id){
        return view('alumnos.Ealumno', ['id' => $id]);
    }
}

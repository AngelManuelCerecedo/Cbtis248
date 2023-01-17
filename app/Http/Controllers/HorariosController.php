<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function horario()
    {
        return view('horarios.index');
    }
    public function horarioM($id){
        return view('horarios.chprofesor', ['id' => $id]);
    }
    public function horarioV($id){
        return view('horarios.vhprofesor', ['id' => $id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function Badministrador(){
        return view('administradores.Badministrador');
    }
    public function Radministrador(){
        return view('administradores.Radministrador');
    }
    public function Eadministrador($id){
        return view('administradores.Eadministrador',['id'=>$id]); 
    }
}

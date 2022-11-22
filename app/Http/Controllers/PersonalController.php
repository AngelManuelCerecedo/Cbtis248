<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function Bpersonal(){
        return view('personal.Bpersonal');
    }
    public function Rpersonal(){
        return view('personal.Rpersonal');
    }
}

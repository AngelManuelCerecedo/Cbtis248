<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadresController extends Controller
{
    public function padre()
    {
        return view('padres.index');
    }
}

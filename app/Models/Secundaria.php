<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secundaria extends Model
{
    use HasFactory;
    public function alumno(){
        return $this->hasMany("App\Models\Alumno");
    }
}


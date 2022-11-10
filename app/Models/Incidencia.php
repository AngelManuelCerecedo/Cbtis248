<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    public function alumno(){
        return $this->hasMany("App\Models\Alumno");
    }
    public function cicloesc(){
        return $this->belongsTo("App\Models\CicloEscolar");
    }
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}

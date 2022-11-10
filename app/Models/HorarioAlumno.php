<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioAlumno extends Model
{
    use HasFactory;
    public function cicloesc(){
        return $this->belongsTo("App\Models\CicloEscolar");
    }
    public function grupo(){
        return $this->hasOne("App\Models\Grupo");
    }
    public function materia(){
        return $this->belongsToMany("App\Models\Materia");
    }
}

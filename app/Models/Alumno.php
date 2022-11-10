<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public function secundaria(){
        return $this->belongsTo("App\Models\Secundaria");
    }
    public function padre(){
        return $this->belongsTo("App\Models\Padre");
    }
    public function grupo(){
        return $this->belongsTo("App\Models\Grupo");
    }
    public function especialidad(){
        return $this->belongsTo("App\Models\Especialidad");
    }
    public function grado(){
        return $this->belongsTo("App\Models\Grado");
    }
    public function incidencia(){
        return $this->belongsTo("App\Models\Incidencia");
    }
}

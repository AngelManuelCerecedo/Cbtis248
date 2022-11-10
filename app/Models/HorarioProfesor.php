<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioProfesor extends Model
{
    use HasFactory;
    public function cicloesc(){
        return $this->belongsTo("App\Models\CicloEscolar");
    }
    public function materia(){
        return $this->belongsToMany("App\Models\Materia");
    }
    public function ActComp(){
        return $this->belongsToMany("App\Models\ActComp");
    }
}

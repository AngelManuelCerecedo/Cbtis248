<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActComp extends Model
{
    use HasFactory;
    public function profesor(){
        return $this->belongsToMany("App\Models\Profesor");
    }
    public function horarioprof(){
        return $this->belongsToMany("App\Models\HorarioProfesor");
    }
    public function horarioof(){
        return $this->belongsToMany("App\Models\HorarioOficial");
    }
}

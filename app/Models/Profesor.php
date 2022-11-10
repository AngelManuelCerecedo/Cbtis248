<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    public function actcomp(){
        return $this->belongsToMany("App\Models\ActComp");
    }
    public function materia(){
        return $this->belongsToMany("App\Models\Materia");
    }
}

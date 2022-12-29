<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    protected $fillable=['id','Nombre'];
    public function horario_profesor(){
        return $this->hasMany("App\Models\Horario_Profesor");
    }
}

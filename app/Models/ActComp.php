<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActComp extends Model
{
    use HasFactory;
    protected $fillable=['id','Nombre','HoraSem','profesor_id'];
    public function profesor(){
        return $this->belongsTo("App\Models\User");
    }
    public function horarioprof(){
        return $this->belongsToMany("App\Models\HorarioProfesor");
    }
    public function horarioof(){
        return $this->belongsToMany("App\Models\HorarioOficial");
    }
}

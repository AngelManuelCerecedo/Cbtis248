<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Materia;
use App\Models\Profesor;
use Livewire\Component;

class Chprofesor extends Component
{
    public $materiashoras, $ide, $Profesor;
    public function render()
    {
        $Materias = Materia::Where([['Estatus', '=', 'Abierta']])->get();
        $this->Profesor = Profesor::Where([['id','=', $this->ide]])->first();
        $this->materiashoras = Profesor::Where([['id','=', $this->ide]])->first()->materia;
        return view('livewire.horarios.chprofesor',['materias' => $Materias]);
    }
}

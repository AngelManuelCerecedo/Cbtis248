<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Dia;
use App\Models\Hora;
use App\Models\Horario_Profesor;
use App\Models\Materia;
use App\Models\Profesor;
use Livewire\Component;

class Chprofesor extends Component
{
    public $horarios, $ide, $Profesor;
    public $M, $D, $H;
    public function render()
    {
        $Materias = Materia::all();
        $Horas = Hora::all();
        $Dias = Dia::all();
        //$Materias = Materia::Where([['Estatus', '=', 'Abierta']])->get();
        $this->Profesor = Profesor::Where([['id', '=', $this->ide]])->first();
        $this->horarios = Horario_Profesor::Where([['profesor_id', '=', $this->ide]])->get();
        return view('livewire.horarios.chprofesor', ['materias' => $Materias, 'horas' => $Horas, 'dias' => $Dias]);
    }
    public function añadir(){
        Horario_Profesor::updateOrCreate([
            'dia_id' => $this->D,
            'hora_id' => $this->H,
            'materia_id' => $this->M,
            'profesor_id' => $this->ide,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Materia Añadida Exitosamente',
            'type' => 'success'
        ]);
        $this->limpiar();
        $this->redic();
    }
    public function limpiar(){
        $this->D = '';
        $this->H = '';
        $this->M = '';
    }
    public function redic(){
        return redirect()->route('HorariosM',[$this->ide]);
    }
}

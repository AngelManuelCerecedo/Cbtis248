<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Dia;
use App\Models\Grupo;
use App\Models\Hora;
use App\Models\Horario_Profesor;
use App\Models\Materia;
use Livewire\Component;

class Vhalumno extends Component
{
    public $horarios, $ide, $Grupo;
    public $M, $D, $H, $aux;
    public $i = 1, $is= 1,$it= 1,$iq= 1,$ic= 1,$ise= 1,$isi= 1,$io= 1,$in= 1;
    public $Phoras, $Shoras,$Thoras, $Qhoras,$Choras, $SEhoras,$SIhoras, $Ohoras,$Nhoras;
    public function render()
    {
        $Materias = Materia::all();
        $Horas = Hora::all();
        $Dias = Dia::all();
        $this->aux = $this->ide;
        $this->Grupo = Grupo::Where([['id', '=', $this->ide]])->first();
        $this->horarios = Horario_Profesor::Where([['grupo_id', '=', $this->ide]])->get();
        $this->Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['grupo_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        return view('livewire.horarios.vhalumno', ['materias' => $Materias, 'horas' => $Horas, 'dias' => $Dias]);
    }
    public function redic(){
        return redirect()->route('HorariosVG',[$this->ide]);
    }
}

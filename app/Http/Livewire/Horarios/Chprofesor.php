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
    public $M, $D, $H, $aux=0;
    public $i = 1, $is= 1,$it= 1,$iq= 1,$ic= 1,$ise= 1,$isi= 1,$io= 1,$in= 1;
    public $Phoras, $Shoras,$Thoras, $Qhoras,$Choras, $SEhoras,$SIhoras, $Ohoras,$Nhoras;
    protected $listeners = ['desasignar1'];
    public function render()
    {
        $Materias = Materia::all();
        $Horas = Hora::all();
        $Dias = Dia::all();
        //$Materias = Materia::Where([['Estatus', '=', 'Abierta']])->get();
        $this->Profesor = Profesor::Where([['id', '=', $this->ide]])->first();
        $this->horarios = Horario_Profesor::Where([['profesor_id', '=', $this->ide]])->get();
        $this->Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
        $this->Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $this->ide] ])->orderBy('dia_id','asc')->get();
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
    }
    public function limpiar(){
        $this->D = '';
        $this->H = '';
        $this->M = '';
    
    }
    public function borrar($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro que quieres eliminar la asignacion?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }
    public function desasignar1($id)
    {
        Horario_Profesor::findOrFail($id)->delete();
        $this->redic();
    }


    public function redic(){
        return redirect()->route('HorariosM',[$this->ide]);
    }
}

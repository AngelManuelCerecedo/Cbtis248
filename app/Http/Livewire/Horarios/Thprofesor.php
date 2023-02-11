<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Dia;
use App\Models\Hora;
use App\Models\Horario_Profesor;
use App\Models\Materia;
use App\Models\User;
use Livewire\Component;

class Thprofesor extends Component
{
    public $horarios, $ide, $Profesor, $hgrupo, $Grupo, $profesor, $materia_id;
    public $M, $D, $H, $L, $aux = 0, $flag = 0, $vrf;
    public $i = 1, $is = 1, $it = 1, $iq = 1, $ic = 1, $ise = 1, $isi = 1, $io = 1, $in = 1, $d = 1;
    public $v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10;
    public $Phoras, $Shoras, $Thoras, $Qhoras, $Choras, $SEhoras, $SIhoras, $Ohoras, $Nhoras, $Dhoras;
    protected $listeners = ['desasignar1'];

    //validaciones
    protected $rules = [
        'M' => 'required',
        'D' => 'required',
        'H' => 'required',
        'L' => 'required',
    ];
    //Mensajes de validaciones
    protected $messages = [
        'M.required' => 'El campo materia / actividad puede estar vacío',
        'D.required' => 'El campo día puede estar vacío',
        'H.required' => 'El campo hora no puede estar vacío',
        'L.required' => 'El campo lugar no puede estar vacío',
    ];


    public function render()
    {
        $Dias = Dia::all();
        $this->Profesor = User::Where([['id', '=', $this->ide]])->first();
        if ($this->D != '') {
            $Horas = Hora::all();
            $this->v1 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 1], ['Lugar', '=', NULL]])->first();
            $this->v2 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 2], ['Lugar', '=', NULL]])->first();
            $this->v3 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 3], ['Lugar', '=', NULL]])->first();
            $this->v4 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 4], ['Lugar', '=', NULL]])->first();
            $this->v5 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 5], ['Lugar', '=', NULL]])->first();
            $this->v6 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 6], ['Lugar', '=', NULL]])->first();
            $this->v7 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 7], ['Lugar', '=', NULL]])->first();
            $this->v8 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 8], ['Lugar', '=', NULL]])->first();
            $this->v9 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 9], ['Lugar', '=', NULL]])->first();
            $this->v10 = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', 10], ['Lugar', '=', NULL]])->first();
            return view('livewire.horarios.thprofesor', ['horas' => $Horas, 'dias' => $Dias]);
        }
        $this->Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        $this->Dhoras = Horario_Profesor::Where([['hora_id', '=', 10], ['profesor_id', '=', $this->ide], ['Lugar', '=', NULL]])->orderBy('dia_id', 'asc')->get();
        return view('livewire.horarios.thprofesor', ['dias' => $Dias]);
    }

    //metodo que valida en tiempo real

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function añadir()
    {
        $th = 0;
        for ($i = 1; $i <= 10; $i++) {
            $cum = Horario_Profesor::Where([['dia_id', '=', $this->D], ['profesor_id', '=', $this->ide], ['hora_id', '=', $i], ['Lugar', '=', NULL]])->first();
            if ($cum != null) {
                $th++;
            }
        }
        if ($th < 8) {
            Horario_Profesor::create([
                'dia_id' => $this->D,
                'hora_id' => $this->H,
                'profesor_id' => $this->ide,
            ]);
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Materia Añadida Exitosamente',
                'type' => 'success'
            ]);
            $this->limpiar();
        } else {
            $this->dispatchBrowserEvent('swal', [
                'title' => 'No se pueden agregar <br> mas de 8 hrs.',
                'type' => 'error'
            ]);
        }
    }
    public function limpiar()
    {
        $this->D = '';
        $this->H = '';
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


    public function redic()
    {
        return redirect()->route('HorariosTT', [$this->ide]);
    }
}

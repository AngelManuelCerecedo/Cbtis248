<?php

namespace App\Http\Livewire\Horarios;

use App\Models\Dia;
use App\Models\Grupo;
use App\Models\Hora;
use App\Models\Horario_Profesor;
use App\Models\Materia;
use App\Models\Profesor;
use App\Models\User;
use Livewire\Component;

class Chprofesor extends Component
{
    public $horarios, $ide, $Profesor, $hgrupo, $Grupo, $profesor, $materia_id;
    public $M, $D, $H, $L, $aux = 0, $flag = 0;
    public $i = 1, $is = 1, $it = 1, $iq = 1, $ic = 1, $ise = 1, $isi = 1, $io = 1, $in = 1;
    public $Phoras, $Shoras, $Thoras, $Qhoras, $Choras, $SEhoras, $SIhoras, $Ohoras, $Nhoras;
    protected $listeners = ['desasignar1'];
    public function render()
    {
        $Materias = Materia::all();
        $Horas = Hora::all();
        $Dias = Dia::all();
        $this->Profesor = User::Where([['id', '=', $this->ide]])->first();
        $this->Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        $this->Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $this->ide]])->orderBy('dia_id', 'asc')->get();
        return view('livewire.horarios.chprofesor', ['materias' => $Materias, 'horas' => $Horas, 'dias' => $Dias]);
    }
    public function añadir()
    {
        $t1 = 'Lugar Ocupado por : <br>';
        $t2 = 'El grupo tiene <br> dia y hora Ocupado por : <br>';
        $this->Grupo = Materia::Where([['id', '=', $this->M]])->first();
        $hgrupo = Horario_Profesor::Where([['grupo_id', '=', $this->Grupo->grupo_id], ['dia_id', '=', $this->D], ['hora_id', '=', $this->H]])->first();
        $lugar = Horario_Profesor::Where([['Lugar', '=', $this->L], ['dia_id', '=', $this->D], ['hora_id', '=', $this->H]])->first();
        $hprofesor = Horario_Profesor::Where([['profesor_id', '=', $this->Grupo->profesor_id], ['dia_id', '=', $this->D], ['hora_id', '=', $this->H]])->first();
        if ($hprofesor == null) {
            if ($hgrupo == null) {
                if ($lugar == null) {
                    if ($this->L != 'Salon') {
                        $this->aux = $this->Grupo->Horas_Reg;
                        Horario_Profesor::updateOrCreate([
                            'Lugar' => $this->L,
                            'dia_id' => $this->D,
                            'hora_id' => $this->H,
                            'materia_id' => $this->M,
                            'profesor_id' => $this->ide,
                            'grupo_id' => $this->Grupo->grupo_id,
                        ]);
                        Materia::updateOrCreate(
                            ['id' => $this->M],
                            [
                                'Horas_Reg' => $this->aux + 1,
                            ]
                        );
                        $this->dispatchBrowserEvent('swal', [
                            'title' => 'Materia Añadida Exitosamente',
                            'type' => 'success'
                        ]);
                        $this->limpiar();
                    } else {
                        $this->aux = $this->Grupo->Horas_Reg;
                        Horario_Profesor::updateOrCreate([
                            'Lugar' => $this->Grupo->grupo->Salon,
                            'dia_id' => $this->D,
                            'hora_id' => $this->H,
                            'materia_id' => $this->M,
                            'profesor_id' => $this->ide,
                            'grupo_id' => $this->Grupo->grupo_id,
                        ]);
                        Materia::updateOrCreate(
                            ['id' => $this->M],
                            [
                                'Horas_Reg' => $this->aux + 1,
                            ]
                        );
                        $this->dispatchBrowserEvent('swal', [
                            'title' => 'Materia Añadida Exitosamente',
                            'type' => 'success'
                        ]);
                        $this->limpiar();
                    }
                } else {
                    $this->profesor = User::Where([['id', '=', $lugar->profesor_id]])->first();
                    $t1 .= $this->profesor->Nombre . ' ' . $this->profesor->ApPaterno . ' ' . $this->profesor->ApMaterno;
                    $this->dispatchBrowserEvent('swal', [
                        'title' => $t1,
                        'type' => 'error'
                    ]);
                }
            } else {
                $this->profesor = User::Where([['id', '=', $hgrupo->profesor_id]])->first();
                $t2 .= $this->profesor->Nombre . ' ' . $this->profesor->ApPaterno . ' ' . $this->profesor->ApMaterno;
                $this->dispatchBrowserEvent('swal', [
                    'title' => $t2,
                    'type' => 'error'
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Dia y Hora Ocupada',
                'type' => 'error'
            ]);
        }
    }
    public function limpiar()
    {
        $this->D = '';
        $this->H = '';
        $this->M = '';
        $this->L = '';
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
        $this->materia_id = Horario_Profesor::findOrFail($id);
        $Materia = Materia::findOrFail($this->materia_id->materia_id);
        $this->aux = $Materia->Horas_Reg;
        Materia::updateOrCreate(
            ['id' => $this->materia_id->materia_id],
            [
                'Horas_Reg' => $this->aux - 1,
            ]
        );
        Horario_Profesor::findOrFail($id)->delete();
        $this->redic();
    }


    public function redic()
    {
        return redirect()->route('HorariosM', [$this->ide]);
    }
}

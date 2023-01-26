<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use App\Models\Especialidad;
use App\Models\Grado;
use App\Models\Grupo;
use App\Models\Horario_Profesor;
use App\Models\Profesor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID, $NOM, $HS, $ESP, $G, $P, $GP;
    public $grado, $especialidad, $profesor, $grupo;
    public $modal = false, $modalAP = false;
    public $texto = "", $materiaAP;
    public $estado = 0, $estado1 = 0;
    protected $listeners = ['delete','desasignar1'];

    public function render()
    {
        $this->grado = Grado::all();
        $this->especialidad = Especialidad::all();
        $this->profesor = User::Where('Puesto', '!=' , 'Administrativo') -> get();
        $this->grupo = Grupo::all();

        $materias = Materia::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Tipo', '=', 'Materia']])
            ->orWhere([['especialidad_id', 'like', '%' . $this->search . '%'], ['Tipo', '=', 'Materia']])
            ->paginate($this->cantidad);
        return view('livewire.materias.index', ['materias' => $materias]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCantidad()
    {
        $this->resetPage();
    }
    public function crearmodal()
    {
        $this->limpiarCampos();
        $this->abrirmodal();
    }
    public function abrirmodal()
    {
        if ($this->estado == 0) {
            $this->texto = "Registrar una Materia";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Materia";
            $this->modal = true;
        }
    }
    public function cerrarModal()
    {
        $this->estado = 0;
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->NOM = '';
        $this->HS = '';
        $this->ESP = '';
        $this->G = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        Materia::updateOrCreate(
            ['id' => $this->ID],
            [
                'Nombre' => $this->NOM,
                'Horas_Sem' => $this->HS,
                'Estatus' => 'Abierto',
                'Tipo' => 'Materia',
                'especialidad_id' => $this->ESP,
                'grado_id' => $this->G,
                'grupo_id' => $this->GP,
            ]
        );
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Accion Exitosa',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }

    public function editar($id)
    {
        $materia = Materia::findOrFail($id);
        $this->ID = $materia->id;
        $this->NOM = $materia->Nombre;
        $this->HS = $materia->Horas_Sem;
        $this->ESP = $materia->especialidad_id;
        $this->G = $materia->grado_id;
        $this->GP = $materia->grupo_id;
        $this->estado = 1;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        $t1 = 'El Docente <br>';
        $profesor = Materia::Where([['id', '=', $id]])->first();
        if ($profesor->profesor_id == null){
            $this->dispatchBrowserEvent('swal:confirm', [
                'title' => '¿Estás seguro de eliminar?',
                'type' => 'warning',
                'id' => $id,
            ]);
        }else{
            $t1 .= $profesor->profesor->Nombre . ' ' . $profesor->profesor->ApPaterno . ' ' . $profesor->profesor->ApMaterno .'<br> <FONT SIZE=5> tiene la materia asignada </font>';
            $this->dispatchBrowserEvent('swal', [
                'title' => $t1,
                'type' => 'error'
            ]);  
        }
    }

    public function delete($id)
    {

        Materia::findOrFail($id)->delete();
        $this->redic();
    }

    public function crearmodal1()
    {
        //$this->limpiarCampos();
        $this->abrirmodal1();
    }
    public function abrirmodal1()
    {
        $this->modalAP = true;
    }
    public function cerrarModal1()
    {
        $this->modalAP = false;
    }

    public function asignar($id)
    {
        $this->materiaAP = Materia::findOrFail($id);
        $this->abrirModal1();
    }

    public function guardarAP(){
        Materia::updateOrCreate(
            ['id' => $this->materiaAP->id],
            [
                'profesor_id' => $this->P
            ]
        );
        $this->cerrarModal1();
    }

    public function desasignar($id){

        $t1 = 'El Docente <br>';
        $profesor = Horario_Profesor::Where([['materia_id', '=', $id]])->first();
        if ($profesor == null){
            $this->dispatchBrowserEvent('swal:confirm1', [
                'title' => '¿Estás seguro que quieres desasignar al Docente?',
                'type' => 'warning',
                'id' => $id,
            ]);
        }else{
            $t1 .= $profesor->profesor->Nombre . ' ' . $profesor->profesor->ApPaterno . ' ' . $profesor->profesor->ApMaterno .'<br> <FONT SIZE=5> tiene la materia asignada en su horario </font>';
            $this->dispatchBrowserEvent('swal', [
                'title' => $t1,
                'type' => 'error'
            ]);  
        }
    }

    public function desasignar1($id)
    {
        Materia::updateOrCreate(
            ['id' => $id],
            [
                'profesor_id' => null
            ]
        );
        $this->redic();
    }

    public function redic()
    {
        return redirect()->route('Materias');
    }
}

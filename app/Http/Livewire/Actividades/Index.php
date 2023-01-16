<?php

namespace App\Http\Livewire\Actividades;

use App\Models\ActComp;
use App\Models\Materia;
use App\Models\Profesor;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID, $NOM, $HS, $P;
    public $modal = false, $modalAP = false;
    public $texto = "", $actividadAP;
    public $estado = 0,$profesor;
    protected $listeners = ['delete','desasignar1'];
    public function render()
    {
        $actividades = Materia::Where([['Nombre', 'like', '%' . $this->search . '%'],['Tipo', '=', 'Actividad']])
            ->paginate($this->cantidad);
        $this->profesor = Profesor::all();
        return view('livewire.actividades.index', ['actividades' => $actividades]);
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
            $this->texto = "Registrar una Actividad Complementaria";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Actividad Complementaria";
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
        $this->estado = 0;
    }
    public function guardar()
    {
        Materia::updateOrCreate(
            ['id' => $this->ID],
            [
                'Nombre' => $this->NOM,
                'Horas_Sem' => $this->HS,
                'Tipo' => 'Actividad',
            ]
        );
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }

    public function editar($id)
    {
        $actcomp = Materia::findOrFail($id);


        $this->ID = $actcomp->id;
        $this->NOM = $actcomp->Nombre;
        $this->HS = $actcomp->HoraSem;
        $this->estado = 1;
        $this->abrirModal();
    }

    public function borrar($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro de eliminar?',
            'type' => 'warning',
            'id' => $id,
        ]);
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
        $this->actividadAP = Materia::findOrFail($id);
        $this->abrirModal1();
    }

    public function guardarAP()
    {
        Materia::updateOrCreate(
            ['id' => $this->actividadAP->id],
            [
                'profesor_id' => $this->P
            ]
        );
        $this->cerrarModal1();
    }

    public function desasignar($id)
    {

        $this->dispatchBrowserEvent('swal:confirm1', [
            'title' => '¿Estás seguro que quieres desasignar el profesor?',
            'type' => 'warning',
            'id' => $id,
        ]);
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
        return redirect()->route('Actividades');
    }
}

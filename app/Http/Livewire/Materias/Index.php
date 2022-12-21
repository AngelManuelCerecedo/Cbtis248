<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use App\Models\Especialidad;
use App\Models\Grado;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID,$NOM, $HS, $ESP, $G;
    public $grado, $especialidad;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    protected $listeners = ['delete'];

    public function render()
    {
        $this->grado = Grado::all();
        $this->especialidad = Especialidad::all();

        $materias = Materia::Where([['Nombre', 'like', '%' . $this->search . '%']])
            ->orWhere([['especialidad_id', 'like', '%' . $this->search . '%']])
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
                'especialidad_id' => $this->ESP,
                'grado_id' => $this->G,
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
        $materia = Materia::findOrFail($id);
        $this->ID = $materia->id;
        $this->NOM = $materia->Nombre;
        $this->HS = $materia->Horas_Sem;
        $this->ESP = $materia->especialidad_id;
        $this->G = $materia->grado_id;
        $this->estado = 1;
        $this->abrirModal();
    }

    public function borrar($id){

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

    public function redic(){
        return redirect()->route('Materias');
    }
}

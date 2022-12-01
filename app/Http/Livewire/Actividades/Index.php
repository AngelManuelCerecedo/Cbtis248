<?php

namespace App\Http\Livewire\Actividades;

use App\Models\ActComp;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID,$NOM, $HS;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    protected $listeners = ['delete'];
    public function render()
    {
        $actividades = ActComp::Where([['Nombre', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
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
        ActComp::updateOrCreate(
            ['id' => $this->ID],
            [
                'Nombre' => $this->NOM,
                'HoraSem' => $this->HS,
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
        $actcomp = ActComp::findOrFail($id);


        $this->ID = $actcomp->id;
        $this->NOM = $actcomp->Nombre;
        $this->HS = $actcomp->HoraSem;
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

        ActComp::findOrFail($id)->delete();
        $this->redic();

    }

    public function redic(){
        return redirect()->route('Actividades');
    }
}

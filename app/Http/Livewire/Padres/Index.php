<?php

namespace App\Http\Livewire\Padres;

use App\Models\Padre;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $NOM, $AP, $AM, $TEL;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    public function render()
    {
        $padres = Padre::Where([['Nombre', 'like', '%' . $this->search . '%']])
            ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
            ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
            ->orWhere([['Telefono', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.padres.index', ['padres' => $padres]);
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
            $this->texto = "Registrar un Tutor";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar un Tutor";
            $this->modal = true;
        }
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->NOM = '';
        $this->AP = '';
        $this->AM = '';
        $this->TEL = '';
    }
    public function guardar()
    {
        Padre::updateOrCreate([
            'Nombre' => $this->NOM,
            'ApPaterno' => $this->AP,
            'ApMaterno' => $this->AM,
            'Telefono' => $this->TEL,
        ]);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}

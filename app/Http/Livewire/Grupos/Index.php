<?php

namespace App\Http\Livewire\Grupos;

use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\CicloEscolar;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $CG, $T, $E, $S, $G, $C;
    public $cicloescolar;
    public $modalAÑ = false;
    public $texto = "";
    public $estado = 0;
    public $Alumnos, $gruposAÑ;
    public $ListaALAÑ;
    protected $listeners = ['delete'];

    public function render()
    {
        $grupos = Grupo::Where([['Clave_Grupo', 'like', '%' . $this->search . '%']])
            ->orWhere([['Turno', 'like', '%' . $this->search . '%']])
            ->orWhere([['Salon', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.grupos.index', ['grupos' => $grupos]);
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
    public function abrirmodalAÑ()
    {
        $this->modalAÑ = true;
    }
    public function cerrarModalAÑ()
    {
        $this->modalAÑ = false;
    }
    public function limpiarCampos()
    {
    }
    public function guardar()
    {
    }
    public function redic()
    {
        return redirect()->route('Grupos');
    }
    public function añadirA($id)
    {
        $this->gruposAÑ = Grupo::Where([['id', $id]])->first();
        $this->Alumnos = Alumno::Where([['grado_id','=', $this->gruposAÑ->grado_id], ['especialidad_id','=' ,$this->gruposAÑ->especialidad_id] , ['grupo_id', '=', null]]) -> get();
        $this->abrirmodalAÑ();
    }
}

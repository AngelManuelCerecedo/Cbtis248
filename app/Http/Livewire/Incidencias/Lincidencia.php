<?php

namespace App\Http\Livewire\Incidencias;

use App\Models\Alumno;
use App\Models\CicloEscolar;
use App\Models\Incidencia;
use Livewire\Component;
use Livewire\WithPagination;

class Lincidencia extends Component
{
    use WithPagination;
    public $cantidad = 5;
    public $F, $C, $D, $iC, $iA, $iU;
    public $ID;
    public $IDAUX;
    public $modal = false;
    public $estado = 0;
    protected $listeners = ['delete'];

    public function render()
    {
        $incidencias = Incidencia::Where('alumno_id' , $this->IDAUX)
            ->paginate($this->cantidad);
        $Alumno = Alumno::Where('id', $this->IDAUX)->first();
        $Ciclo = CicloEscolar::all();
        return view('livewire.incidencias.lincidencia', ['incidencias' => $incidencias , 'alumno'=> $Alumno, 'ciclo'=> $Ciclo ]);
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
        $this->estado = 1;
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->estado = 0;
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->F = '';
        $this->C = '';
        $this->D = '';
        $this->ID = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        Incidencia::updateOrCreate(
            ['id' => $this->ID],
            [
                'Fecha' => $this->F,
                'Descripcion' => $this->D,
                'ciclo_id' => $this->C,
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
        $incidencia = Incidencia::findOrFail($id);
        $this->F = $incidencia->Fecha;
        $this->D = $incidencia->Descripcion;
        $this->C = $incidencia->ciclo_id;
        $this->ID = $incidencia->id;
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

        Incidencia::findOrFail($id)->delete();
        $this->redic();
    }

    public function redic()
    {
        return redirect()->route('Incidencias');
    }
}

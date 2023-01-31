<?php

namespace App\Http\Livewire\Ciclos;

use App\Models\CicloEscolar;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $SEM, $ID;
    public $modal = false;
    public $texto = "";
    public $estado = 0, $estado1 = 0;
    protected $listeners = ['delete'];

    //validaciones
    protected $rules = [
        'SEM' => 'required',
    ];
    //Mensajes de validaciones
    protected $messages = [
        'SEM.required' => 'El campo semestre no puede estar vacío',
    ];

    public function render()
    {
        $ciclos = CicloEscolar::Where([['Semestre', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);

        return view('livewire.ciclos.index', ['ciclos' => $ciclos]);
    }
    //metodo que valida en tiempo real

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
            $this->texto = "Registrar un Ciclo Escolar";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar un Ciclo Escolar";
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
        $this->SEM = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        $this->validate();
        CicloEscolar::updateOrCreate(
            ['id' => $this->ID],
            [
                'Semestre' => $this->SEM,
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
        $ciclo = CicloEscolar::findOrFail($id);
        $this->ID = $ciclo->id;
        $this->SEM = $ciclo->Semestre;
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

        CicloEscolar::findOrFail($id)->delete();
        $this->redic();
    }
    public function redic()
    {
        return redirect()->route('Ciclo');
    }
}

<?php

namespace App\Http\Livewire\Incidencias;

use App\Models\Alumno;
use App\Models\CicloEscolar;
use App\Models\Incidencia;
use Livewire\Component;
use Livewire\WithPagination;

class Bincidencia extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5, $userlog;
    public $F, $C, $D, $iC, $iA, $iU;
    public $ID;
    public $IDAUX;
    public $modal = false;
    public $estado = 0;
    public $estatus = 'Todos';

    //VALIDACIONES
    protected $rules = [
        'F' => 'required',
        'C' => 'required',
        'D' => 'required',
    ];

    //MENSAJES DE ERRORES
    protected $messages = [
        'F.required' => 'El campo fecha no puede estar vacío',
        'C.required' => 'El campo ciclo no puede estar vacío',
        'D.required' => 'El campo descripción no puede estar vacío',
       
    ];


    public function render()
    {
        if ($this->estatus == "Todos") {
            $alumnos = Alumno::Where([['Numero_Control', 'like', '%' . $this->search . '%']])
                ->orWhere([['Nombre', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%']])
                ->paginate($this->cantidad);
        } else
            $alumnos = Alumno::Where([['Numero_Control', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['Curp', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->paginate($this->cantidad);
        $Ciclo = CicloEscolar::all();
        return view('livewire.incidencias.bincidencia', ['alumnos' => $alumnos, 'ciclo' => $Ciclo]);
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
    public function updatingEstatus()
    {
        $this->resetPage();
    }
    public function updatingCantidad()
    {
        $this->resetPage();
    }
    public function crearmodal($id)
    {
        $this->limpiarCampos();
        $this->IDAUX = $id;
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
        $this->IDAUX = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        $this->validate();
        Incidencia::updateOrCreate(
            [
                'Fecha' => $this->F,
                'Descripcion' => $this->D,
                'ciclo_id' => $this->C,
                'alumno_id' => $this->IDAUX,
                'user_id' => $this->userlog->id,
            ]
        );
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Registro Exitoso',
            'type' => 'success'
        ]);

        $this->limpiarCampos();
        $this->cerrarModal();
    }


    public function redic()
    {
        return redirect()->route('Incidencias');
    }
}

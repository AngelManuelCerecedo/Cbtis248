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
    public $cantidad = 5, $incidencia;
    public $F, $C, $D, $iC, $iA, $iU, $F1, $t1;
    public $ID;
    public $IDAUX;
    public $modal = false, $modal1 = false ;
    public $estado = 0, $estado1 = 0;
    protected $listeners = ['delete'];


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
        $incidencias = Incidencia::Where('alumno_id' , $this->IDAUX)
            ->paginate($this->cantidad);
        $Alumno = Alumno::Where('id', $this->IDAUX)->first();
        $Ciclo = CicloEscolar::all();
        return view('livewire.incidencias.lincidencia', ['incidencias' => $incidencias , 'alumno'=> $Alumno, 'ciclo'=> $Ciclo ]);
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
        $this->estado = 1;
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->estado = 0;
        $this->modal = false;
        $this->modal1 = false;
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
        $this->validate();
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
    
    public function crearmodal1()
    {
        $this->limpiarCampos();
        $this->abrirmodal1();
    }
    public function abrirmodal1()
    {
        $this->estado1 = 1;
        $this->t1 = '';
        $this->modal1 = true;
    }
    public function cerrarModal1()
    {
        $this->estado1 = 0;
        $this->modal1 = false;
    }


    public function verificar($id)
    {
        $this->incidencia = Incidencia::Where([['id', '=', $id]])->first();
        if ($this->incidencia->alumno->grupo_id == NULL){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'El alumno no tiene un grupo asignado',
                'type' => 'error'
            ]);
        }
        else{
            $this->estado = 1;
            $this->abrirmodal1();
        }
    }
    public function citar($id)
    {
        //$this->validate();
        if ($this->F1 != ''){
            $this->modal1 = false;
            Incidencia::updateOrCreate(
                ['id' => $id],
                [
                    'Fecha_C' => $this->F1,
                ]
            );
            $this->F1 = '';
            redirect()->route('citatorio', [$id]);
        }else {
            $this->t1 = 'El campo fecha no puede estar vacio';
        }
    }

    public function redic()
    {
        return redirect()->route('Lincidencias',[$this->IDAUX]);
    }
}

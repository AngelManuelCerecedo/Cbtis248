<?php

namespace App\Http\Livewire\Secundarias;

use App\Models\Alumno;
use Livewire\Component;
use App\Models\Secundaria;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID, $CLAVE, $NOM, $MOD, $REG;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    protected $listeners = ['delete'];

    //VALIDACIONES
    protected $rules = [
        'NOM' => 'required',
        'CLAVE' => 'required',
        'MOD' => 'required',
        'REG' => 'required',
    ];

    //MENSAJES DE ERRORES
    protected $messages = [
        'NOM.required' => 'El campo nombre no puede estar vacío',
        'CLAVE.required' => 'El campo clave de secundaria no puede estar vacío',
        'MOD.required' => 'El campo modalidad no puede estar vacío',
        'REG.required' => 'El campo regimen no puede estar vacío',
    ];

    public function render()
    {
        $secundarias = Secundaria::Where([['Nombre', 'like', '%' . $this->search . '%']])
            ->orWhere([['ClaveSecu', 'like', '%' . $this->search . '%']])
            ->orWhere([['Modalidad', 'like', '%' . $this->search . '%']])
            ->orWhere([['Regimen', 'like', '%' . $this->search . '%']])
            ->paginate($this->cantidad);
        return view('livewire.secundarias.index', ['secundarias' => $secundarias]);
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
            $this->texto = "Registrar una Secundaria";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar una Secundaria";
            $this->modal = true;
        }
    }
    public function cerrarModal()
    {
        $this->estado = 0;
        $this->limpiarCampos();
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->NOM = '';
        $this->REG = '';
        $this->MOD = '';
        $this->CLAVE = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        $this->validate();
        Secundaria::updateOrCreate(
            ['id' => $this->ID],
            [
                'ClaveSecu' => $this->CLAVE,
                'Nombre' => $this->NOM,
                'Modalidad' => $this->MOD,
                'Regimen' => $this->REG,
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
        $secundaria = Secundaria::findOrFail($id);
        $this->ID = $secundaria->id;
        $this->NOM = $secundaria->Nombre;
        $this->CLAVE = $secundaria->ClaveSecu;
        $this->MOD = $secundaria->Modalidad;
        $this->REG = $secundaria->Regimen;
        $this->estado = 1;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        $t1 = 'La Secundaria tiene un <br/> alumno registrado: <br/>';
        $alumno = Alumno::Where([['secundaria_id', '=', $id]])->first();
        if ($alumno == null) {
            $this->dispatchBrowserEvent('swal:confirm', [
                'title' => '¿Estás seguro de eliminar?',
                'type' => 'warning',
                'id' => $id,
            ]);
        } else {
            $t1 .= $alumno->Nombre . ' ' . $alumno->ApPaterno . ' ' . $alumno->ApMaterno;
            $this->dispatchBrowserEvent('swal', [
                'title' => $t1,
                'type' => 'error'
            ]);
        }
    }

    public function delete($id)
    {

        Secundaria::findOrFail($id)->delete();
        $this->redic();
    }

    public function redic()
    {
        return redirect()->route('Secundarias');
    }
}

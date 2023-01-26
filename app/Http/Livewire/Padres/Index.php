<?php

namespace App\Http\Livewire\Padres;

use App\Models\Alumno;
use App\Models\Padre;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $ID,$NOM, $AP, $AM, $TEL;
    public $modal = false;
    public $texto = "";
    public $estado = 0;
    protected $listeners = ['delete'];
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
        $this->estado=0;
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->NOM = '';
        $this->AP = '';
        $this->AM = '';
        $this->TEL = '';
        $this->estado=0;
    }
    public function guardar()
    {
        Padre::updateOrCreate( 
        ['id' => $this->ID],
        [
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

    public function editar($id){
        $tutor = Padre::findOrFail($id);
        $this->ID=$tutor->id;
        $this->NOM=$tutor->Nombre;
        $this->AP=$tutor->ApPaterno;
        $this->AM=$tutor->ApMaterno;
        $this->TEL=$tutor->Telefono;
        $this->estado=1;
        $this->abrirModal();
    }

    public function borrar($id){
        $t1 = 'El Tutor tiene un <br/> alumno registrado: <br/>';
        $alumno = Alumno::Where([['padre_id', '=', $id]])->first();
        if ($alumno == null){
            $this->dispatchBrowserEvent('swal:confirm', [
                'title' => '¿Estás seguro de eliminar?',
                'type' => 'warning',
                'id' => $id,
            ]);
        }else{
            $t1 .= $alumno->Nombre . ' ' . $alumno->ApPaterno . ' ' . $alumno->ApMaterno;
            $this->dispatchBrowserEvent('swal', [
                'title' => $t1,
                'type' => 'error'
            ]);  
        }
    }

    public function delete($id)
    {

        Padre::findOrFail($id)->delete();
        $this->redic();

    }
    
    public function redic(){
        return redirect()->route('Padres');
    }
}

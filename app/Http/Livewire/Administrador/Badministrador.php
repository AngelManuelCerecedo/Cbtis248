<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Horario_Profesor;
use App\Models\Materia;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Badministrador extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $estatus = 'Todos';
    protected $listeners = ['delete'];


    public function render()
    {
        if ($this->estatus == "Todos") {
            $administradores = User::Where([['Nombre', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
                ->paginate($this->cantidad);
        } else
            $administradores = User::Where([['Nombre', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['Estatus', '=', $this->estatus]])
                ->paginate($this->cantidad);
        return view('livewire.administrador.badministrador', ['administradores' => $administradores]);
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

    public function borrar($id)
    {
        $t1 = 'El profesor tiene la materia ';
        $materia = Materia::Where([['profesor_id', '=', $id]])->first();
        if ($materia == null) {
            $this->dispatchBrowserEvent('swal:confirm', [
                'title' => '¿Estás seguro de eliminar?',
                'type' => 'warning',
                'id' => $id,
            ]);
        } else {
            $t1 .= $materia->Nombre . ' asignada';
            $this->dispatchBrowserEvent('swal', [
                'title' => $t1,
                'type' => 'error'
            ]);
        }
    }

    public function delete($id)
    {

        User::findOrFail($id)->delete();
        $this->redic();
    }

    public function info($id)
    {
        $t1 = ' INFORMACIÓN <br>';
        $personal = User::findOrFail($id);
        $t1 .= '<FONT SIZE=5> Alumno : ' . $personal->Nombre . ' ' . $personal->ApPaterno . ' ' . $personal->ApMaterno . '<br/> CURP : ' . $personal->Curp
            . '<br> RFC: ' . $personal->Rfc . '<br> Clave Cobro : ' . $personal->Clave_Cobro . '<br> Puesto : ' . $personal->Puesto . '<br> Perfil : ' . $personal->Perfil
            . '<br> Fecha de Ingreso : ' . $personal->Fecha_ingreso . '<br> Fecha de Ingreso (SEP) : ' . $personal->Fecha_ingreso_SEP . '<br> Fecga de Ingreso (DGETI) : ' . $personal->Fecha_ingreso_DGETI
            . '<br> Categoria : ' . $personal->Categoria . '<br> Numero de Tarjeta : ' . $personal->Numero_Tarjeta . '<br/> Horas de Nombramiento : ' . $personal->Horas_Nom
            . '<br/> Numero de Plaza : ' . $personal->Numero_Plaza . '<br/> Observaciones : ' . $personal->Observaciones . '<br> Tipo : ' . $personal->Tipo . '<br> Estatus : ' . $personal->Estatus
            . '</font>';
        $this->dispatchBrowserEvent('swal', [
            'title' => $t1,
        ]);
    }

    public function redic()
    {
        return redirect()->route('BuscarAdministrador');
    }
}

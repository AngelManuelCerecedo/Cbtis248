<?php

namespace App\Http\Livewire\Grupos;

use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\CicloEscolar;
use App\Models\Especialidad;
use App\Models\Grado;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search, $modal, $grado, $especialidad, $ciclo, $grupoAUX;
    public $cantidad = 6;
    public $ID, $CG, $T, $E, $S, $G, $C, $TOT, $CONT, $CL;
    public $cicloescolar;
    public $modalAÑ = false, $modalLA = false, $modalAG = false;
    public $texto = "";
    public $estado = 0;
    public $Alumnos, $gruposAÑ;
    public $ListaALAÑ;
    public $Prueba, $IDAUX, $IDAUXLIST, $PruebaLA, $IDAUXACT, $PruebaACT;
    protected $listeners = ['delete', 'actualizar', 'delete1'];

    public function render()
    {
        $this->grado = Grado::all();
        $this->ciclo = CicloEscolar::all();
        $this->especialidad = Especialidad::all();
        $grupos = Grupo::Where([['Clave_Grupo', 'like', '%' . $this->search . '%']])
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
    public function abrirmodal()
    {
        if ($this->estado == 0) {
            $this->texto = "Registrar una Grupo";
            $this->modal = true;
        }
        if ($this->estado == 1) {
            $this->texto = "Editar un Grupo";
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
        $this->C = '';
        $this->S = '';
        $this->T = '';
        $this->E = '';
        $this->G = '';
        $this->CL = '';
        $this->estado = 0;
    }
    public function guardar()
    {
        if($this->grupoAUX == null){
            Grupo::updateOrCreate(
                ['id' => $this->ID],
                [
                    'Clave_Grupo' => $this->C,
                    'Salon' => $this->S,
                    'TotAL' => $this->T,
                    'ALR' => 0,
                    'Estatus' => 'Disponible',
                    'grado_id' => $this->G,
                    'ciclo_id' => $this->CL,
                    'especialidad_id' => $this->E,
                ]
            );
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Accion Exitosa',
                'type' => 'success'
            ]);
            $this->limpiarCampos();
            $this->cerrarModal();
        }else{
            if ($this->grupoAUX->TotAL == $this->T) {
                Grupo::updateOrCreate(
                    ['id' => $this->ID],
                    [
                        'Clave_Grupo' => $this->C,
                        'Salon' => $this->S,
                        'Estatus' => 'Disponible',
                        'grado_id' => $this->G,
                        'ciclo_id' => $this->CL,
                        'especialidad_id' => $this->E,
    
                    ]
                );
                $this->dispatchBrowserEvent('swal', [
                    'title' => 'Accion Exitosa',
                    'type' => 'success'
                ]);
                $this->limpiarCampos();
                $this->cerrarModal();
            } else {
                Grupo::updateOrCreate(
                    ['id' => $this->ID],
                    [
                        'Clave_Grupo' => $this->C,
                        'Salon' => $this->S,
                        'TotAL' => $this->T,
                        'Estatus' => 'Disponible',
                        'grado_id' => $this->G,
                        'ciclo_id' => $this->CL,
                        'especialidad_id' => $this->E,
    
                    ]
                );
                $this->dispatchBrowserEvent('swal', [
                    'title' => 'Accion Exitosa',
                    'type' => 'success'
                ]);
                $this->limpiarCampos();
                $this->cerrarModal();
            }
        }

    }

    public function editar($id)
    {
        $grupo = Grupo::findOrFail($id);
        $this->grupoAUX = Grupo::Where([['id', '=', $id]])->first();
        $this->ID = $grupo->id;
        $this->C = $grupo->Clave_Grupo;
        $this->S = $grupo->Salon;
        $this->T = $grupo->TotAL;
        $this->G = $grupo->grado_id;
        $this->CL = $grupo->ciclo_id;
        $this->E = $grupo->especialidad_id;
        $this->estado = 1;
        $this->abrirModal();
    }
    public function borrar($id)
    {
        $alumno = Alumno::Where([['grupo_id', '=', $id]])->first();
        if ($alumno == null) {
            $this->dispatchBrowserEvent('swal:confirm3', [
                'title' => '¿Estás seguro de eliminar?',
                'type' => 'warning',
                'id' => $id,
            ]);
        } else {
            $this->dispatchBrowserEvent('swal', [
                'title' => 'El grupo no esta vacio',
                'type' => 'error'
            ]);
        }
    }

    public function delete1($id)
    {

        Grupo::findOrFail($id)->delete();
        $this->redic();
    }

    //METODOS DEL MODAL AÑADIR ALUMNOS
    public function abrirmodalAÑ()
    {
        $this->modalAÑ = true;
    }
    public function cerrarModalAÑ()
    {
        $this->modalAÑ = false;
    }
    public function redic()
    {
        return redirect()->route('Grupos');
    }
    public function añadirA($id)
    {
        $this->IDAUX = $id;
        $this->gruposAÑ = Grupo::Where([['id', $id]])->first();
        if ($this->gruposAÑ->TotAL == $this->gruposAÑ->ALR) {
            Grupo::updateOrCreate(
                ['id' => $id],
                ['Estatus' => 'Cerrado']
            );
            $this->cerrarModalAÑ();
        } else {
            $this->Prueba = $this->gruposAÑ->id;
            $this->TOT = $this->gruposAÑ->TotAL;
            $this->CONT = $this->gruposAÑ->ALR;
            $this->Alumnos = Alumno::Where([['grado_id', '=', $this->gruposAÑ->grado_id], ['especialidad_id', '=', $this->gruposAÑ->especialidad_id], ['grupo_id', '=', null], ['Estatus', '=', 'Activo']])->get();
            $this->abrirmodalAÑ();
        }
    }
    public function agregarA($id)
    {
        Alumno::updateOrCreate(
            ['id' => $id],
            ['grupo_id' => $this->Prueba]
        );
        Grupo::updateOrCreate(
            ['id' => $this->IDAUX],
            [
                'ALR' => $this->CONT + 1
            ]
        );
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Alumno Añadido',
            'type' => 'success'
        ]);
        $this->añadirA($this->IDAUX);
    }

    //METODOS DEL MODAL LISTAR ALUMNOS
    public function abrirmodalLA()
    {
        $this->modalLA = true;
    }
    public function cerrarModalLA()
    {
        $this->modalLA = false;
    }


    public function listarA($id)
    {
        $this->IDAUXLIST = $id;
        $this->gruposAÑ = Grupo::Where([['id', $id]])->first();
        $this->PruebaLA = $this->gruposAÑ->id;
        $this->TOT = $this->gruposAÑ->TotAL;
        $this->CONT = $this->gruposAÑ->ALR;
        $this->Alumnos = Alumno::Where([['grupo_id', '=', $this->PruebaLA], ['Estatus', '=', 'Activo']])->get();
        $this->abrirmodalLA();
    }

    public function eliminarA($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Estás seguro de eliminar?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }
    public function delete($id)
    {
        Alumno::updateOrCreate(
            ['id' => $id],
            ['grupo_id' => null]
        );
        Grupo::updateOrCreate(
            ['id' => $this->IDAUXLIST],
            [
                'ALR' => $this->CONT - 1,
                'Estatus' => 'Disponible'
            ]
        );
        $this->listarA($this->IDAUXLIST);
    }

    //METODOS DEL MODAL ACTUALIZAR GRADO
    public function abrirmodalAg()
    {
        $this->modalAG = true;
    }
    public function cerrarModalAg()
    {
        $this->modalAG = false;
    }


    public function listarAg($id)
    {
        $this->IDAUXACT = $id;
        $this->gruposAÑ = Grupo::Where([['id', $id]])->first();
        $this->PruebaACT = $this->gruposAÑ->id;
        $this->TOT = $this->gruposAÑ->TotAL;
        $this->CONT = $this->gruposAÑ->ALR;
        $this->Alumnos = Alumno::Where([['grupo_id', '=', $this->PruebaACT], ['Estatus', '=', 'Activo']])->get();
        $this->abrirmodalAg();
    }

    public function graduarA($id)
    {
        $this->dispatchBrowserEvent('swal:confirm2', [
            'title' => '¿Estas Seguro de <br> Cambiar el Grado?',
            'type' => 'warning',
            'id' => $id,
        ]);
    }
    public function actualizar($id)
    {
        $Alumno = Alumno::Where([['id', $id]])->first();
        if ($Alumno->grado_id != 6) {
            Alumno::updateOrCreate(
                ['id' => $id],
                [
                    'grupo_id' => null,
                    'grado_id' => $Alumno->grado_id + 1
                ]
            );
            Grupo::updateOrCreate(
                ['id' => $this->IDAUXLIST],
                [
                    'ALR' => $this->CONT - 1,
                    'Estatus' => 'Disponible'
                ]
            );
        } else {
            Alumno::updateOrCreate(
                ['id' => $id],
                [
                    'grupo_id' => null,
                    'grado_id' => null,
                    'Estatus' => 'Egresado',
                ]
            );
            Grupo::updateOrCreate(
                ['id' => $this->IDAUXLIST],
                [
                    'ALR' => $this->CONT - 1,
                    'Estatus' => 'Disponible'
                ]
            );
        }
        $this->listarAg($this->IDAUXACT);
    }
}

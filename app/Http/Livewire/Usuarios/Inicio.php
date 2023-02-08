<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;


use Livewire\Component;

class Inicio extends Component
{
    use WithPagination;
    public $search;
    public $cantidad = 5;
    public $modal = false, $modal2 = false, $modal3 = false;
    public $texto = "";
    public $administrador, $email, $contrasena;
    public $ideee, $nuevoemail, $nuevacontrasena, $nuevoestado, $mensajenuevoemail, $mensajenuevacontrasena, $mensajeestado;
    public $user;

    //validaciones
    protected $rules = [
        'administrador' => 'required',
        'contrasena' => 'required|min:8',
    ];
    //Mensajes de validaciones
    protected $messages = [
        'administrador.required' => 'Debe seleccionar un empleado',
        'contrasena.required' => 'El campo contraseña no puede estar vacío',
        'contrasena.min' => 'La contraseña no puede ser menor de 8 caracteres',
    ];



    public function render()
    {

        $usuarios = User::Where([['Nombre', 'like', '%' . $this->search . '%'], ['password', '!=', 'null']])
            ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%'], ['password', '!=', 'null']])
            ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%'], ['password', '!=', 'null']])
            ->orWhere([['email', 'like', '%' . $this->search . '%'], ['password', '!=', 'null']])
            ->paginate($this->cantidad);

        $administradores = User::where([['Estatus', '=', 'Activo'], ['Tipo', '=', 'Usuario']])->get();
        $roles = Role::all();



        return view('livewire.usuarios.inicio', ['usuarios' => $usuarios, 'administradores' => $administradores, 'roles' => $roles]);
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

    public function limpiarCampos()
    {
        $this->administrador = '';
        $this->email = '';
        $this->contrasena = '';
    }

    public function abrirModal()
    {
        $this->limpiarCampos();
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function guardar()
    {
        $this->validate();
        User::updateOrCreate(
            ['id' =>  $this->administrador],
            [
                'password' => bcrypt($this->contrasena),
                'password2' => encrypt($this->contrasena),
                'EstatusUser' => 'Activo',
            ]
        );

        $this->dispatchBrowserEvent('swal1', [
            'title' => 'Usuario guardado exitosamente',
            'type' => 'success'
        ]);

        $this->cerrarModal();
    }


    public function limpiarCampos2()
    {
        $this->nuevoemail = '';
        $this->nuevacontrasena = '';
        $this->nuevoestado = '';
        $this->ideee = '';
    }

    public function abrirModal2()
    {

        $this->modal2 = true;
    }

    public function cerrarModal2()
    {
        $this->modal2 = false;
    }

    public function editar($id)
    {
        $usuario = User::findOrFail($id);
        $this->nuevoemail = $usuario->email;
        $this->nuevacontrasena = decrypt($usuario->password2);
        $this->nuevoestado = $usuario->EstatusUser;
        $this->ideee = $usuario->id;
        $this->abrirModal2();
    }

    public function guardar2()
    {

        if ($this->nuevoemail != '') 
        {
            $this->mensajenuevoemail = '';
            if ($this->nuevacontrasena != '') 
            {
                $this->mensajenuevacontrasena = '';

                if (strlen($this->nuevacontrasena) >= 8) 
                {
                    $this->mensajenuevacontrasena = '';

                    if ($this->nuevoestado != '') 
                    {
                        $this->mensajeestado = '';
                        User::updateOrCreate(
                            ['id' => $this->ideee],
                            [
                                'email' => $this->nuevoemail,
                                'password' => bcrypt($this->nuevacontrasena),
                                'password2' => encrypt($this->nuevacontrasena),
                                'EstatusUser' =>  $this->nuevoestado,
                            ]
                        );

                        $this->dispatchBrowserEvent('swal2', [
                            'title' => 'Usuario Editado exitosamente',
                            'type' => 'success'
                        ]);

                        $this->limpiarCampos2();
                        $this->cerrarModal2();
                    } 
                    else {$this->mensajeestado = 'Debe seleccionar un estado';}
                } 
                else {$this->mensajenuevacontrasena = 'La contraseña no debe de ser menor a 8 caracteres';}
            } 
            else {$this->mensajenuevacontrasena = 'El campo contraseña no puede estar vacío';}
        } 
        else {$this->mensajenuevoemail = 'El campo correo no puede estar vacío';}
    }


    public function abrirModal3()
    {

        $this->modal3 = true;
    }

    public function cerrarModal3()
    {
        $this->modal3 = false;
    }



    public function asignarrol($id)
    {

        $this->user = User::where('id', $id)->first();
        $this->abrirModal3();
    }
}

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
    public $modal = false, $modal2= false, $modal3= false;
    public $texto = "";
    public $administrador,$email, $contrasena;
    public $ideee,$nuevoemail,$nuevacontrasena,$nuevoestado;
    public $user;




    public function render()
    {
        $usuarios = User::Where([['Nombre', 'like', '%' . $this->search . '%']])
        ->orWhere([['ApPaterno', 'like', '%' . $this->search . '%']])
        ->orWhere([['ApMaterno', 'like', '%' . $this->search . '%']])
        ->orWhere([['email', 'like', '%' . $this->search . '%']])
        ->paginate($this->cantidad);

        $administradores = User::where('Estatus', 'Activo')->get();
        $roles = Role::all();


      
        return view('livewire.usuarios.inicio', ['usuarios' => $usuarios,'administradores' => $administradores,'roles' => $roles]);
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
        User::updateOrCreate(
        ['id'=>  $this->administrador],
        [

            'email' => $this->email,
            'password' => bcrypt($this->contrasena),
            'password2' => encrypt($this->contrasena),
            'EstatusUser' => 'Activo',
        ]);

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
        $this->ideee='';
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
        $this->ideee=$usuario->id;
        $this->abrirModal2();
    }

    public function guardar2(){


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

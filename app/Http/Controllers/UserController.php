<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.usuarios');
    }

    // public function edit(User $user)
    // {
    //     $roles = Role::all();
    //     return view('users.edit',compact('user','roles'));
    // }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('Usuarios.index');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CicloEscolar;
use App\Models\Grupo;
use App\Models\Horario_Profesor;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function horario()
    {
        return view('horarios.index');
    }
    public function horarioM($id)
    {
        return view('horarios.chprofesor', ['id' => $id]);
    }
    public function horarioV($id)
    {
        return view('horarios.vhprofesor', ['id' => $id]);
    }
    public function horarioG()
    {
        return view('horarios.indexG');
    }
    public function horarioVG($id)
    {
        return view('horarios.vhalumno', ['id' => $id]);
    }

    public function horariosP($id)
    {


         $i = 1; $is= 1; $it= 1; $iq= 1; $ic= 1; $ise= 1; $isi= 1; $io= 1; $in= 1;
        $Profesor = User::Where([['id', '=', $id]])->first();
        // $Ciclo = CicloEscolar::all()->orderBy('id', 'desc')->first();
        $Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();

        $pdf = PDF::loadView('pdfs.horarioP', [
            'profesor' => $Profesor,
            'Phoras' => $Phoras,
            'Shoras' => $Shoras,
            'Thoras' => $Thoras,
            'Qhoras' => $Qhoras,
            'Choras' => $Choras,
            'SEhoras' => $SEhoras,
            'SIhoras' => $SIhoras,
            'Ohoras' => $Ohoras,
            'Nhoras' => $Nhoras,
            // 'Ciclo' => $Ciclo,
            'i'=> $i,
            'is'=> $is,
            'it'=> $it,
            'iq'=> $iq,
            'ic'=> $ic,
            'ise'=> $ise,
            'isi'=> $isi,
            'io'=> $io,
            'in'=> $in,
        ]);

        $pdf->setPaper('letter','landscape');
         return $pdf->download('Horario-Personal-'.$Profesor->Nombre. $Profesor->ApPaterno. $Profesor->ApMaterno.'.pdf');
    }

    public function horariosO($id){
        $i = 1; $is= 1; $it= 1; $iq= 1; $ic= 1; $ise= 1; $isi= 1; $io= 1; $in= 1;
        $Profesor = User::Where([['id', '=', $id]])->first();
        // $Ciclo = CicloEscolar::all()->orderBy('id', 'desc')->first(); aqui tienes que traer el ultimo ciclo escolar
        $Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();

        $pdf2 = PDF::loadView('pdfs.horarioO', [
            'profesor' => $Profesor,
            'Phoras' => $Phoras,
            'Shoras' => $Shoras,
            'Thoras' => $Thoras,
            'Qhoras' => $Qhoras,
            'Choras' => $Choras,
            'SEhoras' => $SEhoras,
            'SIhoras' => $SIhoras,
            'Ohoras' => $Ohoras,
            'Nhoras' => $Nhoras,
            // 'Ciclo' => $Ciclo,
            'i'=> $i,
            'is'=> $is,
            'it'=> $it,
            'iq'=> $iq,
            'ic'=> $ic,
            'ise'=> $ise,
            'isi'=> $isi,
            'io'=> $io,
            'in'=> $in,
        ]);
        $pdf2->setPaper('letter','landscape');
        return $pdf2->download('Horario-Oficial-'.$Profesor->Nombre. $Profesor->ApPaterno. $Profesor->ApMaterno.'.pdf');
    }




    public function horariosG($id){
        $i = 1; $is= 1; $it= 1; $iq= 1; $ic= 1; $ise= 1; $isi= 1; $io= 1; $in= 1;
        $Grupos = Grupo::Where([['id', '=', $id]])->first();
        // $Ciclo = CicloEscolar::all()->orderBy('id', 'desc')->first(); aqui tienes que traer el ultimo ciclo escolar
        $Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['grupo_id', '=', $id]])->orderBy('dia_id', 'asc')->get();

        $pdf3 = PDF::loadView('pdfs.horarioG', [
            'grupo' => $Grupos,
            'Phoras' => $Phoras,
            'Shoras' => $Shoras,
            'Thoras' => $Thoras,
            'Qhoras' => $Qhoras,
            'Choras' => $Choras,
            'SEhoras' => $SEhoras,
            'SIhoras' => $SIhoras,
            'Ohoras' => $Ohoras,
            'Nhoras' => $Nhoras,
            // 'Ciclo' => $Ciclo,
            'i'=> $i,
            'is'=> $is,
            'it'=> $it,
            'iq'=> $iq,
            'ic'=> $ic,
            'ise'=> $ise,
            'isi'=> $isi,
            'io'=> $io,
            'in'=> $in,
        ]);
        $pdf3->setPaper('letter','landscape');
        return $pdf3->download('Horario-Grupo-'.$Grupos->Clave_Grupo.'.pdf');
    }
}

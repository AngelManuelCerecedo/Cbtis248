<?php

namespace App\Http\Controllers;

use App\Models\CicloEscolar;
use App\Models\Grupo;
use App\Models\Horario_Profesor;
use App\Models\Materia;
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


         $i = 1; $countM=0;  $countA=0;
        $Profesor = User::Where([['id', '=', $id]])->first();
        $fechaActual = date('d/m/y');
        $Materias = Materia::Where([['profesor_id', '=', $id],['Tipo', '=', 'Materia']])->get();
        $Actividades = Materia::Where([['profesor_id', '=', $id],['Tipo', '=', 'Actividad']])->get();
        foreach ($Materias as $Materia){
            $countM += $Materia->Horas_Sem;
        }
        foreach ($Actividades as $Actividade){
            $countA += $Actividade->Horas_Sem;
        }
        $Ciclo = CicloEscolar::orderBy('id', 'desc')->first();
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
            'Ciclo' => $Ciclo,
            'fechaActual' => $fechaActual,
            'i'=> $i,
            'countM'=> $countM,
            'countA'=> $countA,
        ]);

        $pdf->setPaper('letter','landscape');
         return $pdf->download('Horario-Personal-'.$Profesor->Nombre. $Profesor->ApPaterno. $Profesor->ApMaterno.'.pdf');
    }

    public function horariosO($id){
        $i = 1; $countM=0;  $countA=0; $NOM="";
        $Profesor = User::Where([['id', '=', $id]])->first();
        $fechaActual = date('d/m/y');
        $Materias = Materia::Where([['profesor_id', '=', $id],['Tipo', '=', 'Materia']])->get();
        $Actividades = Materia::Where([['profesor_id', '=', $id],['Tipo', '=', 'Actividad']])->get();
        foreach ($Materias as $Materia){
            $countM += $Materia->Horas_Sem;
        }
        foreach ($Actividades as $Actividade){
            $countA += $Actividade->Horas_Sem;
        }
        $Ciclo = CicloEscolar::orderBy('id', 'desc')->first();  
        $Phoras = Horario_Profesor::Where([['hora_id', '=', 1], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Shoras = Horario_Profesor::Where([['hora_id', '=', 2], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Thoras = Horario_Profesor::Where([['hora_id', '=', 3], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Qhoras = Horario_Profesor::Where([['hora_id', '=', 4], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Choras = Horario_Profesor::Where([['hora_id', '=', 5], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SEhoras = Horario_Profesor::Where([['hora_id', '=', 6], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $SIhoras = Horario_Profesor::Where([['hora_id', '=', 7], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Ohoras = Horario_Profesor::Where([['hora_id', '=', 8], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $Nhoras = Horario_Profesor::Where([['hora_id', '=', 9], ['profesor_id', '=', $id]])->orderBy('dia_id', 'asc')->get();
        $str = strtoupper($Ciclo->Semestre);
        $nom = strtoupper($Profesor->Nombre) . strtoupper($Profesor->ApPaterno) . strtoupper($Profesor->ApMaterno);
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
            'Ciclo' => $str,
            'nom' => $nom,
            'fechaActual' => $fechaActual,
            'i'=> $i,
            'countM'=> $countM,
            'countA'=> $countA,
        ]);
        $pdf2->setPaper('letter','landscape');
        return $pdf2->download('Horario-Oficial-'.$Profesor->Nombre. $Profesor->ApPaterno. $Profesor->ApMaterno.'.pdf');
    }




    public function horariosG($id){
        $i = 1;
        $Grupos = Grupo::Where([['id', '=', $id]])->first();
        $Ciclo = CicloEscolar::orderBy('id', 'desc')->first(); 
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
            'Ciclo' => $Ciclo,
            'i'=> $i,
        ]);
        $pdf3->setPaper('letter','landscape');
        return $pdf3->download('Horario-Grupo-'.$Grupos->Clave_Grupo.'.pdf');
    }
}

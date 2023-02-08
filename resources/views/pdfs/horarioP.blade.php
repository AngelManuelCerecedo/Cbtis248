<!DOCTYPE html>
<meta charset="UTF-8">  
   <style type="text/css">  
   .transformacion2 { text-transform: uppercase;}
   @page {
            margin: 1.5cm .5cm;
        }
   </style> 
    <table style="width: 100%; border-collapse: collapse; margin-top: -5%">
        <tbody>
            <tr>
                <td style="width: 70%; text-align: center; font-size: 16px;">
                    CENTRO DE BACHILLERATO TECNOLÓGICO <br />industrial y de servicios No. 248 <br>
                    <strong>HORARIO PERSONAL</strong>
                </td>
                <td style="width: 25%; font-size: 13px;"> <br> HORAS NOMBRAMIENTO:<br>HORAS FRENTE A GRUPO:  HORAS DE DESCARGA: </td>
                <td style="width: 5%; font-size: 13px;"> <br>  {{$profesor->Horas_Nom}} <br>{{$countM}} <br>  {{$countA}}</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-top: 0%">
        <tbody>
            <tr>
                <td style="width: 7%;  font-size: 13px;">
                    FECHA: {{$fechaActual}} <br> DOCENTE: {{$profesor->Nombre}} {{$profesor->ApPaterno}} {{$profesor->ApMaterno}} <br> RFC: {{$profesor->Rfc}} 
                </td>
                <td style="width: 20%;  font-size: 13px; text-transform: uppercase;">
                    CLAVE PRESUPUESTAL: {{$profesor->Clave_Cobro}} <br />PERIODO ESCOLAR: {{$Ciclo->Semestre}}
                </td>
            </tr>
        </tbody>
    </table>
<table border="1" style="border-collapse: collapse; width: 100%; margin-top: 1%">
	<thead>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>HORA</strong></td>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>LUNES</strong></td>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>MARTES</strong></td>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>MIERCOLES</strong></td>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>JUEVES</strong></td>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>VIERNES</strong></td>
		</tr>
    </thead>
    <tbody>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>7:30-8:20</strong></td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Phoras) && $Phoras != '[]')
                    @foreach ($Phoras as $Phora)
                        @for ($i; $i < 6; $i++)
                            @if ($Phora->dia_id == $i)
                                <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                        {{ $Phora->materia->Nombre }} {{ $Phora->grupo->Clave_Grupo }}<br>
                                        ({{ $Phora->Lugar }})
                                </td>
                                {{ $i++ }}@break
                            @else
                                <td style="width: 16.6667%; text-align: center;"></td>
                            @endif
                        @endfor
                    @endforeach
                @else
                    <td style="width: 16.6667%; text-align: center;"></td>
                @endif
            @endfor
            {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>8:20-9:10</strong></td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Shoras) && $Shoras != '[]')
                @foreach ($Shoras as $Shora)
                    @for ($i; $i < 6; $i++)
                        @if ($Shora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Shora->materia->Nombre }} {{ $Shora->grupo->Clave_Grupo }}<br>
                                    ({{ $Shora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>9:10-10:00</strong></td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Thoras) && $Thoras != '[]')
                @foreach ($Thoras as $Thora)
                    @for ($i; $i < 6; $i++)
                        @if ($Thora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Thora->materia->Nombre }} {{ $Thora->grupo->Clave_Grupo }}<br>
                                    ({{ $Thora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>10:00-10:30</strong></td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Qhoras) && $Qhoras != '[]')
                @foreach ($Qhoras as $Qhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Qhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Qhora->materia->Nombre }} {{ $Qhora->grupo->Clave_Grupo }}<br>
                                    ({{ $Qhora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>10:30-11:20</strong></td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Choras) && $Choras != '[]')
                @foreach ($Choras as $Chora)
                    @for ($i; $i < 6; $i++)
                        @if ($Chora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Chora->materia->Nombre }} {{ $Chora->grupo->Clave_Grupo }}<br>
                                    ({{ $Chora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>11:20-12:10</strong></td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SEhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $SEhora->materia->Nombre }} {{ $SEhora->grupo->Clave_Grupo }}<br>
                                    ({{ $SEhora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
        <tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>12:10-13:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SIhoras) && $SIhoras != '[]')
                @foreach ($SIhoras as $SIhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SIhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $SIhora->materia->Nombre }} {{ $SIhora->grupo->Clave_Grupo }}<br>
                                    ({{ $SIhora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>13:00-13:50</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Ohoras) && $Ohoras != '[]')
                @foreach ($Ohoras as $Ohora)
                    @for ($i; $i < 6; $i++)
                        @if ($Ohora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Ohora->materia->Nombre }} {{ $Ohora->grupo->Clave_Grupo }}<br>
                                    ({{ $Ohora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>13:50-14:40</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Nhoras) && $Nhoras != '[]')
                @foreach ($Nhoras as $Nhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Nhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Nhora->materia->Nombre }} {{ $Nhora->grupo->Clave_Grupo }}<br>
                                    ({{ $Nhora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
        <tr>
			<td style="width: 16.6667%; text-align: center; font-size: 12px;"><strong>14:40-15:30</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Dhoras) && $Dhoras != '[]')
                @foreach ($Dhoras as $Dhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Dhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 11px; ">
                                    {{ $Dhora->materia->Nombre }} {{ $Dhora->grupo->Clave_Grupo }}<br>
                                    ({{ $Dhora->Lugar }})
                            </td>
                            {{ $i++ }}@break
                        @else
                            <td style="width: 16.6667%; text-align: center;"></td>
                        @endif
                    @endfor
                @endforeach
            @else
                <td style="width: 16.6667%; text-align: center;"></td>
            @endif
        @endfor
        {{ $i= 1 }}
		</tr>
	</tbody>
</table>
<br>
<table style="width: 100%; border-collapse: collapse; margin-top: -1%">
	<tbody>
		<tr>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
                <p>________________________________</p>
				<FONT SIZE=2 class="transformacion2">{{$profesor->Perfil_A}}. {{$profesor->Nombre}} {{$profesor->ApPaterno}} {{$profesor->ApMaterno}} <br> DOCENTE</FONT>
            </td>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				<p>________________________________</p>
                @if ($profesorF == null)
                <FONT SIZE=2>DEPTO. DE SERVICIOS DOCENTES</FONT>  
            @else
                <FONT SIZE=2>{{$profesorF->Perfil_A}}. {{$profesorF->Nombre}} {{$profesorF->ApPaterno}} {{$profesorF->ApMaterno}}<br> DEPTO. DE SERVICIOS DOCENTES</FONT>
            @endif
			</td>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				<p>________________________________</p>
                @if ($profesorD == null)
                <FONT SIZE=2>VACANTE<br> DIRECCIÓN</FONT>  
            @else
                <FONT SIZE=2 >{{$profesorD->Perfil_A}}. {{$profesorD->Nombre}} {{$profesorD->ApPaterno}} {{$profesorD->ApMaterno}}<br> DIRECCIÓN</FONT>
            @endif
			</td>
		</tr>
	</tbody>
</table>
<!DOCTYPE html>
<meta charset="UTF-8">  
   <style type="text/css">  
   .transformacion2 { text-transform: uppercase;}    
   </style> 
    <table style="width: 100%; border-collapse: collapse; margin-top: -6%">
        <tbody>
            <tr>
                <td style="width: 70%;">
                    <h2 style="text-align: center;">CENTRO DE BACHILLERATO TECNOLÓGICO <br />industrial y de servicios No. 248</h2>
                </td>
                <td style="width: 25%;">HORAS NOMBRAMIENTO:<br>HORAS FRENTE A GRUPO:  HORAS DE DESCARGA: </td>
                <td style="width: 5%;">{{$countM+$countA}} <br>{{$countM}} <br>  {{$countA}}</td>
            </tr>
            <tr>
                <td style="width: 70%; text-align: center;"><span style="text-decoration: underline;"><strong>HORARIO PERSONAL</strong></span></td>
                <td style="width: 25%;"></td>
                <td style="width: 5%;"></td>
            </tr>

        </tbody>
    </table>
<p 
    class="transformacion2" >FECHA: {{$fechaActual}} <br />DOCENTE: {{$profesor->Nombre}} {{$profesor->ApPaterno}} {{$profesor->ApMaterno}}  
                        <br />RFC: {{$profesor->Rfc}} <br />CLAVE PRESUPUESTAL: <br />PERIODO ESCOLAR: {{$Ciclo->Semestre}}
</p>
<table border="1" style="border-collapse: collapse; width: 100%;">
	<thead>
		<tr>
			<td style="width: 16.6667%; text-align: center;">HORA</td>
			<td style="width: 16.6667%; text-align: center;">LUNES</td>
			<td style="width: 16.6667%; text-align: center;">MARTES</td>
			<td style="width: 16.6667%; text-align: center;">MIERCOLES</td>
			<td style="width: 16.6667%; text-align: center;">JUEVES</td>
			<td style="width: 16.6667%; text-align: center;">VIERNES</td>
		</tr>
    </thead>
    <tbody>
		<tr>
			<td style="width: 16.6667%; text-align: center;">7:30-8:20</td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Phoras) && $Phoras != '[]')
                    @foreach ($Phoras as $Phora)
                        @for ($i; $i < 6; $i++)
                            @if ($Phora->dia_id == $i)
                                <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">8:20-9:10</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Shoras) && $Shoras != '[]')
                @foreach ($Shoras as $Shora)
                    @for ($i; $i < 6; $i++)
                        @if ($Shora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">9:10-10:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Thoras) && $Thoras != '[]')
                @foreach ($Thoras as $Thora)
                    @for ($i; $i < 6; $i++)
                        @if ($Thora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">10:00-10:30</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Qhoras) && $Qhoras != '[]')
                @foreach ($Qhoras as $Qhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Qhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">10:30-11:20</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Choras) && $Choras != '[]')
                @foreach ($Choras as $Chora)
                    @for ($i; $i < 6; $i++)
                        @if ($Chora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">11:20-12:10</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SEhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">12:10-13:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SIhoras) && $SIhoras != '[]')
                @foreach ($SIhoras as $SIhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SIhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">13:00-13:50</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Ohoras) && $Ohoras != '[]')
                @foreach ($Ohoras as $Ohora)
                    @for ($i; $i < 6; $i++)
                        @if ($Ohora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
			<td style="width: 16.6667%; text-align: center;">13:50-14:40</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Nhoras) && $Nhoras != '[]')
                @foreach ($Nhoras as $Nhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Nhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; -ms-text-size-adjust:auto ">
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
	</tbody>
</table>
<br>
<table style="width: 100%; border-collapse: collapse;">
	<tbody>
		<tr>
			<td style="width: 33%; text-align: center;">
                <p>________________________________</p>
				<FONT SIZE=2 class="transformacion2">{{$profesor->Perfil}}. {{$profesor->Nombre}} {{$profesor->ApPaterno}} {{$profesor->ApMaterno}} <br> DOCENTE</FONT>
            </td>
			<td style="width: 33%; text-align: center;">
				<p>________________________________</p>
				<FONT SIZE=2>DEPTO. DE SERVICIOS DOCENTES </FONT><p></p>
			</td>
			<td style="width: 33%; text-align: center;">
				<p>________________________________</p>
				<FONT SIZE=2>LSC. CARLOS BETANZOS JIMÉNEZ <br> DIRECCIÓN</FONT>
			</td>
		</tr>
	</tbody>
</table>
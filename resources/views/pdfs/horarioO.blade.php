<!DOCTYPE html>
<meta charset="UTF-8">  
   <style type="text/css">  
   .transformacion2 { text-transform: uppercase;}    
   </style> 
    <table style="width: 100%; border-collapse: collapse; margin-top: -4%">
        <tbody>
            <tr>
                <td style="width: 15%; text-align: center;"></td>
                <td style="width: 70%; text-align: center; font-size: 13px;">DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL Y DE SERVICIOS <br>
                    <strong>DISTRIBUCION DE ACTIVIDADES ACADEMICAS</strong>
                </td>
                <td style="width: 15%; text-align: center;"></td>  
            </tr>
        </tbody>
    </table>

    <table  border="1" style="border-collapse: collapse; width: 100%; ">
        <tbody>
            <tr>
                <td style="width: 30%; font-size: 12px;">Plantel: C.B.T.I.S. 248</td>
                <td style="width: 40%; font-size: 12px;">Ubicación: ZIMATLÁN DE ÁLVAREZ, OAXACA</td>
                <td style="width: 30%; font-size: 12px;">Nivel: MEDIO SUPERIOR</td>  
            </tr>
            <tr>
                <td style="width: 30%; font-size: 12px;">Entidad Federativa: 20 OAXACA, OAX</td>
                <td style="width: 40%; font-size: 12px;">Clave del Centro de Trabajo: 20DCT0019T</td>
                <td style="width: 30%; font-size: 12px;">Periodo Escolar: {{$Ciclo}} </td> 
            </tr>
        </tbody>
    </table>
    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 50%; font-size: 12px;">Nombre Completo: {{$nom}}</td>
                <td style="width: 25%; font-size: 12px;">RFC: {{$profesor->Rfc}}</td>
                <td style="width: 25%; font-size: 12px;">FECHA DE LLENADO: {{$fechaActual}}</td>  
            </tr>
        </tbody>
    </table>
    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 70%; font-size: 12px;">Departamento o Academia: {{$profesor->Puesto}}</td>
                <td style="width: 30%; font-size: 12px;">Categoria: {{$profesor->Categoria}}</td>
                <td style="width: 30%; font-size: 12px;">Numero de Tarjeta: {{$profesor->Numero_Tarjeta}}</td>    
            </tr>
        </tbody>
    </table>
    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 25%; font-size: 11px; text-align: center;">INGRESO SEP</td>
                <td style="width: 25%; font-size: 11px; text-align: center;">INGRESO DGTI</td>
                <td style="width: 25%; font-size: 11px; text-align: center;">HORAS NOMBRAMIENTO</td> 
                <td style="width: 25%; font-size: 11px; text-align: center;">PLAZA (s)</td>
                <td style="width: 25%; font-size: 11px; text-align: center;">Condiciones de Nombramiento</td>    
            </tr>
            <tr>
                <td style="width: 25%; font-size: 12px; text-align: center;">{{$profesor->Fecha_ingreso_SEP}}</td>
                <td style="width: 25%; font-size: 12px; text-align: center;">{{$profesor->Fecha_ingreso_DGETI}}</td>
                <td style="width: 25%; font-size: 12px; text-align: center;">{{$profesor->Horas_Nom}}</td> 
                <td style="width: 25%; font-size: 12px; text-align: center;">{{$profesor->Numero_Plaza}}</td>
                <td style="width: 25%; font-size: 12px; text-align: center;"></td>    
            </tr>
        </tbody>
    </table>

    <table border="1" style="border-collapse: collapse; width: 100%; margin-top: 0%">
        <tbody>
            <tr>
                <td style="width: 11%; font-size: 12px;">SUBTOTAL A:</td>
                <td style="width: 9%; font-size: 12px; text-align: center;">{{$countM}}</td>
                <td style="width: 11%; font-size: 12px;">SUBTOTAL B:</td>
                <td style="width: 9%; font-size: 12px; text-align: center;">{{$countA}}</td>
                <td style="width: 11%; font-size: 12px;">SUBTOTAL A+B:</td>
                <td style="width: 9%; font-size: 12px; text-align: center;">{{$countM + $countA}}</td>
            </tr>
        </tbody>
    </table>

<table border="1" style="border-collapse: collapse; width: 100%; margin-top: 0% margin-left: -5%">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">7:00-8:00</td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Phoras) && $Phoras != '[]')
                    @foreach ($Phoras as $Phora)
                        @for ($i; $i < 6; $i++)
                            @if ($Phora->dia_id == $i)
                                <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">8:00-9:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Shoras) && $Shoras != '[]')
                @foreach ($Shoras as $Shora)
                    @for ($i; $i < 6; $i++)
                        @if ($Shora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">9:00-10:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Thoras) && $Thoras != '[]')
                @foreach ($Thoras as $Thora)
                    @for ($i; $i < 6; $i++)
                        @if ($Thora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px;">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">10:00-11:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Choras) && $Choras != '[]')
                @foreach ($Choras as $Chora)
                    @for ($i; $i < 6; $i++)
                        @if ($Chora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px;  ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">11:00-12:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SEhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">12:00-13:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SIhoras) && $SIhoras != '[]')
                @foreach ($SIhoras as $SIhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SIhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">13:00-14:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Ohoras) && $Ohoras != '[]')
                @foreach ($Ohoras as $Ohora)
                    @for ($i; $i < 6; $i++)
                        @if ($Ohora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">14:00-15:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Nhoras) && $Nhoras != '[]')
                @foreach ($Nhoras as $Nhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Nhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">15:00-16:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Dhoras) && $Dhoras != '[]')
                @foreach ($Dhoras as $Dhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Dhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 11px; ">
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
<table style="width: 100%; border-collapse: collapse; margin-top: 3%">
	<tbody>
		<tr>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
                ________________________________ <br>
				<FONT SIZE=2 class="transformacion2">{{$profesor->Perfil_A}}. {{$profesor->Nombre}} {{$profesor->ApPaterno}} {{$profesor->ApMaterno}} <br> DOCENTE</FONT>
            </td>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				__________________________________<br>
                @if ($profesorF == null)
				    <FONT SIZE=2>VACANTE<br> SUBDIRECCIÓN ACADÉMICA</FONT>  
                @else
				    <FONT SIZE=2>{{$profesorF->Perfil_A}}. {{$profesorF->Nombre}} {{$profesorF->ApPaterno}} {{$profesorF->ApMaterno}} <br> SUBDIRECCIÓN ACADÉMICA</FONT>
                @endif
			</td>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				________________________________<br>
                @if ($profesorD == null)
                    <FONT SIZE=2>VACANTE<br> DIRECCIÓN</FONT>  
                @else
				    <FONT SIZE=2>{{$profesorD->Perfil_A}}. {{$profesorD->Nombre}} {{$profesorD->ApPaterno}} {{$profesorD->ApMaterno}}<br> DIRECCIÓN</FONT>
                @endif
			</td>
		</tr>
	</tbody>
</table>
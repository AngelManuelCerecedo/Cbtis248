<!DOCTYPE html>
<meta charset="UTF-8">  
   <style type="text/css">  
   .transformacion2 { text-transform: uppercase;}    
   </style> 
    <table style="width: 100%; border-collapse: collapse; margin-top: -4%">
        <tbody>
            <tr>
                <td style="width: 15%; text-align: center;"></td>
                <td style="width: 70%; text-align: center;">DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL Y DE SERVICIOS <br>
                    <strong>DISTRIBUCION DE ACTIVIDADES ACADEMICAS<
                </td>
                <td style="width: 15%; text-align: center;"></td>  
            </tr>
        </tbody>
    </table>

    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: 1%">
        <tbody>
            <tr>
                <td style="width: 30%; font-size: 13px;">Plantel: C.B.T.I.S. 248</td>
                <td style="width: 40%; font-size: 13px;">Ubicación: ZIMATLÁN DE ÁLVAREZ, OAXACA</td>
                <td style="width: 30%; font-size: 13px;">Nivel: MEDIO SUPERIOR</td>  
            </tr>
            <tr>
                <td style="width: 30%; font-size: 13px;">Entidad Federativa: 20 OAXACA, OAX</td>
                <td style="width: 40%; font-size: 13px;">Clave del Centro de Trabajo: 20DCT0019T</td>
                <td style="width: 30%; font-size: 13px;">Periodo Escolar: {{$Ciclo}} </td> 
            </tr>
        </tbody>
    </table>
    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 70%; font-size: 13px;">Nombre Completo: {{$nom}}</td>
                <td style="width: 30%; font-size: 13px;">RFC: {{$profesor->Rfc}}</td>    
            </tr>
        </tbody>
    </table>
    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 70%; font-size: 13px;">Departamento o Academia: {{$profesor->Puesto}}</td>
                <td style="width: 30%; font-size: 13px;">Categoria: {{$profesor->Categoria}}</td>
                <td style="width: 30%; font-size: 13px;">Numero de Tarjeta: {{$profesor->Numero_Tarjeta}}</td>    
            </tr>
        </tbody>
    </table>

    <table  border="1" style="border-collapse: collapse; width: 100%; margin-top: -.1%">
        <tbody>
            <tr>
                <td style="width: 25%; font-size: 13px; text-align: center;">INGRESO SEP</td>
                <td style="width: 25%; font-size: 13px; text-align: center;">INGRESO DGTI</td>
                <td style="width: 25%; font-size: 13px; text-align: center;">HORAS NOMBRAMIENTO</td> 
                <td style="width: 25%; font-size: 13px; text-align: center;">PLAZA (s)</td>
                <td style="width: 25%; font-size: 13px; text-align: center;">Condiciones de Nombramiento</td>    
            </tr>
            <tr>
                <td style="width: 25%; font-size: 13px; text-align: center;">{{$profesor->Fecha_ingreso_SEP}}</td>
                <td style="width: 25%; font-size: 13px; text-align: center;">{{$profesor->Fecha_ingreso_DGETI}}</td>
                <td style="width: 25%; font-size: 13px; text-align: center;">{{$profesor->Horas_Nom}}</td> 
                <td style="width: 25%; font-size: 13px; text-align: center;">{{$profesor->Numero_Plaza}}</td>
                <td style="width: 25%; font-size: 13px; text-align: center;"></td>    
            </tr>
        </tbody>
    </table>

<table border="1" style="border-collapse: collapse; width: 100%; margin-top: 2%">
	<thead>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">HORA</td>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">LUNES</td>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">MARTES</td>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">MIERCOLES</td>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">JUEVES</td>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">VIERNES</td>
		</tr>
    </thead>
    <tbody>
		<tr>
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">7:00-8:00</td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Phoras) && $Phoras != '[]')
                    @foreach ($Phoras as $Phora)
                        @for ($i; $i < 6; $i++)
                            @if ($Phora->dia_id == $i)
                                <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">8:00-9:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Shoras) && $Shoras != '[]')
                @foreach ($Shoras as $Shora)
                    @for ($i; $i < 6; $i++)
                        @if ($Shora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">9:00-10:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Thoras) && $Thoras != '[]')
                @foreach ($Thoras as $Thora)
                    @for ($i; $i < 6; $i++)
                        @if ($Thora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px;">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">10:00-11:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Choras) && $Choras != '[]')
                @foreach ($Choras as $Chora)
                    @for ($i; $i < 6; $i++)
                        @if ($Chora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px;  ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">11:00-12:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SEhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">12:00-13:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SIhoras) && $SIhoras != '[]')
                @foreach ($SIhoras as $SIhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SIhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">13:00-14:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Ohoras) && $Ohoras != '[]')
                @foreach ($Ohoras as $Ohora)
                    @for ($i; $i < 6; $i++)
                        @if ($Ohora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
			<td style="width: 16.6667%; text-align: center; font-size: 13px;">14:00-15:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Nhoras) && $Nhoras != '[]')
                @foreach ($Nhoras as $Nhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Nhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center;  font-size: 13px; ">
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
<table style="border-collapse: collapse; width: 20%; margin-top: 1%">
    <tbody>
        <tr>
            <td style="width: 11%; font-size: 13px;">SUBTOTAL A:</td>
            <td style="width: 9%; font-size: 13px;">{{$countM}}</td>
        </tr>
        <tr>
            <td style="width: 11%; font-size: 13px;">SUBTOTAL B:</td>
            <td style="width: 9%; font-size: 13px;">{{$countA}}</td>
        </tr>
        <tr>
            <td style="width: 11%; font-size: 13px;">SUBTOTAL A+B:</td>
            <td style="width: 9%; font-size: 13px;">{{$countM + $countA}}</td>
        </tr>
    </tbody>
</table>
<table style="border-collapse: collapse; width: 24%; margin-top: 1%">
    <tbody>
        <tr>
            <td style="width: 15%; font-size: 13px;">FECHA DE LLENADO:</td>
            <td style="width: 9%; font-size: 13px;">{{$fechaActual}}</td>
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
				<p>__________________________________</p>
				<FONT SIZE=2>LIC. CARLA ESTELA HERNÁNDEZ AGUILAR <br> SUBDIRECCIÓN ACADÉMICA</FONT>
			</td>
			<td style="width: 33%; text-align: center;">
				<p>________________________________</p>
				<FONT SIZE=2>LSC. CARLOS BETANZOS JIMÉNEZ <br> DIRECCIÓN</FONT>
			</td>
		</tr>
	</tbody>
</table>
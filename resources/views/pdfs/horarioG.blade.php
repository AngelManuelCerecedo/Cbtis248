<!DOCTYPE html>
<meta charset="UTF-8">  
   <style type="text/css">  
   .transformacion2 { text-transform: uppercase;}    
   @page {
            margin: 1cm .5cm;
        }
   </style> 
    <table style="width: 100%; border-collapse: collapse; margin-top: -4%">
        <tbody>
            <tr>
                <td style="width: 20%;">
                    <img src="{{public_path('/assets/logo.png')}}">
                </td>
                <td style="width: 80%; text-align: center; text-transform: uppercase;"> <strong> CENTRO DE BACHILLERATO TECNOLÓGICO <br />industrial y de servicios No. 248 </strong>
                    <br> 
                    SEMESTRE : {{$Ciclo->Semestre}} <br>
                    HORARIO DE CLASES

                </td>
                <td style="width: 20%;">
                    <img src="{{public_path('/assets/sep.png')}}">
                </td>
            </tr>
            <tr>
                <td style="">
                </td>
                <td style="width: 80%; text-align: center; text-transform: uppercase; font-size: 13px;"></td>
                <td style="">
                </td>
            </tr>
            <tr>
                <td style="">
                </td>
                <td style="width: 80%; text-align: center; font-size: 13px;"> </td>
                <td style="">
                </td>
            </tr>
        </tbody>
    </table>
    <table  style="border-collapse: collapse; width: 100%; margin-left: 8%;  margin-top: -1%;">
        <tbody>
            <tr>
                <td style="width: 25%; font-size: 13px; text-transform: uppercase;">Grupo:{{$grupo->Clave_Grupo}} </td>
                <td style="width: 25%; font-size: 13px; text-transform: uppercase;">Turno: MATUTINO</td>
                <td style="width: 25%; font-size: 13px; text-transform: uppercase;">Carrera: {{$grupo->especialidad->Nombre}} </td>
                <td style="width: 25%; font-size: 13px; text-transform: uppercase;"> Salon: {{$grupo->Salon}}</td>  
            </tr>
        </tbody>
    </table>
<table border="1" style="border-collapse: collapse; width: 100%;  margin-top: 2%">
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">7:30-8:20</td>
            @for ($p = 0; $p < 5; $p++)
                @if (!empty($Phoras) && $Phoras != '[]')
                    @foreach ($Phoras as $Phora)
                        @for ($i; $i < 6; $i++)
                            @if ($Phora->dia_id == $i)
                                <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                        {{ $Phora->materia->Nombre }} ({{ $Phora->Lugar }})<br>
                                        {{ $Phora->profesor->Nombre }}  {{ $Phora->profesor->ApPaterno }} {{ $Phora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">8:20-9:10</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Shoras) && $Shoras != '[]')
                @foreach ($Shoras as $Shora)
                    @for ($i; $i < 6; $i++)
                        @if ($Shora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Shora->materia->Nombre }} ({{ $Shora->Lugar }})<br>
                                    {{ $Shora->profesor->Nombre }}  {{ $Shora->profesor->ApPaterno }} {{ $Shora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">9:10-10:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Thoras) && $Thoras != '[]')
                @foreach ($Thoras as $Thora)
                    @for ($i; $i < 6; $i++)
                        @if ($Thora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Thora->materia->Nombre }} ({{ $Thora->Lugar }})<br>
                                    {{ $Thora->profesor->Nombre }}  {{ $Thora->profesor->ApPaterno }} {{ $Thora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">10:00-10:30</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Qhoras) && $Qhoras != '[]')
                @foreach ($Qhoras as $Qhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Qhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Qhora->materia->Nombre }} ({{ $Qhora->Lugar }})<br>
                                    {{ $Qhora->profesor->Nombre }}  {{ $Qhora->profesor->ApPaterno }} {{ $Qhora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">10:30-11:20</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Choras) && $Choras != '[]')
                @foreach ($Choras as $Chora)
                    @for ($i; $i < 6; $i++)
                        @if ($Chora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Chora->materia->Nombre }} ({{ $Chora->Lugar }})<br>
                                    {{ $Chora->profesor->Nombre }}  {{ $Chora->profesor->ApPaterno }} {{ $Chora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">11:20-12:10</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SEhoras) && $SEhoras != '[]')
                @foreach ($SEhoras as $SEhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SEhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $SEhora->materia->Nombre }} ({{ $SEhora->Lugar }})<br>
                                    {{ $SEhora->profesor->Nombre }}  {{ $SEhora->profesor->ApPaterno }} {{ $SEhora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">12:10-13:00</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($SIhoras) && $SIhoras != '[]')
                @foreach ($SIhoras as $SIhora)
                    @for ($i; $i < 6; $i++)
                        @if ($SIhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $SIhora->materia->Nombre }} {{ $SIhora->Lugar }})<br>
                                    {{ $SIhora->profesor->Nombre }}  {{ $SIhora->profesor->ApPaterno }} {{ $SIhora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">13:00-13:50</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Ohoras) && $Ohoras != '[]')
                @foreach ($Ohoras as $Ohora)
                    @for ($i; $i < 6; $i++)
                        @if ($Ohora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Ohora->materia->Nombre }} ({{ $Ohora->Lugar }})<br>
                                    {{ $Ohora->profesor->Nombre }}  {{ $Ohora->profesor->ApPaterno }} {{ $Ohora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">13:50-14:40</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Nhoras) && $Nhoras != '[]')
                @foreach ($Nhoras as $Nhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Nhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Nhora->materia->Nombre }} ({{ $Nhora->Lugar }})<br>
                                    {{ $Nhora->profesor->Nombre }} {{ $Nhora->profesor->ApPaterno }} {{ $Nhora->profesor->ApMaterno }}
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
			<td style="width: 16.6667%; text-align: center; font-size: 12px;">14:40-15:30</td>
            @for ($p = 0; $p < 5; $p++)
            @if (!empty($Dhoras) && $Dhoras != '[]')
                @foreach ($Dhoras as $Dhora)
                    @for ($i; $i < 6; $i++)
                        @if ($Dhora->dia_id == $i)
                            <td style="width: 16.6667%; text-align: center; font-size: 10px; ">
                                    {{ $Dhora->materia->Nombre }} ({{ $Dhora->Lugar }})<br>
                                    {{ $Dhora->profesor->Nombre }} {{ $Dhora->profesor->ApPaterno }} {{ $Dhora->profesor->ApMaterno }}
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
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				<p>__________________________________</p>
                @if ($profesorO == null)
                <FONT SIZE=2>VACANTE<br> SUBDIRECCIÓN ACADÉMICA</FONT>  
                @else
                <FONT SIZE=2>{{$profesorO->Perfil_A}}. {{$profesorO->Nombre}} {{$profesorO->ApPaterno}} {{$profesorO->ApMaterno}}<br> SUBDIRECCIÓN ACADÉMICA</FONT>
                @endif
			</td>
			<td style="width: 33%; text-align: center; text-transform: uppercase;">
				<p>________________________________</p>
                @if ($profesorD == null)
                    <FONT SIZE=2>Vacante<br> DIRECCIÓN</FONT>  
                @else
				    <FONT SIZE=2>{{$profesorD->Perfil_A}}. {{$profesorD->Nombre}} {{$profesorD->ApPaterno}} {{$profesorD->ApMaterno}}<br> DIRECCIÓN</FONT>
                @endif
			</td>
		</tr>
	</tbody>
</table>
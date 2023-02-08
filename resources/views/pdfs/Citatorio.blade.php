<!DOCTYPE html>
<meta charset="UTF-8">
<style type="text/css">
    .transformacion2 {
        text-transform: uppercase;
    }
</style>
<table style="width: 100%; border-collapse: collapse; ">
    <tbody>
        <tr>
            <td style="width: 25%;"><img src="{{ public_path('/assets/sep.png') }}"> </td>
            <td style="width: 70%; text-align: right; font-size: 16px;">
                Secretaria de Educación Pública <br> Subsecretaria de Educación Media Superiror <br>
                Unidad de Educación Media Superiror Tecnológica Industrial y de Servicios <br>
                Centro De Bachillerato Tecnolóco industrial y de servicios No. 248 <br>
                "Nicolás Bravo" clave: 20DCT0019T
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: center; font-size: 20px;">
    <strong>CITATORIO</strong>
</p>
<p style="text-align: right; font-size: 17px; text-transform: uppercase;">
    ZIMATLAN DE ALVAREZ, OAXACA, A {{ $dia }} DE {{ $mes }} DEL {{ $año }}
</p>
<p style="text-transform: uppercase; font-size: 18px;">
    <strong> <u>C. {{ $incidencia->alumno->padre->Nombre }} {{ $incidencia->alumno->padre->ApPaterno }}
            {{ $incidencia->alumno->padre->ApMaterno }} </u> <br>
        PADRE DE FAMILIA O TUTOR. <br>
        P R E S E N T E </strong>
</p>
<p
    style="text-transform: uppercase; text-align: justify; font-size: 18px; font-family: 'Times New Roman', Times, serif;">
    DEL ALUMNO (A) <u>{{ $incidencia->alumno->Nombre }} {{ $incidencia->alumno->ApPaterno }}
        {{ $incidencia->alumno->ApMaterno }} </u> DEL <u>{{ $g }}</u>
    SEMESTRE GRUPO <u>{{ $incidencia->alumno->grupo->Clave_Grupo }}</u>
    DE LA CARRERA DE <u>{{ $incidencia->alumno->especialidad->Nombre }} </u>, POR ESTE CONDUCTO ME PERMITO CITARLO PARA
    EL DIA <u> {{ $dc }} {{ $nd }} DE {{ $mc }}</u>
    DEL AÑO EN CURSO A LAS <strong>09:00 </strong> HORAS EN LA OFICINA DE ORIENTACION EDUCATIVA, CON EL OBJETIVO DE
    TRATAR ASUNTOS RELACIONADOS CON LA EDUCACIÓN DE SU HIJO.
</p>
<p>
    EN ATENCION A LA IMPORTANCIA DE ESTA REUNION SOLICITAMOS SU PUNTAL ASISTENCIA.
</p>
<p>
    POR LA FINEZA DE SUS ATENCIONES, ME ES GRATO ENVIARLE UN CORDIAL SALUDO.
</p>
<br>
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
        <tr>
            <td style="width: 33%; text-align: center;">
            </td>
            <td style="width: 33%; text-align: center; text-transform: uppercase;">
                ATENTAMENTE
                <p>________________________________</p>
                @if ($profesorO == null)
                    <FONT SIZE=2>VACANTE<br> ORIENTADOR EDUCATIVO</FONT>
                @else
                    <FONT SIZE=2>{{ $profesorO->Perfil_A }}. {{ $profesorO->Nombre }} {{ $profesorO->ApPaterno }}
                        {{ $profesorO->ApMaterno }}<br> ORIENTADORA EDUCATIVA</FONT>
                @endif
            </td>
            <td style="width: 33%; text-align: center;">
            </td>
        </tr>
    </tbody>
</table>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Valoración de Inmuebles</title>

    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 2.6cm 2cm 0cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            color: black;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            color: black;
            text-align: center;
            line-height: 35px;
        }

        .contenedorlogos {
            display: flex;
            margin-top: 10px;
            
        }

       

        .item2 {
            float: left;
            font-size: 15px;
            line-height: 1px;
            margin-left: 100px;
           

        }

        


        .infoasignacion {
            display: flex;
            font-size: 15px;
        }

        .folio {
            float: left;
        }

        .fecha {
            float: right;
            text-align: right;
        }



        .datosasignacion {
            display: flex;
            font-size: 14px;
            margin-top: 50px;
            margin-bottom: 30px;
            line-height: 5px;
        }


        .firmas {
            display: inline-block;
            width: 100%;
        }

        .firma1 {

            float: left;
            line-height: 5px;
            /* margin-left: 50px; */
        }

        .firma2 {
            float: left;
            line-height: 6px;
            margin-left: 25px;
        }

        .firma3 {
            float: left;
            line-height: 6px;
            margin-left: 25px;
        }
    </style>
</head>

<body>
    <header>
        <div class="contenedorlogos">
            <div class="item2">
                <h3>CENTRO DE BACHILLERATO TECNOLÓGICO</h3>
                <h4>industrial y de servicios No. 248</h4>
            </div>
        </div>
    </header>
    <main>
        <h4 style="text-align: center; font-weight: bold; ">Horario Personal</h4> --}}

        {{-- <table style="width: 100%; border: none; " cellspacing="0">

            <tbody class="block " style=" border: white 5px solid;">
                <tr>
                    <td style="  border: 1px solid white;">
                        <b>Folio:</b> 
                    </td>
                    <td style="text-align: right ">
                        <b>Fecha:</b>
                        
                    </td>
                </tr>
            </tbody>
            <tbody class="block " style="  border: white 5px solid;">
                <tr>
                    <td style="  border: 1px solid white;">
                        <b>Ciclo Escolar: </b>
                        
                    </td>
                    <td style="text-align: right ">
                        <b>Número de inmuebles: </b>
                        
                    </td>
                </tr>
            </tbody>

        </table> --}}

        {{-- <table class="min-w-full leading-normal font-sans text-center border">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        HORA
                    </th>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        LUNES
                    </th>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        MARTES
                    </th>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        MIERCOLES
                    </th>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        JUEVES
                    </th>
                    <th
                        class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                        VIERNES
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">7:30-8:20</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Phoras) && $Phoras != '[]')
                            @foreach ($Phoras as $Phora)
                                @for ($i; $i < 6; $i++)
                                    @if ($Phora->dia_id == $i)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Phora->materia->Nombre }} {{ $Phora->grupo->Clave_Grupo }}</p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                 ({{ $Phora->Lugar }})
                                            </p>

                                        </td>
                                        <var {{ $i++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">8:20-9:10</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Shoras) && $Shoras != '[]')
                            @foreach ($Shoras as $Shora)
                                @for ($is; $is < 6; $is++)
                                    @if ($Shora->dia_id == $is)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Shora->materia->Nombre }} {{ $Shora->grupo->Clave_Grupo }} 
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Shora->Lugar }}))
                                            </p>
                                        </td>
                                        <var {{ $is++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">9:10-10:00</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Thoras) && $Thoras != '[]')
                            @foreach ($Thoras as $Thora)
                                @for ($it; $it < 6; $it++)
                                    @if ($Thora->dia_id == $it)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Thora->materia->Nombre }} {{ $Thora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Thora->Lugar}})
                                            </p>
                                        </td>
                                        <var {{ $it++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">10:00-10:30</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Qhoras) && $Qhoras != '[]')
                            @foreach ($Qhoras as $Qhora)
                                @for ($iq; $iq < 6; $iq++)
                                    @if ($Qhora->dia_id == $iq)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Qhora->materia->Nombre }} {{ $Qhora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Qhora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $iq++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">10:30-11:20</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Choras) && $Choras != '[]')
                            @foreach ($Choras as $Chora)
                                @for ($ic; $ic < 6; $ic++)
                                    @if ($Chora->dia_id == $ic)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Chora->materia->Nombre }} {{ $Chora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Chora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $ic++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">11:20-12:10</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($SEhoras) && $SEhoras != '[]')
                            @foreach ($SEhoras as $SEhora)
                                @for ($ise; $ise < 6; $ise++)
                                    @if ($SEhora->dia_id == $ise)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $SEhora->materia->Nombre }} {{ $SEhora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $SEhora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $ise++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">12:10-13:00</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($SIhoras) && $SIhoras != '[]')
                            @foreach ($SIhoras as $SIhora)
                                @for ($isi; $isi < 6; $isi++)
                                    @if ($SIhora->dia_id == $isi)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $SIhora->materia->Nombre }} {{ $SIhora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $SIhora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $isi++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">13:00-13:50</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Ohoras) && $Ohoras != '[]')
                            @if ($Ohoras == '[]')
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                            @foreach ($Ohoras as $Ohora)
                                @for ($io; $io < 6; $io++)
                                    @if ($Ohora->dia_id == $io)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Ohora->materia->Nombre }} {{ $Ohora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Ohora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $io++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                        13:50-14:40</td>
                    @for ($p = 0; $p < 5; $p++)
                        @if (!empty($Nhoras) && $Nhoras != '[]')
                            @foreach ($Nhoras as $Nhora)
                                @for ($in; $in < 6; $in++)
                                    @if ($Nhora->dia_id == $in)
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $Nhora->materia->Nombre }} {{ $Nhora->grupo->Clave_Grupo }}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                ({{ $Nhora->Lugar }})
                                            </p>
                                        </td>
                                        <var {{ $in++ }}></var>@break
                                    @else
                                        <td
                                            class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                        @else
                            <td
                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            </td>
                        @endif
                    @endfor
                </tr>
            </tbody>
        </table> --}}

        {{-- <div class="firmas" style="margin-top: 50px;">

            <div class="firma1">


                <h3 style="text-align: center ; font-size: 11px"><span style="font-weight: bold">Elaboró</span></h3>
                <br>
                <h3 style="text-align: center; font-size: 12px">______________
                </h3>
                <h3 style="text-align: center ; font-size: 11px">
                    {{ $elaboro }}
                </h3>
                <h3 style="text-align: center ; font-size: 11px">Responsable de Inventario<span
                        style="font-weight: bold"></span></h3>
            </div>

            <div class="firma2">
                <h3 style="text-align: center ; font-size: 11px"><span style="font-weight: bold">Autorizó</span></h3>
                <br>
                <h3 style="text-align: center; font-size: 12px">______________
                </h3>
                <h3 style="text-align: center ; font-size: 11px">
                    {{ $autorizo }}
                </h3>
                <h3 style="text-align: center ; font-size: 11px">Jefe Administrativo<span
                        style="font-weight: bold"></span></h3>
            </div>
            <div class="firma3">
                <h3 style="text-align: center ; font-size: 11px"><span style="font-weight: bold">Vo.Bo.</span></h3>
                <br>
                <h3 style="text-align: center; font-size: 12px">______________
                </h3>
                <h3 style="text-align: center ; font-size: 11px">
                    {{ $vobo }}
                </h3>
                <h3 style="text-align: center ; font-size: 11px">Director(a) de la institución<span
                        style="font-weight: bold"></span></h3>
            </div>

        </div>  --}}
        {{-- <div class="flex items-center justify-center w-full mt-10">
            <table class="min-w-full leading-normal font-sans text-center border-b">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            HORA
                        </th>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            LUNES
                        </th>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            MARTES
                        </th>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            MIERCOLES
                        </th>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            JUEVES
                        </th>
                        <th
                            class="px-5 py-3 border-b border-black bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider border">
                            VIERNES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">7:30-8:20</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Phoras) && $Phoras != '[]')
                                @foreach ($Phoras as $Phora)
                                    @for ($i; $i < 6; $i++)
                                        @if ($Phora->dia_id == $i)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Phora->materia->Nombre }} {{ $Phora->grupo->Clave_Grupo }}</p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                     ({{ $Phora->Lugar }})
                                                </p>

                                            </td>
                                            <var {{ $i++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">8:20-9:10</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Shoras) && $Shoras != '[]')
                                @foreach ($Shoras as $Shora)
                                    @for ($is; $is < 6; $is++)
                                        @if ($Shora->dia_id == $is)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Shora->materia->Nombre }} {{ $Shora->grupo->Clave_Grupo }} 
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Shora->Lugar }}))
                                                </p>
                                            </td>
                                            <var {{ $is++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">9:10-10:00</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Thoras) && $Thoras != '[]')
                                @foreach ($Thoras as $Thora)
                                    @for ($it; $it < 6; $it++)
                                        @if ($Thora->dia_id == $it)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Thora->materia->Nombre }} {{ $Thora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Thora->Lugar}})
                                                </p>
                                            </td>
                                            <var {{ $it++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">10:00-10:30</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Qhoras) && $Qhoras != '[]')
                                @foreach ($Qhoras as $Qhora)
                                    @for ($iq; $iq < 6; $iq++)
                                        @if ($Qhora->dia_id == $iq)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Qhora->materia->Nombre }} {{ $Qhora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Qhora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $iq++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">10:30-11:20</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Choras) && $Choras != '[]')
                                @foreach ($Choras as $Chora)
                                    @for ($ic; $ic < 6; $ic++)
                                        @if ($Chora->dia_id == $ic)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Chora->materia->Nombre }} {{ $Chora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Chora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $ic++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">11:20-12:10</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($SEhoras) && $SEhoras != '[]')
                                @foreach ($SEhoras as $SEhora)
                                    @for ($ise; $ise < 6; $ise++)
                                        @if ($SEhora->dia_id == $ise)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $SEhora->materia->Nombre }} {{ $SEhora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $SEhora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $ise++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">12:10-13:00</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($SIhoras) && $SIhoras != '[]')
                                @foreach ($SIhoras as $SIhora)
                                    @for ($isi; $isi < 6; $isi++)
                                        @if ($SIhora->dia_id == $isi)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $SIhora->materia->Nombre }} {{ $SIhora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $SIhora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $isi++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">13:00-13:50</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Ohoras) && $Ohoras != '[]')
                                @if ($Ohoras == '[]')
                                    <td
                                        class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                    </td>
                                @endif
                                @foreach ($Ohoras as $Ohora)
                                    @for ($io; $io < 6; $io++)
                                        @if ($Ohora->dia_id == $io)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Ohora->materia->Nombre }} {{ $Ohora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Ohora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $io++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                            13:50-14:40</td>
                        @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Nhoras) && $Nhoras != '[]')
                                @foreach ($Nhoras as $Nhora)
                                    @for ($in; $in < 6; $in++)
                                        @if ($Nhora->dia_id == $in)
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Nhora->materia->Nombre }} {{ $Nhora->grupo->Clave_Grupo }}
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Nhora->Lugar }})
                                                </p>
                                            </td>
                                            <var {{ $in++ }}></var>@break
                                        @else
                                            <td
                                                class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                            </td>
                                        @endif
                                    @endfor
                                @endforeach
                            @else
                                <td
                                    class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
                                </td>
                            @endif
                        @endfor
                    </tr>
                </tbody>
            </table>
        </div>
        

    </main>
    <footer>
        <p><strong></strong></p>
    </footer>

</body>

</html> --}}
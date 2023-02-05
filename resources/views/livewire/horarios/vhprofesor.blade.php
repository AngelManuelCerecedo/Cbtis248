<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 ">
            <p class="text-4xl font-sans leading-tight text-center">HORARIO DEL PROFESOR : </p>
            <p class="text-4xl font-sans leading-tight text-center uppercase">{{ $Profesor->Nombre }}
                {{ $Profesor->ApPaterno }} {{ $Profesor->ApMaterno }} </p>
            <div class="flex items-center justify-center w-full mt-10">
                <table class="min-w-full leading-normal font-sans text-center border">
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
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">14:40-15:30</td>
                            @for ($p = 0; $p < 5; $p++)
                            @if (!empty($Dhoras) && $Dhoras != '[]')
                                @foreach ($Dhoras as $Dhora)
                                    @for ($d; $d < 6; $d++)
                                        @if ($Dhora->dia_id == $d)
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $Dhora->materia->Nombre }}
                                                    ({{ $Dhora->grupo->Clave_Grupo }})
                                                </p>
                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                    ({{ $Dhora->Lugar }})
                                                    </p>
                                            </td>
                                            <var {{ $d++ }}></var>
                                        @break
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border">
                                        </td>
                                    @endif
                                @endfor
                            @endforeach
                            @else
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm border"></td>
                            @endif
                            @endfor
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center w-full mt-10">
            @can('Imprimir-Horario-Docente')
            <a href="{{ route('HorariosP', [$Profesor->id])}}">
                <button type="button"
                    class="font-sans leading-none text-white py-4 px-10 ml-[95px] bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none">
                    Imprimir Horario Personal
                </button>
            </a>
        @endcan

        @can('Imprimir-Horario-Docente')
        <a href="{{ route('horariosO', [$Profesor->id])}}">
            <button type="button"
                class="font-sans leading-none text-white py-4 px-10 ml-[40px] bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none">
                Imprimir Horario Oficial
            </button>
        </a>
    @endcan
</div>
        </div>
    </div>
</div>

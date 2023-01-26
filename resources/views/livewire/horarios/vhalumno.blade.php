<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 ">
            <p class="text-4xl font-sans leading-tight text-center">HORARIO DEL GRUPO : {{ $Grupo->Clave_Grupo }} </p>
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
                                                <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border ">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $Phora->materia->Nombre }} ({{ $Phora->Lugar }})</p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase lead text-sm">
                                                        {{ $Phora->profesor->Nombre }}  {{ $Phora->profesor->ApPaterno }} {{ $Phora->profesor->ApMaterno }}
                                                    </p>

                                                </td>
                                                <var {{ $i++ }}></var>@break
                                            @else
                                                <td class="px-5 py-5 border-b border-black bg-white text-center text-base font-sans border">
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
                                                        {{ $Shora->materia->Nombre }} ({{ $Shora->Lugar }}) 
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Shora->profesor->Nombre }}  {{ $Shora->profesor->ApPaterno }} {{ $Shora->profesor->ApMaterno }}
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
                                                        {{ $Thora->materia->Nombre }} ({{ $Thora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Thora->profesor->Nombre }}  {{ $Thora->profesor->ApPaterno }} {{ $Thora->profesor->ApMaterno }}
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
                                                        {{ $Qhora->materia->Nombre }} ({{ $Qhora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Qhora->profesor->Nombre }}  {{ $Qhora->profesor->ApPaterno }} {{ $Qhora->profesor->ApMaterno }}
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
                                                        {{ $Chora->materia->Nombre }} ({{ $Chora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Chora->profesor->Nombre }}  {{ $Chora->profesor->ApPaterno }} {{ $Chora->profesor->ApMaterno }}
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
                                                        {{ $SEhora->materia->Nombre }} ({{ $SEhora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $SEhora->profesor->Nombre }}  {{ $SEhora->profesor->ApPaterno }} {{ $SEhora->profesor->ApMaterno }}
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
                                                        {{ $SIhora->materia->Nombre }} ({{ $SIhora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $SIhora->profesor->Nombre }}  {{ $SIhora->profesor->ApPaterno }} {{ $SIhora->profesor->ApMaterno }}
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
                                                        {{ $Ohora->materia->Nombre }} ({{ $Ohora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Ohora->profesor->Nombre }}  {{ $Ohora->profesor->ApPaterno }} {{ $Ohora->profesor->ApMaterno }}
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
                                                        {{ $Nhora->materia->Nombre }} ({{ $Nhora->Lugar }})
                                                    </p>
                                                    <p class="text-gray-900 whitespace-no-wrap uppercase text-sm">
                                                        {{ $Nhora->profesor->Nombre }}  {{ $Nhora->profesor->ApPaterno }} {{ $Nhora->profesor->ApMaterno }}
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
        </div>
    </div>
</div>


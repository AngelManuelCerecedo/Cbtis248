<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 mt-4">

            <p class="text-4xl font-sans leading-tight text-center">DATOS DEL ALUMNO</p>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Numero de Control</label>
                    <input type="text" wire:model='NC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Nombre</label>
                    <input type="text" wire:model='N'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Apellido Paterno</label>
                    <input type="text" wire:model='AP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Apellido Materno</label>
                    <input type="text" wire:model='AM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">CURP</label>
                    <input type="text" wire:model='C'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Lugar de Nacimiento</label>
                    <input type="text" wire:model='LN'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Numero de Calle</label>
                    <input type="text" wire:model='NCA'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Colonia</label>
                    <input type="text" wire:model='COL'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Localidad</label>
                    <input type="text" wire:model='LOC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Codigo Postal</label>
                    <input type="text" wire:model='CP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Lugar de Radicacion</label>
                    <input type="text" wire:model='LR'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Numero de Seguro Social</label>
                    <input type="text" wire:model='NSS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Tipo de Sangre</label>
                    <select wire:model='TS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona un Tipo de Sangre</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>No conocido</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Estado Civil</label>
                    <select wire:model='EC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona un Estado Civil</option>
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Divorciado(a)</option>
                        <option>Viudo(a)</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Correo Electronico</label>
                    <input type="email" wire:model='EM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Telefono</label>
                    <input type="text" wire:model='T'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>

            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Grado</label>
                    <select wire:model='G'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona un Grado</option>
                        @foreach ($grados as $grads)
                            <option value="{{ $grads->id }}">{{ $grads->Nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Especialidad</label>
                    <select wire:model='ESP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Seleciona una Especialidad</option>
                        @foreach ($especialidad as $esps)
                            <option value="{{ $esps->id }}">{{ $esps->Nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Promedio</label>
                    <input type="text" wire:model='PROM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Año de Finalizacion</label>
                    <input type="date" wire:model='AF'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>

            <div class="mt-20">
                <p class="text-4xl font-sans leading-tight text-center">DATOS DEL TUTOR</p>
            </div>

            <div class="my-2 flex sm:flex-row flex-col pt-4">
                <div class="block">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                    </span>
                    <input placeholder="Buscar" wire:model='BTUT' wire:keydown.escape="reseteo"
                        wire:keydown.tab="reseteo"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-black border-b block pl-2 sm:mr-16 md:mr-64 lg:mr-0 py-2 w-96 bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>

                <div style="overflow-y: scroll; overflow-x: hidden; max-height: 250px;"
                    class="absolute  w-96 rounded-lg  bg-white rounded-t-none shadow-lg list-group mt-8">
                    @if (!empty($BTUT))
                        @if ($SUGT != null || count($SUGT) > 0)
                            @foreach ($SUGT as $sug)
                                <div class="hover:bg-indigo-300">
                                    <button class="px-2 py-2 text-sm hover:text-white  "
                                        wire:click="buscarTUT({{ $sug->id }})">{{ $sug->Nombre }}
                                        {{ $sug->ApPaterno }} {{ $sug->ApMaterno }} </button>
                                </div>
                                <hr>
                            @endforeach
                        @endif
                        @if ($SUGT == null || count($SUGT) == 0)
                            <div class="bg-white">
                                <button class="px-2 py-2 text-sm"><span class="text-red-600">Tutor no Encontrado, Registralo
                                    </span></button>
                            </div>
                        @endif
                    @endif
                </div>
            </div>

            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Nombre</label>
                    <input type="text" wire:model='NOM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Apellido Paterno</label>
                    <input type="text" wire:model='APP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Apellido Materno</label>
                    <input type="text" wire:model='APM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Celular</label>
                    <input type="text" wire:model='CEL'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>

            <div class="mt-24">
                <p class="text-4xl font-sans leading-tight text-center">DATOS DE LA SECUNDARIA</p>
            </div>

            <div class="my-2 flex sm:flex-row flex-col pt-4">
                <div class="block">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                    </span>
                    <input placeholder="Buscar" wire:model='BSEC'wire:keydown.escape="reseteo"
                        wire:keydown.tab="reseteo"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-black border-b block pl-2 sm:mr-16 md:mr-64 lg:mr-0 py-2 w-96 bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
                <div style="overflow-y: scroll; overflow-x: hidden; max-height: 250px;"
                    class="absolute  w-96 rounded-lg  bg-white rounded-t-none shadow-lg list-group mt-8">
                    @if (!empty($BSEC))
                        @if ($SUGS != null || count($SUGS) > 0)
                            @foreach ($SUGS as $sug)
                                <div class="hover:bg-indigo-300">
                                    <button class="px-2 py-2 text-sm hover:text-white "
                                        wire:click="buscarSEC({{ $sug->id }})">{{ $sug->Nombre }}
                                        {{ $sug->ClaveSecu }}</button>
                                </div>
                                <hr>
                            @endforeach
                        @endif
                        @if ($SUGS == null || count($SUGS) == 0)
                            <div class="bg-white">
                                <button class="px-2 py-2 text-sm"><span class="text-red-600">Secundaria no Encontrada, Registralo
                                    </span></button>
                            </div>
                        @endif
                    @endif
                </div>
            </div>

            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Nombre</label>
                    <input type="text" wire:model='NSEC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Clave de Secundaria</label>
                    <input type="text" wire:model='CLAVS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Modalidad</label>
                    <select wire:model='MODS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Selecciona una Modalidad</option>
                        <option value="General">General</option>
                        <option value="Tecnica">Tecnica</option>
                        <option value="Telesecundaria">Telesecundaria</option>
                        <option value="Otra">Otra</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Regimen</label>
                    <select wire:model='REG'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="0">Selecciona un Regimen</option>
                        <option value="Publica">Publica</option>
                        <option value="Privada">Privada</option>
                    </select>
                </div>
            </div>


            <div class="flex items-center justify-center w-full mt-24">
                <button
                    class="mt-9 font-sans leading-none text-white py-4 px-10 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
                    wire:click="registrar()">
                    Registrar
                </button>
            </div>
        </div>
    </div>
</div>

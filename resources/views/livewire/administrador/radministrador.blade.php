<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 mt-4">

            <p class="text-4xl font-sans leading-tight text-center">DATOS DEL PERSONAL</p>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Nombre</label>
                    <input type="text" wire:model='N'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('N')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Apellido Paterno</label>
                    <input type="text" wire:model='AP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('AP')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Apellido Materno</label>
                    <input type="text" wire:model='AM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('AM')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">CURP</label>
                    <input type="text" wire:model='C'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('C')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">RFC</label>
                    <input type="text" wire:model='RFC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('RFC')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Clave de Cobro</label>
                    <input type="text" wire:model='CC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('CC')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Categoria</label>
                    <select wire:model='CAT'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Selecciona una Categoria</option>
                        <option value="Asociado 'A'">Asociado 'A'</option>
                        <option value="Asociado 'B'">Asociado 'B'</option>
                        <option value="Asociado 'C'">Asociado 'C'</option>
                        <option value="Titular 'A'">Titular 'A'</option>
                        <option value="Titular 'B'">Titular 'B'</option>
                        <option value="Titular 'C'">Titular 'C'</option>
                        <option value="Asignatura 'A'">Asignatura 'A'</option>
                        <option value="Asignatura 'B'">Asignatura 'B'</option>
                        <option value="Asignatura 'C'">Asignatura 'C'</option>
                    </select>
                    @error('CAT')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Fecha Ingreso</label>
                    <input type="date" wire:model='FI'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('FI')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Fecha Ingreso al DGETI</label>
                    <input type="date" wire:model='FID'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('FID')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Fecha Ingreso a la SEP</label>
                    <input type="date" wire:model='FIS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('FIS')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Numero de Plaza</label>
                    <input type="text" wire:model='NP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('NP')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Horas Nombramiento</label>
                    <input type="text" wire:model='HN'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('HN')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Numero de Tarjeta</label>
                    <input type="text" wire:model='NT'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('NT')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Perfil Abreviado</label>
                    <input type="text" wire:model='PA'
                    class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Perfil</label>
                    <input type="text" wire:model='P'
                    class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('P')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Puesto</label>
                    <select wire:model='PT'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Selecciona un Puesto</option>
                        <option value="Docente">Docente</option>
                        <option value="Jefe de Departamento">Jefe de Departamento</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Docente/Administrativo">Docente/Administrativo</option>
                    </select>
                    @error('PT')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Tipo de Personal</label>
                    <select wire:model='TD'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option value="">Selecciona un Tipo</option>
                        <option value="Usuario">Usuario</option>
                        <option value="No usuario">No usuario</option>
                    </select>
                    @error('TD')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Correo Electronico</label>
                    <input type="text" wire:model='E'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('E')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Observaciones</label>
                    <input type="text" wire:model='O'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                    @error('O')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                </div>
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

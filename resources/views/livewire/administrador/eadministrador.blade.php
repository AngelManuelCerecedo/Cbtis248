<div>
    <div class="w-full">
        <div class="w-full rounded p-8 sm:p-12 mt-4">

            <p class="text-4xl font-sans leading-tight text-center">DATOS DEL PROFESOR</p>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Nombre</label>
                    <input type="text" wire:model='N'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Apellido Paterno</label>
                    <input type="text" wire:model='AP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Apellido Materno</label>
                    <input type="text" wire:model='AM'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">CURP</label>
                    <input type="text" wire:model='C'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">RFC</label>
                    <input type="text" wire:model='RFC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Clave de Cobro</label>
                    <input type="text" wire:model='CC'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Categoria</label>
                    <select wire:model='CAT'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option>Selecciona una Categoria</option>
                        <option value="Categoria1">Categoria1</option>
                        <option value="Categoria2">Categoria2</option>
                        <option value="Categoria3">Categoria3</option>
                        <option value="Categoria4">Categoria4</option>
                        <option value="Categoria5">Categoria5</option>
                        <option value="Categoria6">Categoria6</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Fecha Ingreso</label>
                    <input type="date" wire:model='FI'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Fecha Ingreso al DGETI</label>
                    <input type="date" wire:model='FID'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Fecha Ingreso a la SEP</label>
                    <input type="date" wire:model='FIS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Numero de Plaza</label>
                    <input type="text" wire:model='NP'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Horas Nombramiento</label>
                    <input type="text" wire:model='HN'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Numero de Tarjeta</label>
                    <input type="text" wire:model='NT'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Perfil</label>
                    <select wire:model='P'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option>Selecciona un Perfil</option>
                        <option value="Perfil1">Perfil1</option>
                        <option value="Perfil2">Perfil2</option>
                        <option value="Perfil3">Perfil3</option>
                        <option value="Perfil4">Perfil4</option>
                        <option value="Perfil5">Perfil5</option>
                        <option value="Perfil6">Perfil6</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                    <label class="font-sans leading-none">Observaciones</label>
                    <input type="text" wire:model='O'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Estatus</label>
                    <select wire:model='ESTATUS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black">
                        <option>Selecciona un Estatus</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full md:w-1/4 flex flex-col">
                    <label class="font-sans leading-none">Correo</label>
                    <input type="text" wire:model='E'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-sans leading-none">Contraseña</label>
                    <input type="text" wire:model='PS'
                        class="leading-none text-black p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white border rounded border-black" />
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6">
                </div>
                <div class="w-full md:w-1/4 flex flex-col md:ml-6 md:mt-0 mt-4">
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center w-full mt-24">
            <button
            class="mt-9 font-sans leading-none text-white py-4 px-10 mr-10 bg-[#D5C28B] rounded hover:bg-[#D5C28B] focus:ring-2 focus:ring-offset-2 focus:ring-[#D5C28B] focus:outline-none"
            wire:click="redic()">
            Cancelar
        </button>

        <button
            class="mt-9 font-sans leading-none text-white py-4 px-10 bg-[#78163B] rounded hover:bg-[#78163B] focus:ring-2 focus:ring-offset-2 focus:ring-[#78163B] focus:outline-none"
            wire:click="actualizar()">
            Actualizar
        </button>
        </div>

    </div>
</div>
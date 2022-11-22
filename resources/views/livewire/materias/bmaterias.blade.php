<div>

    <body class="antialiased font-sans bg-gray-200 font-sans">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="pt-8">
                    <h1 class="text-4xl font-sans leading-tight text-center">MATERIAS</h1>
                </div>
                <!--DIV PADRE-->
                <div class="my-2 flex sm:flex-row flex-col pt-16">
                    <!--DIV SEARCH-->
                    <div class="block">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        </span>
                        <input placeholder="Buscar"
                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-2 sm:mr-16 md:mr-64 lg:mr-96 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                    <div>
                        <button
                            class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 sm:px-2 sm:mr-8 lg:mr-32 rounded-l sm:ml-2 md:ml-8">
                            Buscar
                        </button>
                    </div>
                    <!--DIV FILTRO & CANTIDAD-->
                    <div class="flex flex-row mb-1 sm:mb-0  lg:pr-4 xl:pl-96">
                        <div class="sm:pl-0 sm:mr-0 xl:pl-32">
                            <select
                                class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 sm:py-0 sm:px-2 sm:pr-8 md:py-2 md:px-4 md:pr-8 lg:mx-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal font-sans text-center">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sans text-gray-600 uppercase tracking-wider">
                                        Especialidad
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-base font-sesansmibold text-gray-600 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">POO</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">Programacion</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">ACCIONES</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">POO</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">Programacion</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">ACCIONES</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">POO</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">Programacion</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">ACCIONES</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">POO</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">Programacion</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-base">
                                        <p class="text-gray-900 whitespace-no-wrap">ACCIONES</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Showing 1 to 4 of 50 Entries
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>

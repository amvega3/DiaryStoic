<div class="row" x-data="{ open: false, for_edit: false, add: false, edit: false, edit_permi: false }">
    <div class="row" x-data="{ open: false, for_edit: false, add: false, edit: false, edit_permi: false }">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        <div class="">
            <div id="button-trigger" class="">
                <div class="card-content" x-cloak>
                    <div x-show="!open" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                        Lista de Roles
                    </div>
                    <div x-show="add" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                        Agregar Rol
                    </div>
                    <div x-show="edit" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                        Editar Rol
                    </div>
                    <div class="p-2 w-full mx-auto overflow-hidden bg-white rounded-lg shadow min-w-max-content">
                        <div class="max-w-7xl px-2 mx-auto mb-1 overflow-hidden bg-white rounded-lg border shadow-sm ">
                            <div class="flex m-2 aspect-auto">
                                <div class="flex-none">
                                    <button class="bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] " x-on:click="open = !open, for_edit = !for_edit , add = !add" x-show="!for_edit">+</button>
                                </div>
                                <div class="grow rounded  " x-show="!open">
                                    <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text" placeholder="Buscar Rol..." />
                                </div>
                            </div>

                            <div x-show="open">
                                <div class="bg-white grid grid-cols-1 gap-4">
                                    <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                        <div class="flex-auto flex m-2 w-2/4">
                                            <label class="font-semibold block w-32 m-2 ">
                                                <span for="id" class="m-2 text-left  form-label ">NOMBRE</label>
                                            <input wire:model="name" name="name" type="text" placeholder="Ingrese un nombre..." class="w-full p-2 rounded form-input" required>
                                            @error('name')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="flex-auto flex m-2 w-2/4">
                                            <label class="font-semibold block w-32 m-2 ">
                                                <span for="id" class="m-2 text-left  form-label ">DESCRIPCIÓN </label>
                                            <input wire:model="guard_name" name="guard_name" type="text" placeholder="Ingrese una descripción ..." class="w-full p-2 rounded form-input" required>
                                            @error('guard_name')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                            @enderror

                                        </div>

                                    </div>
                                </div>
                                @if ($accion == 'store')
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                        CANCELAR</button>
                                    <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add" class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">AGREGAR</button>
                                </div>
                                @else
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit,edit = !edit" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                        CANCELAR</button>
                                    <button wire:click="update" x-on:click="open = !open , for_edit =!for_edit,edit = !edit" class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">EDITAR</button>
                                </div>
                                @endif

                            </div>



                            <div class="border rounded " x-show="!open">
                                <div class="w-full mx-auto overflow-hidden bg-white rounded-lg shadow min-w-max-content">
                                    <table class="w-full mx-auto overflow-x-auto bg-white rounded-lg shadow min-w-max-content ">
                                        <thead class="border-b border-gray-200 bg-gray-50">
                                            <tr class="text-xs text-justify text-gray-500">
                                                <!-- <th class="px-4 py-3">ID</th> -->
                                                <th class="px-4 py-3">NOMBRE</th>
                                                <th class="px-4 py-3">DESCRIPCIÓN</th>
                                                <th class="px-4 py-3">ACCIÓN</th>
                                            </tr>
                                        </thead>
                                        <tbody class="items-center w-full mx-auto divide-y divide-gray-300">
                                            @foreach ($roles as $role)
                                            <tr class="text-xs  text-justify mx-auto p-2 text-gray-500">
                                                <!--  <td class="px-4 py-3 text-xs  text-justify">{{ $role->id }}</td> -->
                                                <td class="px-4 py-3 text-xs  text-justify">{{ $role->name }}</td>
                                                <td class="px-4 py-3 text-xs  text-justify">{{ $role->description }}</td>
                                                <td class="px-4 py-3 text-xs  text-justify">
                                                    <button wire:click="edit({{ $role }})" x-on:click="open = !open , for_edit = !for_edit , edit = !edit" class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">EDITAR</button>
                                                    <button wire:click="asignar({{ $role }})" class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">PERMISOS</button>

                                                    <button wire:click="destroy({{ $role }})" class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">ELIMINAR</button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
    </div>
</div>

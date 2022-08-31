<div class="min-h-screen py-14 max-w-5xl mx-auto bg-black" x-data="{ open: false, for_edit: false, add: false, edit: false, edit_permi: false }">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>


    <div class="text-white" x-cloak>
        <div x-show="!open" class="font-normal uppercase tracking-wide w-full text-2xl  rounded p-2 bg-transparent">
            Lista de Roles
        </div>
        <div x-show="add" class="font-normal uppercase tracking-wide w-full text-2xl  rounded p-2 bg-transparent">
            Agregar Rol
        </div>
        <div x-show="edit" class="font-normal uppercase tracking-wide w-full text-2xl  rounded p-2 bg-transparent">
            Editar Rol
        </div>
        <div class="m-3 p-1 shadow-cyan-200 w-full mx-auto overflow-hidden bg-transparent rounded-lg shadow min-w-max-content">
            <div class="max-w-7xl px-2 mx-auto mb-1 overflow-hidden bg-transparent ">
                <div class="flex m-2 aspect-auto">
                    <div class="flex-none">
                        <button class="bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] " x-on:click="open = !open, for_edit = !for_edit , add = !add"
                            x-show="!for_edit">+</button>
                    </div>
                    <div class="grow rounded  " x-show="!open">
                        <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text" placeholder="Buscar Rol..." />
                    </div>
                </div>

                <div x-show="open">
                    <div class="bg-transparent grid grid-cols-1 gap-4">
                        <div class="bg-transparent text-slate-100 border m-2 p-2 grid grid-cols-2 rounded shadow-md text-center">
                            <div class="flex-auto flex m-2 w-3/4">
                                <label class="font-semibold block w-32 m-2 ">
                                    <span for="id" class="m-2 text-left  form-label ">NOMBRE</label>
                                <input wire:model="name" name="name" type="text" placeholder="Ingrese un nombre..." class="w-full p-2 text-black rounded form-input" required>
                                @error('name')
                                    <div class="text-red-700">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                @enderror

                            </div>
                            <div class="flex-auto flex m-2 w-3/4">
                                <label class="font-semibold block w-32 m-2 ">
                                    <span for="id" class="m-2 text-left  form-label ">DESCRIPCIÓN </label>
                                <input wire:model="guard_name" name="guard_name" type="text" placeholder="Ingrese una descripción ..." class="w-full p-2 text-black rounded form-input" required>
                                @error('guard_name')
                                    <div class="text-red-700">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                @enderror

                            </div>

                        </div>
                    </div>
                    @if ($accion == 'store')
                        <div class="bg-transparent text-slate-900  m-2 p-2  shadow-md text-center">
                            <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add"
                                class="text-gray-500 bg-transparent hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                CANCELAR</button>
                            <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add"
                                class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">AGREGAR</button>
                        </div>
                    @else
                        <div class="bg-transparent text-slate-900  m-2 p-2 shadow-md text-center">
                            <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                class="text-gray-500 bg-transparent hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                CANCELAR</button>
                            <button wire:click="update" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">EDITAR</button>
                        </div>
                    @endif

                </div>

                <div class="border rounded " x-show="!open">
                    <div class="w-full mx-auto overflow-hidden bg-transparent shadow min-w-max-content">
                        <table class="w-full mx-auto overflow-x-auto bg-transparent shadow min-w-max-content ">
                            <thead class="border-b border-gray-200 bg-gray-600">
                                <tr class="text-xs text-justify text-gray-200">
                                    <th class="px-4 py-3">NOMBRE</th>
                                    <th class="px-4 py-3">DESCRIPCIÓN</th>
                                    <th class="px-4 py-3">ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody class="items-center w-full mx-auto divide-y divide-gray-300">
                                @foreach ($roles as $role)
                                    <tr class="text-xs  text-justify mx-auto p-2 text-gray-100">
                                        <td class="px-4 py-3 text-xs  text-justify">{{ $role->name }}</td>
                                        <td class="px-4 py-3 text-xs  text-justify">{{ $role->description }}</td>
                                        <td class="px-4 py-3 text-xs whitespace-nowrap text-justify">
                                            <button wire:click="edit({{ $role }})" x-on:click="open = !open , for_edit = !for_edit , edit = !edit"
                                                class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">EDITAR</button>
                                            <button wire:click="asignar({{ $role }})"
                                                class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">PERMISOS</button>

                                            <button wire:click="destroy({{ $role }})"
                                                class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">ELIMINAR</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-2 mx-1">
                            {{ $roles->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if ($modal == 1)
        <x-dialog-modal-black wire:model="modal" x-cloak>

            <x-slot name="title">
                @if ($modal == 1)
                    <div class="flex m-2 border-b-2 p-2">
                        <div class="flex-init">
                            <div x-show='!edit_permi'>
                                <button class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]" x-on:click="edit_permi = true">AGREGAR</button>

                            </div>
                            <div x-show='edit_permi' class="ml-10">
                                <button class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] " x-on:click="edit_permi = false">Volver</button>

                            </div>

                        </div>
                        <div class="w-full text-center">
                            <h1 class="text-center text-2xl ">PERMISOS</h1>
                        </div>
                    </div>
                @endif
            </x-slot>

            <x-slot name="content" class="">
                <div class="w-full overflow-y-auto h-80">
                    @if ($modal == 1)

                        <table x-show='!edit_permi' class="mx-auto w-full  overflow-hidden table-auto bg-transparent rounded-lg shadow ">
                            <thead class="border-b border-gray-500 bg-gray-50">
                                <tr class="text-xs w-full  text-justify text-gray-400">
                                    {{-- <th class="px-4 py-2">ID</th> --}}
                                    <th class="px-4 py-2">NOMBRE</th>
                                    <th class="px-4 py-2  whitespace-nowrap">DESCRIPCIÓN</th>
                                    <th class="px-4 py-2">FECHA</th>
                                    {{-- <th class="px-4 py-2">ACCIÓN</th> --}}

                                </tr>
                            </thead>
                            <tbody class="items-stretch w-full divide-y divide-gray-200">
                                @foreach ($permisos->permissions as $permiso)
                                    <tr class="text-xs  text-justify mx-auto p-2 text-gray-400">
                                        {{-- <td class="px-4 py-3 text-xs  text-justify">{{ $historial->id }}</td> --}}
                                        <td class="px-4 py-3 text-xs tex-red  text-justify">{{ $permiso->name }}</td>
                                        <td class="px-4 py-3 text-xs  text-justify">{{ $permiso->description }}</td>
                                        <td class="px-4 py-3 text-xs  text-justify  whitespace-nowrap"> {{ $permiso->created_at }} </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="overflow-hidden rounded-sm " x-show='edit_permi'>
                            <div class="border-t-2 max-w-4xl mx-auto m-1 p-2 shadow-md rounded-sm">
                                @foreach ($acumulador2 as $n)
                                    <div class="flex m-2 text-white  ">
                                        {{-- {{$n->id}} --}}
                                        <input wire:model="permisos_items.{{ $n['id'] }}" value="{{ $n['id'] }}" class="m-1" type="checkbox" name="" id="">
                                        {{ $n['description'] }}
                                        {{-- {{print_r($permisos_items)}} --}}
                                    </div>
                                @endforeach
                            </div>

                            <div class="text-center p-1 ml-14">
                                <button wire:click='guardar' class="bg-red-900 shadow-sm rounded-md hover:bg-red-600 p-2 uppercase text-white  hover:transition-colors">Guardar</button>
                            </div>
                        </div>

                    @endif
                </div>
            </x-slot>
            <x-slot name="footer" class="bg-transparent">
            </x-slot>
        </x-dialog-modal-black>
    @endif
</div>

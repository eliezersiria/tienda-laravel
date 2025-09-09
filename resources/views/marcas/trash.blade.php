@extends('layouts.base')

@section('title', 'Listado de Marcas')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection


@section('contenido-central')

    <x-breadcrumb-marcas url="marcas.listar" text="Papelera de reciclaje" />

    <br>

    <div x-data="userHandler()">
        <table class="min-w-full text-left text-sm">
            <thead>
                <tr class="bg-red-300">
                    <th class="px-4 py-3 font-medium">Nombre</th>
                    <th class="px-4 py-3 font-medium">Fecha de eliminación</th>
                    <th class="px-4 py-3 font-medium">Restaurar</th>
                    <th class="px-4 py-3 font-medium">Borrar permanentemente</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($marcasEliminadas as $marca)
                    <tr class="hover:bg-gray-200" id="row-{{ $marca->id }}" x-show="!hiddenRows.includes({{ $marca->id }})"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2">

                        <td class="px-4 py-3">{{ $marca->nombre_marca }}</td>
                        <td class="px-4 py-3">{{ $marca->deleted_at->format('d/m/Y H:i') }}</td>

                        <td class="px-4 py-3">

                            <button data-id="{{ $marca->id }}" data-nombremarca="{{ $marca->nombre_marca }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-4 rounded inline-flex items-center"
                            @click="restaurarMarca($el)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" clip-rule="evenodd" />
                                </svg>
                            Restaurar
                            </button>
                        
                        
                        </td>

                        <td class="px-4 py-3 align-middle">
                            <button data-id="{{ $marca->id }}" data-nombremarca="{{ $marca->nombre_marca }}"
                                @click="confirmSend($el)" class="bg-red-500 hover:bg-blue-600 text-white py-1 px-4 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Borrar
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    

    


@endsection
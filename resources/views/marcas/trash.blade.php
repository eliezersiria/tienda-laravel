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
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2">

                        <td class="px-4 py-3">{{ $marca->nombre_marca }}</td>
                        <td class="px-4 py-3">{{ $marca->deleted_at->format('d/m/Y H:i') }}</td>
                        <td class="px-4 py-3"><a href="#">Restaurar</a></td>
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
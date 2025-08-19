@extends('layouts.base')

@section('title', 'Listado de Marcas')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection


@section('contenido-central')

    <x-breadcrumb-marcas url="marcas.listar" text="Papelera de reciclaje"/>

    
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
                <tr class="hover:bg-gray-200">
                    <td class="px-4 py-3">{{ $marca->nombre_marca }}</td>
                    <td class="px-4 py-3">{{ $marca->deleted_at->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-3"><a href="#">Restaurar</a></td>
                    <td class="px-4 py-3 align-middle">
                        <!--a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </a-->

                        <div x-data="{ open: false }">
                            <button @click="open = !open">Toggle</button>
                            <p x-show="open">Hola desde Alpine!</p>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
@extends('layouts.base')

@section('title', 'Listado de Marcas')

@section('body')

<div class="grid grid-cols-[25%_75%] gap-4 p-4 min-h-[calc(100vh-56px)]">

    <!-- Contenido menu -->
    <div class="bg-gray-200">
        <x-marcas-sidebar/>             
    </div>

    <!-- Contenido principal -->
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Marcas</h1>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Icono</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr class="hover:bg-gray-100">
                    <td>{{ $marca->nombre_marca }}</td>
                    <td>{{ $marca->icono }}</td>
                    <td><a href="{{ route('marcas.editar', $marca->id) }}" class="text-blue-500 hover:underline">Editar</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

@endsection
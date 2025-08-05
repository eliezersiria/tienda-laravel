@extends('layouts.base')

@section('title', 'Listado de Marcas')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection


@section('contenido-central')

    <h1 class="text-2xl font-bold mb-6">Marcas</h1>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
        <p class="font-bold">Mostrando {{ $numeroFilas }} registros</p>
        <p class="text-xs">La consulta tardó {{ $tiempo }} segundos</p>
    </div>

    <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Icono</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Opciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-300">
            @foreach($marcas as $marca)
                <tr class="hover:bg-gray-100">
                    <td>{{ $marca->nombre_marca }}</td>
                    <td>
                        @if($marca->icono)
                            <img src="{{ Storage::url($marca->icono) }}" alt="Imagen" class="w-7 h-7 rounded-lg object-cover">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('marcas.editar',$marca->id) }}" class="text-blue-500 hover:underline">Editar</a>
                        <a href="{{ route('marcas.eliminar', $marca->id) }}" class="text-blue-500 hover:underline">Eliminar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>    
    

@endsection
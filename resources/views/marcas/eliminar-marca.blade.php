@extends('layouts.base')

@section('title', 'Editar Marca')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection

@section('contenido-central')

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('marcas.listar')}}" class="inline-flex items-center text-gray-700 hover:text-blue-600">
                    <!-- ícono de casa (home) -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Regresar
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 14l5-5-5-5v10z" />
                    </svg>
                    Eliminando {{ $marcasVehiculo->nombre_marca }}
                </div>
            </li>
        </ol>
    </nav>
    <br>

    @livewire('eliminar-marca-vehiculo', ['MarcaId' => $marcasVehiculo->id])

@endsection
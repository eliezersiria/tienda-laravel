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
                    <svg class="w-5 h-5 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2L2 9h3v7h4v-4h2v4h4V9h3L10 2z" />
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

    @livewire('eliminar-marca-vehiculo', ['id' => $marcasVehiculo->id])

@endsection
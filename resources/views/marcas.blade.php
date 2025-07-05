@extends('layouts.base')

@section('title', 'Marcas de Vehiculo')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection

@section('contenido-central')
    <div class="bg-gray-100">
        <div class="bg-white p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Panel de Marcas</h1>
            <p class="text-gray-600 text-lg">
                Aquí puedes gestionar las marcas de los vehículos con facilidad.
            </p>
            <div class="mt-6">
            </div>
        </div>
    </div>
@endsection
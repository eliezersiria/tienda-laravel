@extends('layouts.base')

@section('title', 'Marcas de Vehiculo')

@section('body')

<div class="grid grid-cols-[25%_75%] gap-4 p-4 min-h-[calc(100vh-56px)]">

    
    <div class="bg-gray-200">
        <x-marcas-sidebar/>             
    </div>

    
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

</div>

@endsection


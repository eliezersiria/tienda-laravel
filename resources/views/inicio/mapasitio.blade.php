@extends('layouts.base')

@section('title', 'Mapa del sitio')

@section('body')

<div class="grid grid-cols-[25%_75%] gap-4 p-4 min-h-[calc(100vh-56px)]">

    <!-- Contenido menu dinámico -->
    <div class="bg-gray-200">
        <x-sidebar/>             
    </div>

    <!-- Contenido principal dinámico -->
    <div class="bg-gray-100">
        
        <div class="max-w-4xl mx-auto my-10 p-10 bg-white rounded-2xl shadow-xl border border-gray-200">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Mapa del sitio</h1>
            <p class="text-gray-600 text-lg">
                Aquí puedes ver el mapa del sitio.
            </p>
        </div>


    </div>

</div>

@endsection
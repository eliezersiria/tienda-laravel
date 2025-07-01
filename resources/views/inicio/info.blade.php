@extends('layouts.base')

@section('title', 'informacion')

@section('body')

<div class="grid grid-cols-[25%_75%] gap-4 p-4 min-h-[calc(100vh-56px)]">

    <!-- Contenido menu dinámico -->
    <div class="bg-gray-200">
        <x-sidebar/>             
    </div>

    <!-- Contenido principal dinámico -->
    <div class="bg-gray-100">
        
        <div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Información del Sistema</h1>

        <ul class="divide-y divide-gray-200">
            @foreach ($info as $key => $value)
                <li class="py-2 flex justify-between">
                    <span class="font-medium text-gray-700">{{ $key }}:</span>
                    <span class="text-gray-900">{{ $value }}</span>
                </li>
            @endforeach
        </ul>
    </div>


    </div>

</div>

@endsection
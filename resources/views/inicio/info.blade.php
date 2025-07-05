@extends('layouts.base')

@section('title', 'informacion')

@section('menu-izquierdo')
    <x-sidebar />
@endsection

@section('contenido-central')

    <div class="max-w-3xl bg-white p-6 rounded shadow">
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

@endsection
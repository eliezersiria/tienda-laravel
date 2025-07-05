@extends('layouts.base')

@section('title', 'Inicio')

@section('menu-izquierdo')
    <x-sidebar/>
@endsection

@section('contenido-central')
 
    <div class="max-w-4xl mx-auto my-10 p-10 bg-white rounded-2xl shadow-xl border border-gray-200">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Bienvenido a tu panel</h1>
        <p class="text-gray-600 text-lg">
            Aquí puedes gestionar tu información, ver estadísticas y acceder a todas tus funcionalidades con facilidad.
        </p>        
    </div>


@endsection


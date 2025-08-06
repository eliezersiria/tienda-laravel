@extends('layouts.base')

@section('title', 'Agregar Marca')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection


@section('contenido-central')

    <div>
        <!-- Contenido principal -->
        <form method="POST" action="{{ route('marcas.guardar') }}" class="p-8 w-full max-w-md space-y-6"
            enctype="multipart/form-data">
            @csrf

            @if(session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded">{{ session('success') }}</div>
            @endif

            <h2 class="text-2xl font-bold text-center text-gray-800">Agregar marca de vehículo</h2>

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la marca</label>
                <input type="text" name="nombre_marca" id="nombre" value="{{ old('nombre_marca') }}" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 p-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                @error('nombre_marca')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Icono</label>
                <input type="file" id="foto" name="icono" accept="image/*" />
                @error('icono')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">Guardar</button>
        </form>

    </div>
@endsection
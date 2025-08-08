@extends('layouts.base')

@section('title', 'Listado de Marcas')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection


@section('contenido-central')

    <h2>Papelera de reciclaje</h2>
    <table class="min-w-full divide-y divide-gray-200 shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de eliminación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($marcasEliminadas as $marca)
                <tr>
                    <td>{{ $marca->nombre_marca }}</td>
                    <td>{{ $marca->deleted_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit">Restaurar</button>
                        </form>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar definitivamente</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
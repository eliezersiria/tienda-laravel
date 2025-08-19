@extends('layouts.base')

@section('title', 'Editar Marca')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection

@section('contenido-central')

    <x-breadcrumb-marcas url="marcas.listar" text="Eliminando {{ $marcasVehiculo->nombre_marca }}"/>

    @livewire('eliminar-marca-vehiculo', ['MarcaId' => $marcasVehiculo->id])

@endsection
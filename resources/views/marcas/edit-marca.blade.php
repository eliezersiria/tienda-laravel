@extends('layouts.base')

@section('title', 'Editar Marca')

@section('menu-izquierdo')
    <x-marcas-sidebar />
@endsection

@section('contenido-central')

    <x-breadcrumb-marcas url="marcas.listar" text="Editar {{ $marcasVehiculo->nombre_marca }}"/>

    @livewire('editar-marca-vehiculo', ['id' => $marcasVehiculo->id])
@endsection
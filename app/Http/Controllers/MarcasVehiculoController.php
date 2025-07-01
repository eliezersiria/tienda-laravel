<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcasVehiculo;

class MarcasVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('marcas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostramos en formulario
        return view('marcas.agregar-marca');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre_marca' => 'required|string|max:255',
            'icono' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        
        $nombreArchivo = $request->file('icono')->store('fotos','public');

        MarcasVehiculo::create([
            'nombre_marca' => $request->nombre_marca,
            'icono' => $nombreArchivo
        ]);

        return redirect()->route('marcas.agregar')->with('success','Datos guardados correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(MarcasVehiculo $marcasVehiculo)
    {
        //Listar marcas de vehículos
        $marcas = MarcasVehiculo::all();
        return view('marcas.show-marcas', compact('marcas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarcasVehiculo $marcasVehiculo)
    {
        //
        return view('marcas.edit-marca', compact('marcasVehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarcasVehiculo $marcasVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarcasVehiculo $marcasVehiculo)
    {
        //
    }
}

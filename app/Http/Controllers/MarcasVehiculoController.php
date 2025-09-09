<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcasVehiculo;
use Illuminate\Support\Facades\Storage;

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
            'nombre_marca' => 'required|string|max:255|unique:marcas_vehiculos,nombre_marca',
            'icono' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ],
        [
            'nombre_marca.unique' => 'Este nombre de marca ya se encuentra registrado'
        ]
    );
        
        $nombreArchivo = $request->file( 'icono')->store('fotos','public');

        MarcasVehiculo::create([
            'nombre_marca' => $request->nombre_marca,
            'icono' => $nombreArchivo
        ]);

        return redirect()->route('marcas.agregar')->with('success','Datos guardados correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //Listar marcas de vehículos
        $inicio = microtime(true);
        $marcas = MarcasVehiculo::all();
        $fin = microtime(true);
        $numeroFilas = $marcas->count();
        $tiempo = round($fin - $inicio, 3); // tiempo en segundos con 3 decimales
        return view('marcas.show-marcas', compact('marcas','tiempo','numeroFilas'));
        //return response()->json($marcas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarcasVehiculo $marcasVehiculo)
    {
        return view('marcas.edit-marca', compact('marcasVehiculo'));
    }


    public function eliminar(MarcasVehiculo $marcasVehiculo)
    {
        return view('marcas.eliminar-marca', compact('marcasVehiculo'));
    }

    public function trash(MarcasVehiculo $marcasVehiculo)
    {
        $marcasEliminadas = MarcasVehiculo::onlyTrashed()->get();
        return view('marcas.trash', compact('marcasEliminadas'));
    }

    public function eliminarMarca(Request $request)
    {
        // Recibir el id enviado desde Alpine
        $id = $request->input('id');
        $marca = MarcasVehiculo::onlyTrashed()->find($id);        
        if($marca)
        {
            //BORRO LA FOTO            
            if ($marca->icono && Storage::disk('public')->exists($marca->icono))
            {
                Storage::disk('public')->delete($marca->icono);
            }
            $marca->forceDelete();
            return response()->json(['success' => true,'message' => 'Marca eliminada correctamente'], 200); // <- importante
        }
        return response()->json(['success' => false,'message' => 'Marca no encontrada'], 404);
    }

    public function restaurarMarca(Request $request)
    {
        $id = $request->input('id');
        $marca = MarcasVehiculo::onlyTrashed()->find($id);        
        if($marca)
        {
            $marca->restore();
            return response()->json(['status' => 'success','message' => 'Marca restaurada correctamente','id' => $marca->id]);
        }
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
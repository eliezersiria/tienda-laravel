<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\MarcasVehiculo;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarMarcaVehiculo extends Component
{
    use WithFileUploads;

    public $MarcaId;
    public $nombre_marca;
    public $icono;
    public $nuevo_icono;


    public function mount($id)
    {
        // Busca la marca en la base de datos por su ID
        $marca = MarcasVehiculo::findOrFail($id);

        // Asigna los valores a las propiedades públicas del componente
        $this->MarcaId = $marca->id;
        $this->nombre_marca = $marca->nombre_marca;
        $this->icono = $marca->icono; // ruta de imagen actual

    }

    public function actualizar()
    {
        $marca = MarcasVehiculo::findOrFail($this->MarcaId);

        $this->validate([
            'nombre_marca' => 'required | string',
            'nuevo_icono' => 'nullable|image|max:2048', // 2MB
        ]);

        // Guardar nueva imagen si se cargó
        if ($this->nuevo_icono) 
        {
            // Eliminar imagen anterior si existe
            if ($marca->icono && Storage::exists($marca->icono))
            {
                Storage::delete($marca->icono);
            }
            $ruta = $this->nuevo_icono->store('public/fotos');
            $marca->icono = $ruta;
        }


        if ($marca->nombre_marca === $this->nombre_marca && $marca->icono === $this->icono)
        {
            session()->flash('mensaje', 'No se realizaron cambios.');
            return;
        }

        $marca->nombre_marca = $this->nombre_marca;
        $marca->save();

        session()->flash('mensaje', 'Producto actualizado exitosamente.');
    }

    public function render()
    {
        return view('livewire.editar-marca-vehiculo');
    }
}

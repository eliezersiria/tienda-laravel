<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\MarcasVehiculo;

class EliminarMarcaVehiculo extends Component
{
    public $MarcaId;

    public function eliminar($MarcaId)
    {
        $marca = MarcasVehiculo::find($MarcaId);
        if ($marca)
        {
            $marca->delete();

            // Opcional: emitir mensaje o evento
            session()->flash('message', 'Post enviado a papelera.');
        }
    }

    public function render()
    {
        
        return view('marcas.show-marcas', compact('marcas','tiempo','numeroFilas'));
    }
}

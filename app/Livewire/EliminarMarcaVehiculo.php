<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\MarcasVehiculo;

class EliminarMarcaVehiculo extends Component
{
    public $MarcaId;
    public $nombre_marca;
    public $mostrarFormulario = true;
    public function mount($MarcaId)
    {
        // Busca la marca en la base de datos por su ID
        $marca = MarcasVehiculo::findOrFail($MarcaId);

        // Asigna los valores a las propiedades públicas del componente
        $this->MarcaId = $marca->id;
        $this->nombre_marca = $marca->nombre_marca;

    }

    public function eliminar()
    {
        $marca = MarcasVehiculo::find($this->MarcaId);
        if ($marca)
        {
            sleep(1);
            //$marca->delete();

            // Opcional: emitir mensaje o evento
            session()->flash('message', 'La marca '.$this->nombre_marca.' fue enviada a papelera.');
            $this->mostrarFormulario = false; // Oculta el formulario
        }
    }

    public function render()
    {
        return view('livewire.eliminar-marca-vehiculo');
    }
}


<div>
    
    @if (session()->has('mensaje'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('mensaje') }}
        </div>
    @endif

    <form wire:submit.prevent="actualizar" class="mx-auto bg-blue-200 p-6 shadow-md space-y-4">

        <div class="w-1/2">
            <label for="nombre" class="block text-gray-700 font-semibold">Nombre:</label>
            <input type="text" id="nombre" wire:model="nombre_marca" class="w-full border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-bold">Imagen actual:</label>
            @if ($icono)
                <img src="{{ Storage::url($icono) }}" alt="Imagen" class="h-32 mb-2">
            @endif
        </div>

        <div>
            <label for="nueva_imagen" class="block font-bold">Nueva Imagen:</label>
            <input wire:model="nuevo_icono" type="file" class="w-full border p-2 rounded">
            @error('nuevo_icono') <span class="text-red-500">{{ $message }}</span> @enderror

            @if ($nuevo_icono)
                <div class="mt-2">
                    <span class="text-sm text-gray-600">Previsualización:</span>
                    <img src="{{ $nuevo_icono->temporaryUrl() }}" class="h-32">
                </div>
            @endif
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <span wire:loading.remove wire:target="actualizar">Actualizar</span>
            <span wire:loading wire:target="actualizar">Cargando...</span>
        </button>

    </form>

</div>
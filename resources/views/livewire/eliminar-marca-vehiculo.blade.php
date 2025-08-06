

<div>

    @if (session()->has('message'))
        <div class="bg-green-100 p-2 mb-3">{{ session('message') }}</div>
    @endif

    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-1/2 flex items-center space-x-2"
        role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
        </svg>

        <strong class="font-bold">Desea mover esta marca a la Papelera?</strong>
        <span class="block sm:inline"></span>
    </div>

    <button wire:click="eliminar({{ $MarcaId }})" class="text-red-500 hover:underline">
        Eliminar
    </button>
    

</div>
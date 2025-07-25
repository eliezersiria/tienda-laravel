<nav class="h-screen bg-gray-800 text-white flex flex-col p-4">        

    <a href="{{ route('inicio') }}" class="flex items-center gap-3 py-2 px-4 rounded hover:bg-gray-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V12H9v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /></svg>
        Inicio
    </a>
    <a href="{{ route('inicio.mapasitio') }}" class="flex items-center gap-3 py-2 px-4 rounded hover:bg-gray-700 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
        </svg>
        Mapa del sitio
    </a>
    <a href="{{ route('inicio.info') }}" class="flex items-center gap-3 py-2 px-4 rounded hover:bg-gray-700 transition">
        <span class="w-6 h-6 bg-gray-600 text-white rounded-lg flex items-center justify-center text-sm border border-white">I</span>
        Información
    </a>
    
</nav>
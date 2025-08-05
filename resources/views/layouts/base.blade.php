<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi Aplicación')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>


<body>
    
    <!--Contenido del menu horizontal principal, no cambia-->
    <x-navbar />

    <div class="grid grid-cols-[25%_75%] gap-4 p-4 min-h-[calc(100vh-56px)]">
        <!--Contenido del menu izquierdo-->
        <div>
            @yield('menu-izquierdo')
        </div>

        <!--Contenido principal que será sobrescrito por layouts secundarios-->
        <div>
            @yield('contenido-central')
            <x-tiempo-carga-page />
        </div>
    </div>
    @livewireScripts
</body>
</html>
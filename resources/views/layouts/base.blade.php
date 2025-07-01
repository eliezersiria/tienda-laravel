<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi Aplicación')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-100">


    <x-navbar />

    <!--Contenido principal que será sobrescrito por layouts secundarios-->
    @yield('body')



</body>
</html>
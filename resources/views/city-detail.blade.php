<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MiPueblo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Styles -->
        
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <nav class="bg-blue-500 p-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between">
                <a href="#" class="text-white font-bold text-xl">MiPueblo</a>
            </div>
        </div>
    </nav>

    <div class="w-full flex flex-col min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white mx-auto p-6 lg:p-8">
          
                <div class="flex justify-center">
                    <h1 class="text-3xl font-bold underline text-red-900 mb-10">
                        Bogotá!
                    </h1>
                </div>
                
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    
                    @if (isset($citydetail['main']))
                        <!-- Caja 1: Temperatura -->    
                        <div class="bg-blue-200 p-4 rounded-lg shadow-md mb-4 md:mb-0 md:w-1/3 md:mr-4">
                            <h2 class="text-lg font-semibold mb-2">Temperatura</h2>
                            <p class="text-xl">{{ $citydetail['main']['temp'] }}°C</p>
                        </div>

                        <!-- Caja 2: Humedad -->
                        <div class="bg-green-200 p-4 rounded-lg shadow-md mb-4 md:mb-0 md:w-1/3 md:mr-4">
                            <h2 class="text-lg font-semibold mb-2">Humedad</h2>
                            <p class="text-xl">{{ $citydetail['main']['humidity'] }}%</p>
                        </div>

                        <!-- Caja 3: Tasa de Cambio -->
                        <div class="bg-yellow-200 p-4 rounded-lg shadow-md mb-4 md:mb-0 md:w-1/3 md:mr-4">
                            <h2 class="text-lg font-semibold mb-2">Tasa de Cambio</h2>
                            <p class="text-xl">$1 USD = $4063,06 COP</p>
                        </div>
                    @else
                        <div class="bg-yellow-200 p-4 rounded-lg shadow-md mb-4 md:mb-0 md:w-1/3 md:mr-4">
                            <h2 class="text-lg font-semibold mb-2">No hay datos</h2>
                            <p class="text-xl">:C</p>
                        </div>
                    @endif
                </div>
        </div>
    </body>
</html>


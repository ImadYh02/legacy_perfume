<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Perfume Shop - Shop' }}</title>

        {{-- ===== Jost Font ===== --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @livewire('partials.navbar')
        
        <main class="w-[90%] mx-auto">
            {{-- Start Banner --}}
            <div class="banner contact_banner h-[60vh] w-full flex justify-center items-center rounded-xl">
                <h1 class="text-white font-bold lg:text-7xl text-5xl tracking-wider uppercase">contact</h1>
            </div>
            
        </main>

        {{-- @livewire('partials.footer') --}}
        
        @livewireScripts
    </body>
</html>

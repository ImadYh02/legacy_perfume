<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Legacy - Marrakech' }}</title>
        
        {{-- ===== Playfair Font ===== --}}
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> --}}

        {{-- ===== Jost Font ===== --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <style>
            body {
                background: url({{asset('pics/main_bg.jpeg')}});
                /* background: url({{asset('pics/maing_bg_2.jpeg')}}); */
            }
        </style>
    </head>
    <body>

        @livewire('partials.navbar')
        <main>
            @livewire('home.index')
            @livewire('home.promises')
            @livewire('home.category')
            @livewire('home.products')
            @livewire('home.quality')
            @livewire('home.awaiting')
            @livewire('home.testimonials')
            @livewire('home.instagram')
        </main>
        @livewire('partials.footer')
        
        @livewireScripts
    </body>
</html>

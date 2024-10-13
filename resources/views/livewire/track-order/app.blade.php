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
            {{-- ===== Start Banner ===== --}}
            <div class="banner torder_banner h-[60vh] w-full flex justify-center items-center rounded-xl">
                <h1 class="text-white font-bold lg:text-7xl text-5xl text-center tracking-wider uppercase">tracking order</h1>
            </div>

            {{-- ===== Start Form ===== --}}
            <div class="flex flex-col justify-center items-center my-6">
                <h2 class="text-lg text-center lg:text-left">
                    To track your order please enter your Order ID and e-mail in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.
                </h2>

                <form class="flex flex-col gap-4 w-full mt-6">
                    <div class="flex lg:flex-row flex-col lg:gap-20 gap-4">
                        {{-- ===== Order ID ===== --}}
                        <div class="lg:w-1/2 w-full">
                            <label for="input-label" class="block text-sm font-medium mb-2">Order ID</label>
                            <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Found in your order confirmation email.">
                        </div>

                        {{-- ===== Email Address ===== --}}
                        <div class="lg:w-1/2 w-full">
                            <label for="input-label" class="block text-sm font-medium mb-2">Billing email</label>
                            <input type="email" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Email you used during checkout">
                        </div>
                    </div>

                    {{-- ===== Track Button ===== --}}
                    <a href="#" class="bg-[#FF69B4] text-white py-2 px-6 mx-auto lg:mx-0 w-fit rounded-full hover:bg-[#FF1493] transition duration-300"> Track </a>
                </form>
            </div>
        </main>

        @livewire('partials.footer')
        
        @livewireScripts
    </body>
</html>

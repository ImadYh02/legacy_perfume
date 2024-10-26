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
    
    <main class="lg:max-w-[80%] w-screen mx-auto">
        {{-- ===== Product Detail ===== --}}
        <div class="lg:h-[90vh] flex flex-col lg:flex-row justify-between items-center">
            <div class="lg:w-1/2 w-full h-full justify-center content-center items-center md:px-[100px] md:py-[60px]">
                <img class="w-[450px] lg:h-[460px] h-[300px] object-cover lg:rounded-xl" src="{{ asset('pics/perfume_1.jpg') }}" alt="">
            </div>
    
            <div class="lg:w-1/2 max-w-full">
                <div class="p-6 md:basis-1/2 md:py-[40px]">
                    <p class="text-[14px] tracking-widest uppercase font-[700] mb-6 text-[#FF69B4]">
                        Sneaker company
                    </p>
                    <h1 class="text-3xl md:text-4xl capitalize font-[700]">
                        Fall limited edition <br /> sneakers
                    </h1>
                    <p class="hidden md:block my-10 leading-7 text-[#888072]">
                        These low-profile sneakers are your perfect casual wear <br />
                        companion. Featuring a durable rubber outer sole, they'll <br />
                        withstand everything the weather can offer.
                    </p>
                    <p class="md:hidden my-6 leading-7">
                        These low-profile sneakers are your perfect <br /> casual wear
                        companion. Featuring a durable <br /> rubber outer sole, they'll
                        withstand every - thing the br weather can offer.
                    </p>
          
                    <div class="flex items-center">
                        <span class="text-3xl font-[700] mr-4">49.99 MAD</span>
                        <span class="font-[700] py-1 px-2 rounded-lg bg-[#FF69B4] text-white">
                            50%
                        </span>
                    </div>
                    <p class="line-through text-[#888072] font-[700] mt-2">
                        74.99 MAD
                    </p>
                </div>
    
                <div class="flex flex-col md:flex-row px-6 gap-5 items-center">
                    <div class="lg:py-2 py-3 px-3 flex justify-between content-between bg-white border border-gray-200 rounded-lg lg:w-fit w-full" data-hs-input-number="">
                        <div class="flex w-full items-center justify-between content-between gap-x-1.5">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-[#FF69B4] hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-[#FF69B4] hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
    
                    <button class="border-none rounded-lg text-white bg-[#FF69B4] font-[700] px-[70px] lg:py-2 py-3 text-[14px] transition-all btn-shadow hover:bg-[#FF1493] flex items-center justify-center lg:w-fit w-full" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        &nbsp;Add to cart
                    </button>
                </div>
            </div>
        </div>

        {{-- ===== Related Product ===== --}}
        @livewire('shop.related_product')
    </main>    

    @livewire('partials.footer')
    @livewireScripts
</body>
</html>

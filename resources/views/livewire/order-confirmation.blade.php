<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Perfume Shop - Shop' }}</title>
    {{-- ===== Jost Font ===== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @livewire('partials.navbar')

    <section class="flex items-center my-4">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border rounded-md md:py-10 md:px-10">
            <div>
                <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700">
                    Thank you. Your order has been received. </h1>
                <div class="flex border-b border-gray-200 items-stretch justify-start w-full h-full px-4 mb-8 md:flex-row xl:flex-col md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex items-start justify-start flex-shrink-0">
                        <div class="flex items-center justify-center w-full pb-6 space-x-4 md:justify-start">
                            <div class="flex flex-col items-start justify-start space-y-2">
                                <p class="text-lg font-semibold leading-4 text-left text-gray-800">
                                    Cielo Schimmel
                                </p>
                                <p class="text-sm leading-4 text-gray-600">
                                    71582 Schmitt Springs
                                </p>
                                <p class="text-sm leading-4 text-gray-600">
                                    Castro Valley, Delaware, 53476-0454
                                </p>
                                <p class="text-sm leading-4 cursor-pointer">
                                    Phone: 587-019-6103
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gray-200">
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600">
                            Order Number: 
                        </p>
                        <p class="text-base font-semibold leading-4 text-gray-800">
                            29
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600">
                            Date: 
                        </p>
                        <p class="text-base font-semibold leading-4 text-gray-800">
                            17-02-2024
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm font-medium leading-5 text-gray-800">
                            Total: 
                        </p>
                        <p class="text-base font-semibold leading-4 text-[#FF69B4]">
                            249 DH
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600">
                            Payment Method: 
                        </p>
                        <p class="text-base font-semibold leading-4 text-gray-800">
                            Cash on Delivery 
                        </p>
                    </div>
                </div>

                <div class="px-4 mb-10">
                    <div class="flex flex-col items-stretch justify-center w-full space-y-4 md:flex-row md:space-y-0 md:space-x-8">
                        <div class="flex flex-col w-full space-y-6 ">
                            <h2 class="mb-2 text-xl font-semibold text-gray-700">Order details</h2>
                            <div class="flex flex-col items-center justify-center w-full pb-4 space-y-4 border-b border-gray-200">
                                <div class="flex justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800">Subtotal</p>
                                    <p class="text-base leading-4 text-gray-600">149.00 MAD</p>
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800">Discount</p>
                                    <p class="text-base leading-4 text-gray-600">00 MAD</p>
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800">Shipping</p>
                                    <p class="text-base leading-4 text-gray-600">00 MAD</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-full">
                                <p class="text-base font-semibold leading-4 text-gray-800">Total</p>
                                <p class="text-base font-semibold leading-4 text-gray-600">149.00 MAD</p>
                            </div>
                        </div>
                        <div class="flex flex-col w-full px-2 space-y-4 md:px-8 ">
                            <h2 class="mb-2 text-xl font-semibold text-gray-700">Shipping</h2>
                            <div class="flex items-start justify-between w-full">
                                <div class="flex items-center justify-center space-x-2">
                                    <div class="w-8 h-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 text-[#FF69B4] bi bi-truck" viewBox="0 0 16 16">
                                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col items-center justify-start">
                                        <p class="text-lg font-semibold leading-6 text-gray-800">
                                            Delivery<br><span class="text-sm font-normal">Delivery with 24 Hours</span>
                                        </p>
                                    </div>
                                </div>
                                <p class="text-lg font-semibold leading-6 text-gray-800">00 MAD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-start gap-4 px-4 mt-6 ">
                    <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-2 px-6 mx-auto lg:mx-0 w-fit rounded-full hover:bg-[#FF1493] transition duration-300">
                        Go back shopping
                    </a>
                </div>
            </div>
        </div>
    </section>

    @livewire('partials.footer')
</body>
  
</html>
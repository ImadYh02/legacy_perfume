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
    
    <section class="bg-[#eee] py-8 md:py-16">
        <div class="mx-auto max-w-2xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl mb-2">Thanks for your order!</h2>
            <p class="text-gray-500 mb-6 md:mb-8">Your order 
                <a href="#" class="font-medium text-gray-900 hover:underline">#7564804</a> 
                will be processed within 24 hours during working days. We will notify you by email once your order has been shipped
            </p>
            <div class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-white p-6 mb-6 md:mb-8">
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Date</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">14 May 2024</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Payment Method</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">JPMorgan monthly installments</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Name</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">Flowbite Studios LLC</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Address</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">34 Scott Street, San Francisco, California, USA</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Phone</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">+(123) 456 7890</dd>
                </dl>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/shop" wire:navigate class="flex w-fit items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                    Return to shopping
                </a>
            </div>
        </div>
    </section>
    
    @livewire('partials.footer')
</body>
  
</html>
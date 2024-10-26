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
    <nav class="w-full flex items-center justify-between h-[65px] bg-black" aria-label="Global">
        {{-- ===== Logo Brand ===== --}}
        <a class="text-xl font-semibold text-white mx-auto" href="/" wire:navigate>Brand</a>
    </nav>
    
    <section class="py-8 md:py-16 bg-[#eee]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- ===== Stepper ===== -->
            <ul class="relative flex flex-row gap-x-2">
                <!-- Item -->
                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
                    <div class="min-w-7 min-h-7 inline-flex justify-center items-center text-xs align-middle">
                        <span class="size-7 flex justify-center items-center shrink-0 bg-gray-800 font-medium text-white rounded-full">
                            1
                        </span>
                        <span class="ms-2 block text-sm font-medium text-gray-800">
                            Cart
                        </span>
                    </div>
                    <div class="w-full h-px flex-1 bg-black group-last:hidden"></div>
                </li>
                <!-- End Item -->

                <!-- Item -->
                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
                    <div class="min-w-7 min-h-7 inline-flex justify-center items-center text-xs align-middle">
                        <span class="size-7 flex justify-center items-center shrink-0 bg-gray-800 font-medium text-white rounded-full">
                            2
                        </span>
                        <span class="ms-2 block text-sm font-medium text-gray-800">
                            Checkout
                        </span>
                    </div>
                    <div class="w-full h-px flex-1 bg-black group-last:hidden"></div>
                </li>
                <!-- End Item -->

                <!-- Item -->
                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
                    <div class="min-w-7 min-h-7 inline-flex justify-center items-center text-xs align-middle">
                        <span class="size-7 flex justify-center items-center shrink-0 bg-gray-800 font-medium text-white rounded-full">
                            3
                        </span>
                        <span class="ms-2 block text-sm font-medium text-gray-800">
                            Order Summary
                        </span>
                    </div>
                    <div class="w-full h-px flex-1 bg-black group-last:hidden"></div>
                </li>
                <!-- End Item -->
            </ul>
            <!-- ===== End Stepper ===== -->
        
            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                {{-- ===== Delivery Detail ===== --}}
                <div class="min-w-0 flex-1 space-y-8">
                  {{-- ===== Delivery Form ===== --}}
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Delivery Details
                        </h2>
                
                        <form class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            {{-- ===== First Name ===== --}}
                            <div>
                                <label for="your_name" class="mb-2 block text-sm font-medium text-gray-900">
                                    First Name
                                </label>
                                <input type="text" id="your_name" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Bonnie" required />
                            </div>

                            {{-- ===== Last Name ===== --}}
                            <div>
                                <label for="your_email" class="mb-2 block text-sm font-medium text-gray-900">
                                    Last Name
                                </label>
                                <input type="text" id="your_email" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Green" required />
                            </div>
                            
                            {{-- ===== Country ===== --}}
                            <div>
                                <div>
                                    <label for="your_name" class="mb-2 block text-sm font-medium text-gray-900">
                                        Country
                                    </label>
                                    <input type="text" id="your_name" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Morocco" required />
                                </div>
                            </div>
                  
                            {{-- ===== City ===== --}}
                            <div>
                                <div>
                                    <label for="your_name" class="mb-2 block text-sm font-medium text-gray-900">
                                        City
                                    </label>
                                    <input type="text" id="your_name" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Marrakech" required />
                                </div>
                            </div>
                            
                            {{-- ===== Phone Number ===== --}}
                            <div>
                                <div>
                                    <label for="your_name" class="mb-2 block text-sm font-medium text-gray-900">
                                        Phone Number
                                    </label>
                                    <input type="text" id="your_name" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="+212 612345678" required />
                                </div>
                            </div>
                          
                            {{-- ===== Elail ===== --}}
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-900">
                                    Email
                                </label>
                                <input type="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="name@flowbite.com" required />
                            </div>
                          
                            {{-- ===== Address ===== --}}
                            <div class="col-span-2">
                                <label for="company_name" class="mb-2 block text-sm font-medium text-gray-900">
                                    Address
                                </label>
                                <input type="text" id="company_name" class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Enter your Address" required/>
                            </div>
                        </form>
                    </div>
              
                    {{-- ===== Payment ===== --}}
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Payment
                        </h3>
                    
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <div class="rounded-lg border border-gray-200 bg-white p-4 ps-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input checked id="pay-on-delivery" aria-describedby="pay-on-delivery-text" type="radio" name="payment-method" value="" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" />
                                    </div>
                          
                                    <div class="ms-4 text-sm">
                                        <label for="pay-on-delivery" class="font-medium leading-none text-gray-900">
                                            Payment on delivery
                                        </label>
                                        <p id="pay-on-delivery-text" class="mt-1 text-xs font-normal text-gray-500">
                                            +$15 payment processing fee
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    {{-- ===== Delivery Methds ===== --}}
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Delivery Methods
                        </h3>
                  
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <div class="rounded-lg border border-gray-200 bg-white p-4 ps-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="dhl" aria-describedby="dhl-text" type="radio" name="delivery-method" value="" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" checked />
                                    </div>
                        
                                    <div class="ms-4 text-sm">
                                        <label for="dhl" class="font-medium leading-none text-gray-900">
                                            $15 - DHL Fast Delivery
                                        </label>
                                        <p id="dhl-text" class="mt-1 text-xs font-normal text-gray-500">
                                            Get it by Tommorow
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- ===== Order Total ===== --}}
                <div class="mt-6 w-full bg-white p-4 rounded-xl space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
                    <div class="flow-root">
                        <div class="-my-3 divide-y divide-gray-200">
                            {{-- ===== Subtotal ===== --}}
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500">
                                    Subtotal
                                </dt>
                                <dd class="text-base font-medium text-gray-900">
                                    $8,094.00
                                </dd>
                            </dl>
                  
                            {{-- ===== Savings ===== --}}
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500">
                                    Savings
                                </dt>
                                <dd class="text-base font-medium text-green-500">
                                    0
                                </dd>
                            </dl>
                          
                            {{-- ===== Store Pickup ===== --}}
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500">
                                    Store Pickup
                                </dt>
                                <dd class="text-base font-medium text-gray-900">
                                    $99
                                </dd>
                            </dl>
                          
                            {{-- ===== TAX ===== --}}
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500">
                                    Tax
                                </dt>
                                <dd class="text-base font-medium text-gray-900">
                                    $199
                                </dd>
                            </dl>
                          
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-bold text-gray-900">
                                    Total
                                </dt>
                                <dd class="text-base font-bold text-gray-900">
                                    $8,392.00
                                </dd>
                            </dl>
                        </div>
                    </div>
              
                    {{-- ===== Proceed to Payment Button ===== --}}
                    <div class="space-y-3">
                        <a href="/checkout/order-received" type="submit" class="flex w-full items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                            Proceed to Payment
                        </a>
                
                        <p class="text-sm font-normal text-gray-500">
                            One or more items in your cart require an account.
                            <a href="#" title="" class="font-medium text-primary-700 underline hover:no-underline">
                                Sign in or create an account now.
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('partials.footer')
</body>
  
</html>
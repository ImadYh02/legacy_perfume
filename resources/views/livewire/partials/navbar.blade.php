<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-transparent text-sm py-4 dark:bg-neutral-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between" aria-label="Global">
        {{-- ===== Logo Brand ===== --}}
        <a class="sm:order-1 flex-none text-xl font-semibold dark:text-white" href="/" wire:navigate>Brand</a>

        {{-- ===== Menu Buttons Items ===== --}}
        <div class="sm:order-3 flex items-center gap-x-2">
            {{-- ===== Shop Cart ===== --}}
            <a class="hs-tooltip-toggle hs-tooltip [--placement:left] hover:text-[#FF1493] transition duration-300 relative" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

                <div class="w-[18px] h-[18px] flex justify-center items-center bg-red-500 rounded-full text-white absolute -top-2 -right-2">5</div>
                  
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                  Go to Shop Card
                </span>        
            </a>

            {{-- ===== Profile Login ===== --}}
            <a class="sm:ml-4 hs-tooltip-toggle hs-tooltip [--placement:bottom] hover:text-[#FF1493] transition duration-300" wire:navigate href="{{route('filament.admin.auth.login')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                  Access to your Profile
                </span>
            </a>

            
            {{-- ===== Mobile Nav ===== --}}
            <button type="button" class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment" aria-label="Toggle navigation">
                <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        {{-- ===== Menu Link Items ===== --}}
        <div id="navbar-alignment" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                <a class="font-medium hover:text-[#FF1493] {{ request()->is('/')?'text-[#FF1493]':'text-black' }} transition duration-300" wire:navigate href="/">Home</a>
                <a class="font-medium hover:text-[#FF1493] {{ request()->is('shop')?'text-[#FF1493]':'text-black' }} transition duration-300" wire:navigate href="/shop">Shop</a>
                <a class="font-medium hover:text-[#FF1493] {{ request()->is('track-order')?'text-[#FF1493]':'text-black' }} transition duration-300" wire:navigate href="/track-order">Track Order</a>
                <a class="font-medium hover:text-[#FF1493] {{ request()->is('contact')?'text-[#FF1493]':'text-black' }} transition duration-300" wire:navigate href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    {{-- ===== Toggle Shopping Card ===== --}}
    <div id="hs-offcanvas-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full lg:max-w-[450px] max-w-xs z-[80] bg-white border-s" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        {{-- ===== Header ===== --}}
        <div class="flex justify-between items-center mx-8 py-6 border-b">
            <h3 id="hs-offcanvas-right-label" class="text-[#2b2b2b] text-sm">
                SHOPPING CART
                <span class="bg-[#ff7be5] inline-flex items-center py-0 px-1.5 rounded-full mx-2">3</span>
            </h3>

            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none hover:rotate-90 duration-200 ease-in" aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>

        {{-- ===== Product Items ===== --}}
        <div class="px-6 lg:h-[60%] h-[70%] overflow-y-auto overflow-x-hidden border-b">
            @for ($i = 0; $i < 3; $i++)
            <div class="flex gap-x-4 py-4 border-b border-gray-200 w-full font-light text-gray-500">
                <div class="w-full min-h-[100px] flex items-center gap-x-4">
                    {{-- ===== Product Image ===== --}}
                    <a href="#">
                        <img class="max-w-[80px]" src="{{ asset('pics/perfume_1.jpg') }}" alt="">
                    </a>
                    <div class="w-full flex flex-col">
                        {{-- ===== Title & Remove Icon --}}
                        <div class="flex justify-between mb-2">
                            {{-- ===== Title ===== --}}
                            <a href="#" class="text-sm uppercase font-medium max-w-[240px] hover:underline">
                                Black Fashion Black Fashion
                            </a>
                            {{-- ===== Remove Item ===== --}}
                            <div class="text-xl cursor-pointer">
                                <svg class="shrink-0 size-4 text-gray-500 hover:text-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </div>
                        </div>
        
                        <div class="flex gap-x-2 h-[36px] text-sm">
                            {{-- ===== Number Input ===== --}}
                            <div class="py-0 px-0 lg:px-1 bg-white lg:border border-gray-200 rounded-full flex flex-1 items-center h-full max-w-[100px]" data-hs-input-number="">
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                        </svg>
                                    </button>
                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            {{-- ===== Item Price ===== --}}
                            <div class="flex-1 flex justify-around items-center">49.99 MAD</div>
                            {{-- ===== Final Price ===== --}}
                            <div class="flex-1 flex justify-end items-center font-medium">99.99 MAD</div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        {{-- ===== Sidebar ===== --}}
        <div class="flex flex-col gap-y-3 py-3 my-4 mx-8">
            <div class="w-full">
                {{-- ===== Total ===== --}}
                <strong class="flex content-between justify-between">
                    SUBTOTAL:
                    <span class="mr-0 text-[#ff7be5]">120.99 MAD</span>
                </strong>
            </div>

            {{-- ===== Buttons ===== --}}
            <div class="flex flex-col">
                <a class="text-[#2b2b2b] font-semibold text-sm w-full text-center hover:text-[#ff7be5] py-3 transition duration-300" href="/cart" wire:navigate>VIEW CART</a>
                <a class="font-semibold text-sm w-full text-center bg-[#ff7be5] rounded-3xl py-3 text-white hover:bg-[#7C818B] transition duration-300" href="/shop/checkout" wire:navigate>CHECKOUT</a>
            </div>
        </div>
    </div>
</header>
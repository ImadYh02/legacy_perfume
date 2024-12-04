<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-transparent text-sm py-4">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between" aria-label="Global">
        {{-- ===== Logo Brand ===== --}}
        <a class="sm:order-1 flex-none text-xl font-semibold" href="/" wire:navigate>Brand</a>

        {{-- ===== Menu Buttons Items ===== --}}
        <div class="sm:order-3 flex items-center gap-x-2">
            {{-- ===== Shop Cart ===== --}}
            <a class="hs-tooltip-toggle hs-tooltip [--placement:left] hover:text-[#FF1493] transition duration-300 relative" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

                <div class="w-[18px] h-[18px] flex justify-center items-center bg-red-500 rounded-full text-white absolute -top-2 -right-2">5</div>
                  
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                  Go to Shop Card
                </span>        
            </a>

            {{-- ===== Profile Login ===== --}}
            <a class="sm:ml-4 hs-tooltip-toggle hs-tooltip [--placement:bottom] hover:text-[#FF1493] transition duration-300" wire:navigate href="{{route('filament.admin.auth.login')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                  Access to your Profile
                </span>
            </a>

            
            {{-- ===== Mobile Nav ===== --}}
            <button type="button" class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment" aria-label="Toggle navigation">
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
    <div id="hs-offcanvas-right" class="relative hs-overlay z-[90] hs-overlay hidden" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto w-screen max-w-md">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                {{-- ===== Header ===== --}}
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                    <div class="ml-3 flex h-7 items-center" aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                                        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none hover:rotate-90 duration-200 ease-in">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
      
                                {{-- ===== Product Cart Items ===== --}}
                                <div class="mt-8">
                                    <div class="flow-root">
                                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        @for ($i = 0; $i < 13; $i++)
                                            <li class="flex py-6">
                                                <a href="shop/detail" wire:navigate class="h-24 w-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                                                </a>
                        
                                                <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="shop/detail" wire:navigate>Throwback Hip Bag</a>
                                                    </h3>
                                                    <p class="ml-4">$90.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>
                        
                                                    <div class="flex">
                                                    <button type="button" class="font-medium text-[#FF69B4] hover:text-[#FF1493]">Remove</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </li>
                                        @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- ===== Empty Cart Content ===== --}}
                            {{-- <div class="flex mx-6 flex-col gap-5 justify-center items-center content-center h-full">
                                <img class="h-20" src="{{asset('pics/shopping-cart.png')}}" alt="">
                                <h1>
                                    Your Cart is Empty!!
                                </h1>
                                <a href="/shop" wire:navigate class="flex w-full items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                                    Continue Shopping
                                </a>
                            </div> --}}
      
                            {{-- ===== Footer ===== --}}
                            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <p>Subtotal</p>
                                    <p>$262.00</p>
                                </div>
                                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                <div class="mt-6">
                                    <a href="/cart" wire:navigate class="flex items-center justify-center rounded-md border border-transparent px-6 py-3 text-base font-medium shadow-sm text-white bg-[#FF69B4] hover:bg-[#FF1493]">View Cart</a>
                                </div>
                                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                    <p>
                                        or
                                        <button type="button" class="font-medium text-[#FF69B4] hover:text-[#FF1493]">
                                            Continue Shopping
                                            <span aria-hidden="true"> &rarr;</span>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</header>
<section class="py-8 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shopping Cart</h2>

        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    {{-- ===== Product Item ===== --}}
                    @forelse ($cart_items as $item)
                        <div wire:key="{{ $item['product_id'] }}" class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <a href="/shop/{{ $item['slug'] }}" wire:navigate class="shrink-0 md:order-1">
                                    <img class="h-20 w-20"
                                        src="{{ url('storage', $item['image']) }}"
                                        alt="{{ $item['name'] }}" />
                                </a>
                                    
                                <div class="text-end md:order-3 md:w-32">
                                    <p class="text-base font-bold text-gray-900"> {{ Number::currency($item['unit_amount'], 'MAD') }} </p>
                                </div>

                                <label for="counter-input" class="sr-only">Choose quantity:</label>
                                <div class="flex items-center justify-between md:order-4 md:justify-end">
                                    <div class="flex justify-between content-between bg-white border border-gray-200 rounded-lg w-fit" data-hs-input-number="">
                                        <div class="flex w-full items-center justify-between content-between gap-x-1.5">
                                            <button wire:click="increaseQty({{ $item['product_id'] }})" type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-[#FF69B4] hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                </svg>
                                            </button>

                                            <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" readonly value="{{ $item['quantity'] }}" data-hs-input-number-input="">
                                            
                                            <button wire:click="decreaseQty({{ $item['product_id'] }})" type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium text-[#FF69B4] hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="text-end md:order-5 md:w-32">
                                        <p class="text-base font-bold text-gray-900"> {{ Number::currency($item['total_amount'], 'MAD') }} </p>
                                    </div>
                                </div>

                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <a href="/shop/{{ $item['slug'] }}" wire:navigate class="text-base font-medium text-gray-900 hover:underline">
                                        {{ $item['name'] }}
                                    </a>
                                    <p class="text-base font-normal text-gray-500"> {{ $item['description'] }} </p>

                                    <div class="flex items-center gap-4">

                                        <button wire:click='removeItem({{ $item['product_id'] }})' type="button"
                                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                            <span wire:loading.remove wire:target='removeItem({{ $item['product_id'] }})'>
                                                <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 17.94 6M18 18 6.06 6" />
                                                </svg>
                                            </span>

                                            <span wire:loading wire:target='removeItem({{ $item['product_id'] }})' class="mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="22" height="22" style="shape-rendering: auto; display: block; background: transparent;" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g>
                                                        <circle stroke-dasharray="164.93361431346415 56.97787143782138" r="35" stroke-width="10" stroke="currentColor" fill="none" cy="50" cx="50">
                                                            <animateTransform keyTimes="0;1" values="0 50 50;360 50 50" dur="0.40485829959514175s" repeatCount="indefinite" type="rotate" attributeName="transform"></animateTransform>
                                                        </circle>
                                                        <g></g>
                                                    </g>
                                                </svg>
                                            </span>

                                            <span wire:loading.remove wire:target='removeItem({{ $item['product_id'] }})'>Remove</span>

                                            <span wire:loading wire:target='removeItem({{ $item['product_id'] }})'>Removing...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- ===== Empty Cart Content ===== --}}
                        <div class="flex flex-col gap-5 justify-center items-center content-center my-auto">
                            <img class="h-32" src="{{ asset('pics/shopping.png') }}" alt="">
                            <h1>
                                Your Cart is Currently Empty!!
                            </h1>
                            <a href="/shop" wire:navigate class="flex w-fit items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                                Continue Shopping
                            </a>
                        </div>
                    @endforelse
                </div>

                @livewire('related_product')
            </div>

        <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
            {{-- ===== Order Summary ===== --}}
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                <p class="text-xl font-semibold text-gray-900">Order summary</p>

                <div class="space-y-4">
                    <div class="space-y-2">
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Original price</dt>
                            <dd class="text-base font-medium text-gray-900"> {{ Number::currency($original_total, 'MAD') }} </dd>
                        </dl>

                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Savings</dt>
                            <dd class="text-base font-medium text-green-600"> - {{ Number::currency($savings, 'MAD') }} </dd>
                        </dl>

                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Taxes</dt>
                            <dd class="text-base font-medium text-gray-900"> {{ Number::currency(0, 'MAD') }} </dd>
                        </dl>

                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Shipping</dt>
                            <dd class="text-base font-medium text-gray-900"> {{ Number::currency(0, 'MAD') }} </dd>
                        </dl>
                    </div>

                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                        <dt class="text-base font-bold text-gray-900">Total</dt>
                        <dd class="text-base font-bold text-gray-900"> {{ Number::currency($grand_total, 'MAD') }} </dd>
                    </dl>
                </div>

                @if ($cart_items)
                <a href="/checkout" wire:navigate class="flex w-full items-center justify-center bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">
                    Proceed to Checkout
                </a>
                @endif

                {{-- <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300 w-fit">Discover Now</a> --}}


                <div class="flex items-center justify-center gap-2">
                    <span class="text-sm font-normal text-gray-500"> or </span>
                    <a href="/shop" wire:navigate title=""
                        class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline">
                        Continue Shopping
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- ===== Gift | Coupoun Code ===== --}}
            {{-- <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
                <form class="space-y-4">
                    <div>
                        <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900"> Do you have a voucher
                            or gift card? </label>
                        <input type="text" id="voucher"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500"
                            placeholder="" required />
                    </div>
                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Apply
                        Code</button>
                </form>
            </div> --}}
        </div>
    </div>
</section>
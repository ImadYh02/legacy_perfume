<section class="lg:w-[95vw] w-screen mx-auto lg:mt-0 mt-0 min:h-screen lg:mx-8 flex-col justify-center items-center text-black">

    {{-- ===== Heading ===== --}}
    <div class="flex-col justify-center items-center">
        <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">Inhale the Elegance</h2>
        <div class="h-1 w-40 bg-[#ff7be5] mx-auto"></div>
    </div>
          
    {{-- ===== Cards Product ===== --}}
    <div class="mt-10 mx-4 lg:mx-0 flex flex-row lg:gap-0 gap-4 flex-wrap">
        @for ($j = 0; $j < 8; $j++)
            <div class="card_product w-[47%] lg:w-1/4">
                <div>
                    <a href="#">
                        <img src="{{ asset('pics/perfume_2.jpeg') }}" class="lg:h-[400px] h-[250px] w-[300px]" alt="">
                    </a>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 my-3">
                    <a href="#" class="product_name text-[#8f8f8f] hover:text-[#ff7be5]">Gucci CC Marmont</a>
                    <!-- ===== Rating ===== -->
                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        @endfor
                    </div>

                    <h3 class="product_price font-bold">49.99 MAD</h3>

                    <a class="product_shop flex justify-center items-center gap-3 lg:hidden hover:text-[#ff7be5] cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        Add to Cart
                    </a>
                </div>
            </div>
        @endfor
    </div>

    {{-- ===== Button Shop ===== --}}
    <div class="flex justify-center mt-4">
        <a href="#" class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">Explore Collection</a> 
    </div>

    {{-- ===== Toggle Shopping Card ===== --}}
    <div id="hs-offcanvas-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs lg:max-w-[400px] w-full z-[80] bg-white border-s overflow-y-auto overflow-x-hidden" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
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
        <div class="py-3 mx-8 flex flex-col gap-4">
            {{-- ===== Product Item ===== --}}
            @for ($x = 0; $x < 3; $x++)
                <div class="flex flex-row items-center justify-center gap-5 pb-3 border-b border-[#f7f7f7] relative">
                    <img class="lg:w-[22%] lg:h-[75px] w-[60px] h-[60px]" src="{{asset('pics/about-bg.jpeg')}}" alt="">

                    <div class="flex flex-col w-2/4 gap-1">
                        <a href="#" style="line-height: 1.4em" class="font-semibold text-sm text-[#2b2b2b] hover:text-[#ff7be5] py-3 transition duration-300">Black Fashion Jacket</a>
                        <!-- Input Number -->
                        <div class="py-0 px-1 inline-block lg:w-[60%] bg-white border border-gray-200 rounded-full" data-hs-input-number="">
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
                    </div>

                    <div class="flex flex-col">
                        <button type="button" class="absolute -top-1 -right-2 size-4 inline-flex justify-center items-center gap-x-2 text-red-500 disabled:opacity-50 disabled:pointer-events-none duration-200 ease-in" aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>

                        <p class="font-semibold text-[#2b2b2b] mb-0">49.99MAD</p>
                    </div>
                </div>
            @endfor
        </div>

        {{-- ===== Footer ===== --}}
        <div class="absolute bottom-2 mx-8 lg:py-6 py-3 border-t w-[80%] lg:w-[85%] flex flex-col lg:gap-2 gap-1">
            {{-- ===== SUBTOTAL ===== --}}
            <strong class="flex content-between justify-between">
                SUBTOTAL:
                <span class="mr-0 text-[#ff7be5]">120.99 MAD</span>
            </strong>

            {{-- ===== Buttons ===== --}}
            <div class="flex flex-col">
                <a class="text-[#2b2b2b] font-semibold text-sm w-full text-center hover:text-[#ff7be5] py-3 transition duration-300" href="#">VIEW CART</a>
                <a class="font-semibold text-sm w-full text-center bg-[#ff7be5] rounded-3xl py-3 text-white hover:bg-[#7C818B] transition duration-300" href="#">CHECKOUT</a>
            </div>
        </div>
    </div>
</section>
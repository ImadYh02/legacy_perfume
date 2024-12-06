<div class="mt-8">
    <h3 class="text-2xl font-semibold text-gray-900 mx-4 lg:mx-0">People also bought</h3>
    <div class="my-3">
        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1" class="mt-5 mx-4 lg:mx-0 flex flex-row flex-wrap lg:flex-nowrap gap-4">
            @for ($j = 0; $j < 3; $j++)
                <div class="card_product w-[47%] lg:w-1/3">
                    <div>
                        <a href="/shop/detail" wire:navigate>
                            <img src="{{ asset('pics/perfume_2.jpeg') }}" class="lg:h-[400px] h-[250px] w-[300px]" alt="">
                        </a>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-2 my-3">
                        <a href="/shop/detail" wire:navigate class="product_name text-[#8f8f8f] hover:text-[#ff7be5]">Gucci CC Marmont</a>
                        <!-- ===== Rating ===== -->
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="shrink-0 size-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
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
        <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
            </p>
        </div>
        
        <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
            </p>
        </div>
    </div>
</div>
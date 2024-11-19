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
    
    <main class="lg:w-[93%] w-[90%] mx-auto">
        {{-- ===== Start Banner ===== --}}
        <div class="banner shop_banner lg:h-[60vh] h-[40vh] w-full flex justify-center items-center rounded-xl">
            <h1 class="text-white font-bold lg:text-7xl text-5xl tracking-wider uppercase">products</h1>
        </div>
        {{-- ===== Start Tabs ===== --}}
        <div class="border-b border-gray-200">
            <nav class="flex gap-x-4" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-[#FF1493] hs-tab-active:text-[#FF1493] py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-black hover:text-[#FF1493] focus:outline-none focus:text-[#FF1493] disabled:opacity-50 disabled:pointer-events-none active" id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
                    All
                </button>
                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-[#FF1493] hs-tab-active:text-[#FF1493] py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-black hover:text-[#FF1493] focus:outline-none focus:text-[#FF1493] disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
                    Man
                </button>
                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-[#FF1493] hs-tab-active:text-[#FF1493] py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-black hover:text-[#FF1493] focus:outline-none focus:text-[#FF1493] disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-underline-item-3" aria-selected="false" data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3" role="tab">
                    Woman
                </button>
            </nav>
        </div>
        
        <div class="my-3">
            <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1" class="mt-10 mx-4 lg:mx-0 flex flex-row gap-4 flex-wrap">
                @foreach ($products as $product)
                    <div class="card_product w-[47%] lg:w-[24%]">
                        <div>
                            <a href="/shop/{{ $product->slug }}" wire:navigate>
                                <img src="{{ url('storage', $product->images[1]) }}" class="lg:h-[400px] h-[250px] w-[300px]" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 my-3 text">
                            <a href="/shop/{{ $product->slug }}" alt="{{ $product->name }}" wire:navigate class="product_name text-[black] hover:text-[#ff7be5]">{{ $product->name }}</a>
                            <!-- ===== Rating ===== -->
                            <div class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="shrink-0 size-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                @endfor
                            </div>
        
                            <h3 class="product_price font-bold">{{ Number::currency($product->price, 'MAD') }}</h3>
        
                            <a class="product_shop flex justify-center items-center gap-3 lg:hidden hover:text-[#ff7be5] cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                Add to Cart
                            </a>
                        </div>
                    </div>
                @endforeach
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
    </main>
    @livewireScripts
</body>
</html>

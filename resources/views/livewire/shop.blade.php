<main class="lg:w-[93%] w-[90%] mx-auto">
    {{-- ===== Start Banner ===== --}}
    <div class="relative lg:h-[60vh] h-[40vh] w-full flex justify-center items-center rounded-xl overflow-hidden">
        <!-- Video Background -->
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
            <source src="{{ asset('vids/shop_banner_video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    
        <!-- H1 Content -->
        <h1 class="text-white font-bold lg:text-7xl text-5xl text-center tracking-wider uppercase">Products</h1>
    </div>
    
    {{-- ===== Start Tabs ===== --}}
    <div class="bg-white p-4 rounded-lg shadow mb-4 mt-7">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 md:space-x-4">
            <!-- Category Filter -->
            <div class="flex items-center space-x-4">
                <span class="font-medium">Category:</span>
                <div class="flex space-x-4">
                    @foreach ($categories as $category)
                        <label for="{{ $category->slug }}" class="inline-flex items-center" wire:key="{{ $category->id }}">
                            <input type="checkbox" wire:model.live="selected_categories" id="{{ $category->slug }}" value="{{ $category->id }}" class="text-blue-600" />
                            <span class="ml-2">{{ $category->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Price Range Filter -->
            <div class="flex items-center space-x-4">
                <span class="font-medium">Price:</span>
                <div class="flex items-center space-x-2">
                    <input 
                        type="number" 
                        min="{{ $minPrice }}" 
                        max="{{ $maxPrice }}" 
                        wire:model.live.debounce.250ms="selectedMinPrice" 
                        class="w-20 px-2 py-1 border rounded"
                    />
                    <span>to</span>
                    <input 
                        type="number" 
                        min="{{ $minPrice }}" 
                        max="{{ $maxPrice }}" 
                        wire:model.live.debounce.250ms="selectedMaxPrice" 
                        class="w-20 px-2 py-1 border rounded"
                    />
                </div>
            </div>

            <!-- Sorting Dropdown -->
            <div class="flex items-center space-x-4">
                <span class="font-medium">Sort by:</span>
                <div class="relative">
                    <select wire:model.live="sort" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="featured">Featured</option>
                        <option value="low_to_high">Price: Low to High</option>
                        <option value="high_to_low">Price: High to Low</option>
                        <option value="newest">Newest</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== Start Shop Section ===== --}}
    <div class="my-3">
        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1" class="mt-10 mx-4 lg:mx-0 flex flex-row gap-4 flex-wrap">
            @foreach ($products as $product)
            <div class="card_product w-[47%] lg:w-[24%]" wire:key="{{ $product->id }}">
                <div class="relative group">
                    <a href="/shop/{{ $product->slug }}" wire:navigate>
                        <!-- First Image -->
                        <img 
                            src="{{ url('storage', $product->images[0]) }}" 
                            class="lg:h-[400px] h-[250px] w-[300px] absolute top-0 left-0 transition-opacity duration-500 group-hover:opacity-0" 
                            alt="{{ $product->name }}" />
            
                        <!-- Second Image -->
                        <img 
                            src="{{ url('storage', $product->images[1]) }}" 
                            class="lg:h-[400px] h-[250px] w-[300px] opacity-0 transition-opacity duration-500 group-hover:opacity-100" 
                            alt="{{ $product->name }}" />
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
<section class="w-full">
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "isAutoPlay": true
        }' class="relative">
        <div class="hs-carousel relative overflow-hidden h-[90vh] rounded-lg">
            <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                {{-- ===== First Slide ===== --}}
                <div class="hs-carousel-slide">
                    <div 
                    style="background-image: url('{{ asset('pics/slider_1.webp') }}'); background-size: cover; background-position: center;"
                    class="flex lg:justify-start justify-center h-full">
                        <div class="flex lg:items-start lg:max-w-[50%] lg:ml-12 justify-center items-center flex-col max-w-[75%] md:max-w-full">
                            <h1 class="text-5xl text-black text-center font-bold mb-4 lg:mb-8">Essence of <span class="text-[#FF1493]">Romance</span></h1>

                            <p class="text-xl md:max-w-[80%] text-black text-center lg:text-left lg:mb-10 mb-8">Enchant your senses with our floral and exotic perfumes, crafted to evoke passion and elegance. Find the perfect fragrance for every romantic moment.</p>

                            <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300 w-fit">Discover Now</a>
                        </div>
                    </div>
                </div>

                {{-- ===== Second Slide ===== --}}
                <div class="hs-carousel-slide">
                    <div 
                    style="background-image: url('{{ asset('pics/slider_2.webp') }}'); background-size: cover; background-position: center;"
                    class="flex justify-center h-full">
                        <div class="flex justify-center items-center flex-col max-w-[75%] md:max-w-full">
                            <h1 class="text-5xl text-white text-center font-bold mb-4">Scent of <span class="text-[#FFD700]">Sophistication</span></h1>

                            <p class="text-xl md:max-w-[50%] text-white text-center mb-8">Immerse yourself in the perfect blend of tradition and modernity with our curated collection of exquisite fragrances. Discover your signature scent today.</p>

                            <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300 w-fit">Shop Now </a>
                        </div>
                    </div>
                </div>

                {{-- ===== Third Slide ===== --}}
                <div class="hs-carousel-slide">
                    <div 
                    style="background-image: url('{{ asset('pics/slider_3.webp') }}'); background-size: cover; background-position: center;"
                    class="flex lg:justify-start justify-center h-full">
                        <div class="flex lg:items-start lg:max-w-[50%] lg:ml-12 justify-center items-center flex-col max-w-[75%] md:max-w-full">
                            <h1 class="text-5xl text-black text-center font-bold mb-4 lg:mb-8"><span class="text-[#FF1493]">Elegance</span> in Every Bottle</h1>

                            <p class="text-xl md:max-w-[80%] text-black text-center lg:text-left lg:mb-10 mb-8">Experience the essence of sophistication with our exclusive range of premium perfumes. Elevate your senses with every spray.</p>

                            <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-3 px-6 w-fit rounded-full hover:bg-[#FF1493] transition duration-300">Explore Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        {{-- ===== Previous & Next Slider Navigate ===== --}}
        <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg">
            <span class="text-2xl" aria-hidden="true">
                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>

        <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>
  
        {{-- ===== Three Dot Slider Navigate ===== --}}
        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
            <span class="hs-carousel-active:bg-[#FF69B4] hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span class="hs-carousel-active:bg-[#FF69B4] hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span class="hs-carousel-active:bg-[#FF69B4] hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
        </div>
    </div>
</section>
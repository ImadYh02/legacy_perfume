<section class="w-[95vw] mx-auto px-6 lg:my-10 mt-8 h-full lg:mx-8 py-8 flex flex-col gap-10 justify-center items-center text-white">
    <div class="flex-col justify-center items-center">
        <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">Top Categories</h2>
        <div class="h-1 w-32 bg-[#ff7be5] mx-auto"></div>
    </div>

    <div class="flex gap-8 justify-center items-center lg:flex-row flex-col w-full lg:mx-8">
        {{-- ===== All Category ===== --}}
        <div class="category_container shadow-xl rounded-2xl overflow-hidden w-full lg:w-1/3 h-[40vh] lg:h-[45vh] flex flex-col gap-5 justify-center items-center relative"> 
            <img 
            src="{{ asset('pics/all_category.webp') }}"
            class="category_image h-full w-full transition-all duration-500"
            alt="Legacy Perfume">
            <div class="absolute flex flex-col gap-5 justify-center items-center">
                <h1
                class="text-center"
                style="font-weight: 500; font-size: 35px; line-height: 49px">
                    {{-- Timeless Scents for Him --}}
                    Fresh Collection
                </h1>
                <a
                wire:navigate
                class="category_link"
                style="font-weight: 500; font-size: 18px; line-height: 27px"
                href="#"> Explore Fresh Scents </a>
            </div>
        </div>
        
        {{-- ===== Men's Category ===== --}}
        <div class="category_container shadow-xl rounded-2xl overflow-hidden w-full lg:w-1/3 h-[40vh] lg:h-[45vh] flex flex-col gap-5 justify-center items-center relative"> 
            <img 
            src="{{asset('pics/men_category.jpeg')}}"
            class="category_image w-full h-full transition-all duration-500"
            alt="Men's Perfume">
            <div class="absolute flex flex-col gap-5 justify-center items-center">
                <h1
                class="text-center"
                style="font-weight: 500; font-size: 35px; line-height: 49px">
                    {{-- Timeless Scents for Him --}}
                    Men's Collection
                </h1>
                <a
                wire:navigate
                class="category_link"
                style="font-weight: 500; font-size: 18px; line-height: 27px"
                href="#"> Discover Men's Fragrances </a>
            </div>
        </div>
        
        {{-- ===== Women's Category ===== --}}
        <div class="category_container shadow-xl rounded-2xl overflow-hidden w-full lg:w-1/3 h-[40vh] lg:h-[45vh] flex flex-col gap-5 justify-center items-center relative"> 
            <img 
            src="{{asset('pics/women_category.webp')}}"
            class="category_image h-full w-full transition-all duration-500"
            alt="Men's Perfume">
            <div class="absolute flex flex-col gap-5 justify-center items-center">
                <h1
                class="text-center"
                style="font-weight: 500; font-size: 35px; line-height: 49px">
                    {{-- Timeless Scents for Him --}}
                    Women's Collection
                </h1>
                <a
                wire:navigate
                class="category_link"
                style="font-weight: 500; font-size: 18px; line-height: 27px"
                href="#"> Discover Women's Fragrances </a>
            </div>
        </div>
    </div>
</section>
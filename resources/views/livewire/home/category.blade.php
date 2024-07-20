<section class="w-[95vw] mx-auto lg:w-[95vw] lg:mt-0 mt-32 h-screen lg:mx-8 py-8 flex justify-center items-center text-white">
    <div class="flex gap-3 justify-center items-center lg:flex-row flex-col w-full lg:mx-8">
        {{-- ===== All Category ===== --}}
        <div
        class="category_container shadow-xl overflow-hidden w-full lg:w-[46%] h-[40vh] lg:h-[55vh] flex flex-col gap-5 justify-center items-center relative"> 
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
        <div
        class="category_container shadow-xl overflow-hidden w-full lg:w-[27%] h-[40vh] lg:h-[55vh] flex flex-col gap-5 justify-center items-center relative"> 
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
        <div
        class="category_container shadow-xl overflow-hidden w-full lg:w-[27%] h-[40vh] lg:h-[55vh] flex flex-col gap-5 justify-center items-center relative"> 
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
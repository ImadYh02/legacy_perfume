<section class=" w-[95vw] mx-auto lg:-mt-20 mt-20 min:h-screen lg:mx-8 py-8 flex-col justify-center items-center text-black">

    {{-- ===== Heading ===== --}}
    <div class="flex-col justify-center items-center">
        <p 
        style="font-weight: 600; letter-spacing: 3px"
        class="text-center text-[#ff7be5]">SHOP BY CATEGORIES</p>
        <h2 class="text-3xl lg:text-5xl font-bold text-center text-[black] my-2 lg:my-4">Inhale the Elegance</h2>
        <div class="h-1 w-40 bg-[#ff7be5] mx-auto"></div>
        {{-- <p class="text-xl text-gray-600 text-center mt-4">Elevate your senses with our handpicked premium perfumes.</p> --}}
    </div>

    {{-- ===== Tabs ===== --}}
    <nav class="flex lg:space-x-12 space-x-2 justify-center items-center my-6 lg:mt-10" aria-label="Tabs" role="tablist">
        <button type="button" class="hs-tab-active:bg-[#FF69B4] hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-3 px-6 inline-flex items-center gap-x-2 bg-black text-sm text-center text-white rounded-3xl disabled:opacity-50 disabled:pointer-events-none active" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1" role="tab">
            Best Seller
        </button>

        <button type="button" class="hs-tab-active:bg-[#FF69B4] hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-black text-sm font-medium text-center text-white rounded-3xl disabled:opacity-50 disabled:pointer-events-none" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2" role="tab">
            New Arrivals
        </button>

        <button type="button" class="hs-tab-active:bg-[#FF69B4] hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-black text-sm font-medium text-center text-white rounded-3xl disabled:opacity-50 disabled:pointer-events-none" id="pills-with-brand-color-item-3" data-hs-tab="#pills-with-brand-color-3" aria-controls="pills-with-brand-color-3" role="tab">
            Top Rated
        </button>
    </nav>
          
    {{-- ===== Cards Product ===== --}}
    <div class="mt-3 mx-8 lg:mx-0 flex">
        {{-- ===== Best Seller ===== --}}
        <div class="w-full h-[150vh] lg:h-[65vh] flex flex-col lg:flex-row justify-center items-center gap-6" id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">

            {{-- ===== Card Item ===== --}}
            <div class="h-full group w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div class="product-pic transition-all duration-500 ease-in-out flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full group w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div class="product-pic transition-all duration-500 ease-in-out flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                    <div>
                        <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                        <p>2 980,00 $</p>
                    </div>
                    <div>
                        <a
                        style="color: black"
                        wire:navigate
                        class="category_link"
                        href="#"> Shop Now </a>
                    </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full group w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div class="product-pic transition-all duration-500 ease-in-out flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===== New Arrivals ===== --}}
        <div class="hidden w-full h-[150vh] lg:h-[65vh] flex flex-col lg:flex-row justify-center items-center gap-6" id="pills-with-brand-color-2" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2">

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_1.jpg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_1.jpg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_1.jpg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- ===== Top Rated ===== --}}
        <div class="hidden w-full h-[150vh] lg:h-[65vh] flex flex-col lg:flex-row justify-center items-center gap-6" id="pills-with-brand-color-3" role="tabpanel" aria-labelledby="pills-with-brand-color-item-3">

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_3.jpeg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_3.jpeg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== Card Item ===== --}}
            <div class="h-full w-full lg:w-[28%] category_container overflow-hidden rounded-3xl flex-col justify-between">
                <div
                style="background-image: url('{{ asset('pics/perfume_3.jpeg') }}'); background-size: cover; background-position: center;"
                class="flex-col gap-10 items-center h-full w-full relative">
                    <a href="" class="bg-white p-3 rounded-full inline-block absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>

                    
                    <div class="flex absolute bottom-2 w-[90%] items-center justify-around bg-white rounded-3xl mx-4 mb-4 lg:p-2 p-1">
                        <div>
                            <p style="font-size: 14px; line-height: 28px; font-weight: 400">Gucci CC Marmont </p>
                            <p>2 980,00 $</p>
                        </div>
                        <div>
                            <a
                            style="color: black"
                            wire:navigate
                            class="category_link"
                            href="#"> Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== Button Shop ===== --}}
    <div class="flex justify-center mt-4">
        <a href="#" class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">Explore Collection</a> 
    </div>
</section>
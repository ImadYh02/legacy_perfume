<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Discover the Essence of Luxury - Premium Perfumes for Every Occasion' }}</title>

    {{-- ===== Jost Font ===== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    {{-- @livewire('partials.navbar') --}}

    <main>
        {{-- ===== Start Hero Section ===== --}}
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
        {{-- ===== End Hero Section ===== --}}


        {{-- ===== Start Promises Section ===== --}}
        <section class="w-[95vw] mx-auto">
            <div class="px-6 pt-20 flex flex-col lg:flex-row lg:justify-center lg:items-center gap-10">
                {{-- ===== Card ===== --}}
                <div class="flex flex-col lg:flex-row lg:gap-5 gap-2 justify-center items-center lg:bg-transparent bg-white lg:w-1/4 px-5 lg:py-4 py-6 rounded-xl pro-card">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF69B4" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                      </svg>
                      
                      <div>
                        <h1 class="textp font-semibold text-center lg:text-left"> Next Day Delivery </h1>
                        <p class="textp text-[#2b2b2b] text-sm text-center lg:text-left"> Free– spend over $99 </p>
                      </div>
                </div>
        
                {{-- ===== Card ===== --}}
                <div class="flex flex-col lg:flex-row lg:gap-5 gap-2 justify-center items-center lg:bg-transparent bg-white lg:w-1/4 px-5 lg:py-4 py-6 rounded-xl pro-card">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF69B4" width="40" height="40">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>           
                      
                    <div>
                        <h1 class="textp font-semibold text-center lg:text-left"> Low Price Guarantee </h1>
                        <p class="textp text-[#2b2b2b] text-sm text-center lg:text-left"> We offer competitive prices </p>
                    </div>
                </div>
        
                {{-- ===== Card ===== --}}
                <div class="flex flex-col lg:flex-row lg:gap-5 gap-2 justify-center items-center lg:bg-transparent bg-white lg:w-1/4 px-5 lg:py-4 py-6 rounded-xl pro-card">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF69B4" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>  
                      
                    <div>
                        <h1 class="textp font-semibold text-center lg:text-left"> Satisfaction Guarantee </h1>
                        <p class="textp text-[#2b2b2b] text-sm text-center lg:text-left"> We Guarantee Our Products </p>
                    </div>
                </div>
        
                {{-- ===== Card ===== --}}
                <div class="flex flex-col lg:flex-row lg:gap-5 gap-2 justify-center items-center lg:bg-transparent bg-white lg:w-1/4 px-5 lg:py-4 py-6 rounded-xl pro-card">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF69B4" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>  
                      
                      <div>
                        <h1 class="textp font-semibold text-center lg:text-left"> Customer Service </h1>
                        <p class="textp text-[#2b2b2b] text-sm text-center lg:text-left"> Call us 24/7 at 0612345678 </p>
                      </div>
                </div>
            </div>
        </section>
        {{-- ===== End Promises Section ===== --}}


        {{-- ===== Start Categories Section ===== --}}
        <section class="w-[95vw] mx-auto px-6 lg:my-10 mt-8 h-full lg:mx-8 py-8 flex flex-col gap-10 justify-center items-center text-white">
            <div class="flex-col justify-center items-center">
                <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">Top Categories</h2>
                <div class="h-1 w-32 bg-[#ff7be5] mx-auto"></div>
            </div>
        
            <div class="flex gap-8 justify-center items-center lg:flex-row flex-col w-full lg:mx-8">
                {{-- ===== All Category ===== --}}
                @foreach ($categories as $category)
                    <div class="category_container shadow-xl rounded-2xl overflow-hidden w-full lg:w-1/3 h-[40vh] lg:h-[45vh] flex flex-col gap-5 justify-center items-center relative" wire:key="{{ $category->id }}"> 
                        <img 
                        src="{{ url('storage', $category->image) }}"
                        class="category_image h-full w-full transition-all duration-500"
                        alt="{{ $category->name }}">
                        <div class="absolute flex flex-col gap-5 justify-center items-center">
                            <h1
                            class="text-center"
                            style="font-weight: 500; font-size: 35px; line-height: 49px">
                                {{-- Timeless Scents for Him --}}
                                {{ $category->name }} Collection
                            </h1>
                            <a
                            wire:navigate
                            class="category_link"
                            style="font-weight: 500; font-size: 18px; line-height: 27px"
                            href="/shop?selected_categories[0]={{ $category->id }}"> Explore Fresh Scents </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>        
        {{-- ===== End Categories Section ===== --}}


        {{-- ===== Start Marquee Section ===== --}}
        <section class="marquee lg:mb-10 mb-8 relative bg-[#0f0f0f] text-white py-[15px] px-0 lg:text-5xl text-3xl uppercase overflow-hidden">
            <div class="marquee_inner flex w-fit flex-auto flex-row">
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    100% Natural Care Products
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
        
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    Odora Perfumes & Fragrants
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
                
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    100% Natural Care Products
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
                
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    Odora Perfumes & Fragrants
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
                
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    100% Natural Care Products
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
                
                <div class="marquee_part flex items-center shrink-0 py-0 px-1">
                    Odora Perfumes & Fragrants
                    <div class="arrow">
                        <img src="{{asset('pics/right-arrow.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- ===== End Marquee Section ===== --}}


        {{-- ===== Start Products Section ===== --}}
        <section class="lg:w-[95vw] w-screen mx-auto lg:mt-0 mt-0 min:h-screen lg:mx-8 flex-col justify-center items-center text-black">

            {{-- ===== Heading ===== --}}
            <div class="flex-col justify-center items-center">
                <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">Inhale the Elegance</h2>
                <div class="h-1 w-40 bg-[#ff7be5] mx-auto"></div>
            </div>
                  
            {{-- ===== Cards Product ===== --}}
            <div class="mt-10 mx-4 lg:mx-0 flex flex-row lg:gap-0 gap-4 flex-wrap">
                @foreach ($products as $product)
                    <div class="card_product w-[47%] lg:w-1/4">
                        <div class="relative group">
                            <a href="/shop/{{ $product->slug }}" wire:navigate>
                                <!-- First Image -->
                                <img 
                                    src="{{ url('storage', $product->images[0]) }}" 
                                    class="lg:h-[400px] h-[250px] w-[300px] absolute top-0 left-0 transition-opacity duration-500 group-hover:opacity-0" 
                                    alt="{{ $product->name }}">
                    
                                <!-- Second Image -->
                                <img 
                                    src="{{ url('storage', $product->images[1]) }}" 
                                    class="lg:h-[400px] h-[250px] w-[300px] opacity-0 transition-opacity duration-500 group-hover:opacity-100" 
                                    alt="{{ $product->name }}">
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
        
            {{-- ===== Button Shop ===== --}}
            <div class="flex justify-center mt-4">
                <a href="/shop" wire:navigate class="bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">Explore Collection</a> 
            </div>
        </section>
        {{-- ===== End Products Section ===== --}}


        {{-- ===== Start Quality Section ===== --}}
        <section class="w-[95vw] mx-auto lg:my-0 my-8 h-1/2 lg:px-20 text-black">
            <div class="flex gap-5 justify-center lg:flex-row px-7 lg:justify-between">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-1/2" src="{{asset('pics/quality_1.png')}}" alt="">
                    <p class="textq text-center">Pure Elegance in Every Drop</p>
                </div>
        
                <div class="flex flex-col justify-center items-center">
                    <img class="h-1/2" src="{{asset('pics/quality_2.png')}}" alt="">
                    <p class="textq text-center">Infused with Nature’s Best</p>
                </div>
        
                <div class="flex flex-col justify-center items-center">
                    <img class="h-1/2" src="{{asset('pics/quality_3.png')}}" alt="">
                    <p class="textq text-center">Allergy-Free Fragrance</p>
                </div>
        
                <div class="flex flex-col justify-center items-center">
                    <img class="h-1/2" src="{{asset('pics/quality_4.png')}}" alt="">
                    <p class="textq text-center">100% Organic Luxury</p>
                </div>
            </div>
        </section>
        {{-- ===== End Quality Section ===== --}}


        {{-- ===== Start What Are You Waiting Section ===== --}}
        <section class="relative w-full min:h-[80vh] lg:mb-16 overflow-hidden flex justify-center items-center">
            <video autoplay muted loop class="absolute top-1/2 left-1/2 min-w-full min-h-full w-auto h-auto transform -translate-x-1/2 -translate-y-1/2 object-cover z-[-1]">
                <source src="{{ asset('vids/awaiting-clip.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="relative z-10 text-white text-center p-5 flex justify-center items-center flex-col gap-6">
                <!-- Your content here -->
                <h1 class="textw text-4xl font-bold"><span class="text-[#FF69B4]">What Are You Waiting For?</span> Seize the Moment</h1>
                <p class="textw mt-4 text-lg lg:w-[70%]">
                    Don’t let your perfect fragrance slip away. Discover a world of luxury, elegance, and sophistication. Enhance your collection with our exclusive scents tailored just for you.
                </p>
                <a href="/shop" wire:navigate class="textw bg-[#FF69B4] text-white py-3 px-6 rounded-full hover:bg-[#FF1493] transition duration-300">Shop Your Signature Scent</a> 
            </div>
        </section>        
        {{-- ===== End What Are You Waiting Section ===== --}}


        {{-- ===== Start Testimonials Section ===== --}}
        <section class="lg:w-[95vw] w-screen mx-auto lg:mt-0 mt-8 min:h-screen lg:mx-8 flex-col justify-center items-center text-black">
            {{-- ===== Heading ===== --}}
            <div class="flex-col justify-center items-center">
                <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">The Wall of L❤️VE</h2>
                <div class="h-1 w-40 bg-[#ff7be5] mx-auto"></div>
            </div>
    
            <!-- Swiper -->
            <div class="swiper mySwiper lg:mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_1.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_2.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_3.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_4.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_1.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_2.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_3.png')}}" alt=""></div>
                    <div class="swiper-slide"><img class="w-full" src="{{asset('pics/Feedback_4.png')}}" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        {{-- ===== End Testimonials Section ===== --}}
    </main>

    {{-- @livewire('partials.footer') --}}

    @livewireScripts
</body>
</html>
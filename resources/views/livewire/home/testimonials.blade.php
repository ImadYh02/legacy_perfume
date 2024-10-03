<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body>
  <!-- Swiper -->
    <section class="w-[95vw] mx-auto lg:mt-12 lg:mb-8 min:h-[80vh] lg:mx-8 flex-col justify-center items-center text-black">
        <div class="swiper mySwiper h-[290vh] lg:max-h-[170vh] lg:mt-14 mt-7 flex">
            {{-- ===== Best Seller ===== --}}
            <div class="swiper-wrapper w-1/4 flex flex-col lg:flex-row justify-center items-center gap-6">

                {{-- ===== Card Item ===== --}}
                <div class="swiper-slide min:h-1/2 w-screen lg:w-1/4 rounded-3xl border-[gray] bg-white border-1 border-[1px] shadow-xl flex flex-col">
                    <div class="relative max-h-[73%]">
                        <img 
                            style="border-radius: 24px 24px 0 0"
                            class="max-h-full w-full"
                            src="{{ asset('pics/perfume_1.jpg') }}"
                            alt=""
                        >
                        <div class="absolute w-full top-4 px-3 z-30 flex justify-between items-center">
                            <div class="px-3 py-2 bg-[#FF69B4] rounded-xl">Best Seller</div>
                            <a href="#" class="rounded-full inline-block ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="px-6 my-auto max-h-[27%]">
                        <h2 class="font-bold"> Gucci CC Marmont 200 ml</h2>
                        <div class="flex justify-between items-center mt-3">
                            <div>
                                <h3 class="text-[grey]">Price:</h3>
                                <p class="font-bold">$200 <span class="font-normal ml-3 line-through">$420</span> </p>
                            </div>
                            <a href="" class="bg-[#FF69B4] p-3 rounded-xl inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ===== Card Item ===== --}}
                <div class="swiper-slide min:h-full w-full lg:w-1/4 rounded-3xl border-[gray] bg-white border-1 border-[1px] shadow-xl flex flex-col">
                    <div class="relative max-h-[73%]">
                        <img 
                            style="border-radius: 24px 24px 0 0"
                            class="max-h-full w-full"
                            src="{{ asset('pics/perfume_2.jpeg') }}"
                            alt=""
                        >
                        <div class="absolute w-full top-4 px-3 z-30 flex justify-between items-center">
                            <div class="px-3 py-2 bg-[#FF69B4] rounded-xl">Best Seller</div>
                            <a href="#" class="rounded-full inline-block ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="px-6 my-auto max-h-[27%]">
                        <h2 class="font-bold"> Gucci CC Marmont 200 ml</h2>
                        <div class="flex justify-between items-center mt-3">
                            <div>
                                <h3 class="text-[grey]">Price:</h3>
                                <p class="font-bold">$200 <span class="font-normal ml-3 line-through">$420</span> </p>
                            </div>
                            <a href="" class="bg-[#FF69B4] p-3 rounded-xl inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ===== Card Item ===== --}}
                <div class="swiper-slide min:h-full w-full lg:w-1/4 rounded-3xl border-[gray] bg-white border-1 border-[1px] shadow-xl flex flex-col">
                    <div class="relative max-h-[73%]">
                        <img 
                            style="border-radius: 24px 24px 0 0"
                            class="h-full w-full"
                            src="{{ asset('pics/perfume_3.jpeg') }}"
                            alt=""
                        >
                        <div class="absolute w-full top-4 px-3 z-30 flex justify-between items-center">
                            <div class="px-3 py-2 bg-[#FF69B4] rounded-xl">Best Seller</div>
                            <a href="#" class="rounded-full inline-block ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="px-6 my-auto max-h-[27%]">
                        <h2 class="font-bold"> Gucci CC Marmont 200 ml</h2>
                        <div class="flex justify-between items-center mt-3">
                            <div>
                                <h3 class="text-[grey]">Price:</h3>
                                <p class="font-bold">$200 <span class="font-normal ml-3 line-through">$420</span> </p>
                            </div>
                            <a href="" class="bg-[#FF69B4] p-3 rounded-xl inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ===== Card Item ===== --}}
                <div class="swiper-slide min:h-full w-full lg:w-1/4 rounded-3xl border-[gray] bg-white border-1 border-[1px] shadow-xl flex flex-col">
                    <div class="relative max-h-[73%]">
                        <img 
                            style="border-radius: 24px 24px 0 0"
                            class="h-full w-full"
                            src="{{ asset('pics/perfume_1.jpg') }}"
                            alt=""
                        >
                        <div class="absolute w-full top-4 px-3 z-30 flex justify-between items-center">
                            <div class="px-3 py-2 bg-[#FF69B4] rounded-xl">Best Seller</div>
                            <a href="#" class="rounded-full inline-block ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="px-6 my-auto max-h-[27%]">
                        <h2 class="font-bold"> Gucci CC Marmont 200 ml</h2>
                        <div class="flex justify-between items-center mt-3">
                            <div>
                                <h3 class="text-[grey]">Price:</h3>
                                <p class="font-bold">$200 <span class="font-normal ml-3 line-through">$420</span> </p>
                            </div>
                            <a href="" class="bg-[#FF69B4] p-3 rounded-xl inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>

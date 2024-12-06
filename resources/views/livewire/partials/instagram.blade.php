<section class="max-w-screen mt-8 min:h-screen flex-col justify-center items-center text-black">
    {{-- ===== Heading ===== --}}
    <div class="flex-col justify-center items-center">
        <div class="mx-auto">
            <img src="{{asset('pics/insta_logo.png')}}" class="h-10 w-10 mx-auto" alt="">
        </div>
        <h2 class="text-2xl lg:text-3xl font-bold text-center text-[black] my-2 lg:mb-4">INSTAGRAM</h2>
        <div class="h-1 w-28 bg-[#ff7be5] mx-auto"></div>
    </div>

    {{-- ===== INSTAGRAM Picture ===== --}}
    <div class="mt-8 flex relative">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/about-pic.jpg')}}" alt="">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/perfume_1.jpg')}}" alt="">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/perfume_2.jpeg')}}" alt="">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/perfume_3.jpeg')}}" alt="">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/opening_hours_bg.jpg')}}" alt="">
        <img class="w-1/6 lg:h-52 h-24" src="{{asset('pics/about-pic.jpg')}}" alt="">

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <a 
                href="https://www.instagram.com/imad.iam"
                target="_blanc"
                class="texti text-[#FF69B4] hover:text-white font-extrabold bg-white hover:bg-[#FF69B4] lg:py-3 py-1.5 px-6 rounded-full transition duration-300">
                @imad.iam
            </a> 
        </div>
    </div>
</section>
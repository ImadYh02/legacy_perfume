<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>

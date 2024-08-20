<section 
    style="background-image: url({{asset('pics/about-bg.jpeg')}}); background-size: cover;background-position: center;"
    class="w-[98vw] h-screen my-0 max-h-screen lg:p-20 py-20 px-10 text-white">
    <div class="flex flex-col justify-center items-center lg:flex-row h-full">
        {{-- ===== Picture Section ===== --}}
        <div class="lg:w-1/3 w-full h-[80%] max-w-full fllex justify-center items-center">
            <img class="w-full min-h-[100%] rounded-2xl" src="{{ asset('pics/about-pic.jpg') }}" alt="">
        </div>

        {{-- ===== Content Section ===== --}}
        <div class="lg:w-2/3 w-full flex flex-col justify-center items-center mt-10 lg:mt-0 lg:pl-32">
            <p style="font-weight: 600; letter-spacing: 3px"
                class="lg:text-left text-center text-[#ffd700]">
                Discover Our Story
            </p>
            <h1 class="text-2xl lg:text-4xl font-bold text-center lg:text-left text-white my-2 lg:my-4">
                Elevate Your Senses with Luxurious Scents
            </h1>
            <p class="text-lg text-white text-center lg:text-left">
                Explore a world of elegance and sophistication through our curated collection of premium perfumes, crafted to captivate your senses and leave a lasting impression.
            </p>
            <ul class="mt-6 lg:ml-10">
                <li class="flex justify-center items-center gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffd700" class="size-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> 
                      
                    Exquisite Fragrances: Immerse yourself in a diverse range of exquisite scents, meticulously selected to cater to every preference and occasion.
                </li>
                
                <li class="my-8 flex justify-center items-center gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffd700" class="size-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> 
                      
                    Quality Ingredients: Our perfumes are crafted using the finest ingredients, ensuring a luxurious and long-lasting fragrance experience.
                </li>
                
                <li class="flex justify-center items-center gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffd700" class="size-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> 
                      
                    Personalized Service: Enjoy personalized fragrance recommendations and exceptional customer service, helping you find the perfect scent for any moment.
                </li>
            </ul>
        </div>
    </div>    
</section>
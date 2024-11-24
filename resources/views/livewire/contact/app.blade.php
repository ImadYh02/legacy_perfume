<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Perfume Shop - Shop' }}</title>

        {{-- ===== Jost Font ===== --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @livewire('partials.navbar')
        
        <main class="w-[90%] mx-auto">
            {{-- ===== Start Banner ===== --}}
            <div class="relative lg:h-[60vh] h-[40vh] w-full flex justify-center items-center rounded-xl overflow-hidden">
                <!-- Video Background -->
                <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
                    <source src="{{ asset('vids/contact_banner_video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            
                <!-- H1 Content -->
                <h1 class="text-white font-bold lg:text-7xl text-5xl text-center tracking-wider uppercase">Contact Us</h1>
            </div>
            
            {{-- ===== Start Main Section ===== --}}
            <div class="flex lg:flex-row flex-col lg:gap-4 gap-8 mt-20">

                {{-- ===== Contact Info ===== --}}
                <div class="lg:w-1/3">
                    <div class="flex flex-col gap-5">
                        <h1 class="font-bold text-3xl"> Contact Info. </h1>
                        <p> Some information that you may want to know </p>
                    </div>

                    <div class="flex flex-col mt-5">
                        {{-- ===== Phone Number ===== --}}
                        <div class="flex flex-row items-center gap-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF1493" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <div class="flex flex-col gap-3">
                                <h1 class="uppercase text-[10px] font-semibold">phone number</h1>
                                <a class="text-lg hover:text-[#FF1493] transition duration-300" href="tel:+212612345678">+212 6123 456 78</a>
                            </div>
                        </div>

                        <hr class="lg:my-12 my-8 border-black">

                        {{-- ===== Address ===== --}}
                        <div class="flex flex-row items-center gap-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF1493" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                              
                            <div class="flex flex-col gap-3">
                                <h1 class="uppercase text-[10px] font-semibold">Address</h1>
                                <p class="text-lg"> Greenwich Village, NYC 1001 United State </p>
                            </div>
                        </div>

                        <hr class="lg:my-12 my-8 border-black">

                        {{-- ===== Email ===== --}}
                        <div class="flex flex-row items-center gap-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF1493" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                              
                            <div class="flex flex-col gap-3">
                                <h1 class="uppercase text-[10px] font-semibold">Email</h1>
                                <a class="text-lg hover:text-[#FF1493] transition duration-300" href="mailto:hello@woostify.com">hello@woostify.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ===== Contact Form ===== --}}
                <div class="lg:w-2/3">
                    <div class="flex flex-col gap-5">
                        <h1 class="font-bold text-3xl"> Leave Your Message </h1>
                        <p> Feel free to contact with us by using the form below </p>
                    </div>
                    <form action="" class="flex flex-col gap-5 w-full mt-5 backdrop-blur-xl bg-white/30 p-6 rounded-lg">
                        <div class="flex lg:flex-row flex-col gap-6">
                            <div class="lg:w-1/2 w-full">
                                <label for="input-label" class="block text-sm font-medium mb-2">Your Name</label>
                                <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Alex John">
                            </div>

                            <div class="lg:w-1/2 w-full2">
                                <label for="input-label" class="block text-sm font-medium mb-2">Email</label>
                                <input type="email" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="you@site.com">
                            </div>
                        </div>
                        <div class="w-full">
                            <label for="input-label" class="block text-sm font-medium mb-2">Message</label>
                            <textarea type="text" id="input-label" rows="8" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="What do you want to say."></textarea>
                        </div>
                        {{-- ===== Track Button ===== --}}
                        <a href="#" class="bg-[#FF69B4] text-white py-2 px-6 mx-auto lg:mx-0 w-fit rounded-full hover:bg-[#FF1493] transition duration-300"> Send Us </a>
                    </form>
                </div>
            </div>
        </main>        
        
        @livewire('partials.maps')
        @livewire('partials.footer')
        
        @livewireScripts
    </body>
</html>

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

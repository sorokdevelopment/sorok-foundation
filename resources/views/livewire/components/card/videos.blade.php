<div class="swiper-slide w-full">
    <h1 class="font-bold text-center p-4 text-2xl md:text-3xl lg:text-5xl">
        {{ $title }}
    </h1>
    <div class="h-1 w-1/3 mx-auto bg-[#00674F]"></div>

    <div class="w-full h-[40vh] lg:h-[50vh] mt-8">
        <div class="h-full">
            <iframe
                class="w-full h-full rounded-lg shadow-lg"
                src="https://www.youtube.com/embed/{{ $embedId }}?autoplay=1&mute=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
    </div>
</div>
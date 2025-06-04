<div class="swiper-slide h-full mt-8">
    <div class="h-full bg-white rounded-t-lg border-b-4 border-[#00674F] flex flex-col">
        <div class="aspect-[4/3] overflow-hidden"> 
            <img src="{{ asset('storage/' . $image ) }}" 
                 loading="lazy" 
                 alt="{{ $title }}"
                 class="w-full h-full object-cover rounded-t-lg">
        </div>

        <div class="flex-grow space-y-4 p-6 flex flex-col">
            <h2 class="text-center font-bold text-xl">
                {{ $title }}
            </h2>
            <p class="font-secondary text-base md:text-lg leading-10 line-clamp-4 flex-grow">
                {{ $description }}                   
            </p>
            <div class="mt-auto">
                <a href="{{ route('programs-and-services') }}" 
                   class="text-primary flex items-center font-semibold hover:font-bold">
                    See More →
                </a>
            </div>
        </div>
    </div>
</div>
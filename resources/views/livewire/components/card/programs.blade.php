<div class="mt-8 swiper-slide">
    <div class="bg-white rounded-t-lg border-b-4 border-[#00674F] ">
        <img src="{{ asset('storage/' . $image ) }}" loading="lazy" alt="Background" class="w-full h-auto object-cover rounded-t-lg">

        <div class="space-y-8 py-6 px-8">
            <h2 class="text-center font-bold text-lg">
                {{ $title }}
            </h2>
            <p class="font-secondary text-sm lg:text-base line-clamp-4">
                {{ $description }}                   
            </p>
            <div class="flex items-center">
                <a href="{{ route('programs-and-services') }}" class="text-[#00674F] flex items-center font-bold hover:font-extrabold">
                    See More 
                    <i class="material-icons text-2xl font-bold fill-current">
                        keyboard_arrow_right
                    </i>

                </a>
            </div>

        </div>

    </div>
</div>

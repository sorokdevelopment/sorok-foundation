<div x-cloak>
    <div class="my-16">
        <x-layouts.container class="relative">
            <p class="text-center font-secondary text-base md:text-lg lg:text-xl leading-10">
                Partnered with recognized companies
            </p>


            <div class="swiper mt-8 mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($sponsors as $sponsor)
                        <div class="swiper-slide" style="width: auto;">
                            <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                alt="{{ $sponsor->name }}" 
                                class="h-16 md:h-24 object-contain">
                        </div>
                    @endforeach
                </div>
            </div>
        </x-layouts.container>  
    </div>
</div>

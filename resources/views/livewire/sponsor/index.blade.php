<div>
    <div class="my-20">
        <x-layouts.container class="relative">
            <p class="text-center font-secondary">
                Trusted by different known companies
            </p>


            <div class="swiper mySwiper w-full overflow-hidden mt-4 mx-auto">
                <div class="swiper-wrapper flex items-center">
                    {{-- @foreach (range(1,5) as $repeat)  --}}
                        @foreach ($sponsors as $sponsor)
                            <div class="swiper-slide w-auto flex-shrink-0 mx-4"> 
                                <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                    alt="Sponsor - [{{ $sponsor->name }}]" 
                                    class="h-16 md:h-24 object-contain">
                            </div>
                        @endforeach
                    {{-- @endforeach --}}
                </div>
            </div>
        </x-layouts.container>
    </div>
</div>

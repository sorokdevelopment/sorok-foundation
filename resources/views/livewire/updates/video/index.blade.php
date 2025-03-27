<div>
    @if($videos->isNotEmpty())
        <div class="flex items-center justify-center mt-12 md:py-12">
            <x-layouts.container>

                <div class="relative">
                    <div class="update-swiper px-6 md:px-12 mx-auto flex justify-center items-center">
                        <div class="swiper-wrapper">
                            @foreach ($videos as $video)
                                <livewire:components.card.videos 
                                    wire:key="{{ $video->id }}"
                                    title="{{ $video->title }}"
                                    embedId="{{ $video->embedId }}"
                                />
                            @endforeach
                        </div>

                        <div class="absolute mt-16 inset-y-0 w-full flex justify-between items-center z-0">
                            <div class="update-button-prev flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-[#00674F] hover:bg-white text-white hover:text-[#00674F] rounded-full shadow-lg cursor-pointer absolute -left-4">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_left</i>
                            </div>
                            <div class="update-button-next flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-[#00674F] hover:bg-white text-white hover:text-[#00674F] rounded-full shadow-lg cursor-pointer absolute -right-4">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_right</i>
                            </div>
                        </div>

                        <div class="update-swiper-pagination"></div>
                    </div>
                </div>
            </x-layouts.container>
        </div>
    @endif
</div>

<div>
    @if ($postings->isNotEmpty())
        <div class="flex items-center justify-center mt-12 py-8 md:py-12">
            <x-layouts.container>
                <div class="text-center mb-16">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        SOCIAL MEDIA POSTING
                    </h1>
                     <p class="font-secondary max-w-2xl mx-auto text-lg">Keep engaged with regular content</p>
                </div>

                <div class="mt-8" >
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" >
                        @foreach ($postings as $posting)
                            <div x-data="{ show: true }"
                                x-show="show"
                            >
                                <livewire:components.card.posting 
                                    wire:key="{{ $posting->id }}"
                                    image="{{ $posting->image }}"
                                    title="{{ $posting->title }}"
                                    description="{{ $posting->description }}"
                                    date="{{ $posting->formatted_date }}"
                                    link="{{ $posting->link }}"
                                />
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center mt-12 space-x-4">
                        @if ($hasMore)
                            <div wire:click="loadMore" class="cursor-pointer bg-white text-primary border-2 border-[#00674F] font-primary text-sm md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW MORE
                            </div>
                        @endif
                        @if ($expanded)
                            <div wire:click="showLess" class="cursor-pointer bg-white text-primary border-2 border-[#00674F] font-primary text-sm md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW LESS
                            </div>
                        @endif
                    </div>

                </div>
            </x-layouts.container>
        </div>
    @else
        <div class="flex items-center justify-center py-8  md:py-12">
            <x-layouts.container>
                <div class="text-center">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        SOCIAL MEDIA POSTING
                    </h1>
                     <p class="font-secondary max-w-2xl mx-auto text-lg">Keep engaged with regular content</p>
                </div>
    
                <div class="flex flex-col items-center justify-center py-16 px-4 text-center">

                    <i class="fa-solid fa-globe text-8xl mb-6 text-[#33333]"></i>
    
                    <h2 class="text-xl font-primary font-bold md:text-2xl mb-4">
                        No Social Media Posts Available
                    </h2>
                    <p class="font-secondary mx-auto mb-6">
                        Follow us on social media for updates or check back later for new content.
                    </p>
    
                    <div class="flex gap-4 mb-8">
                        <a target="__blank" href="https://www.facebook.com/sorokunifoundation">
                            <i class="fa-brands text-2xl hover:text-[#00674F] fa-facebook"></i>
                        </a>
                        <a target="__blank" href="https://www.instagram.com/sorokunifoundation">
                            <i class="fa-brands text-2xl hover:text-[#00674F] fa-instagram"></i>
                        </a>
                        <a target="__blank" href="https://www.youtube.com/@sorokunifoundationinc">
                            <i class="fa-brands text-2xl hover:text-[#00674F] fa-youtube"></i>
                        </a>
                        <a target="__blank" href="https://www.tiktok.com/@sorokunifoundationinc">
                            <i class="fa-brands text-2xl hover:text-[#00674F] fa-tiktok"></i>
                        </a>
                        <a target="__blank" href="https://www.linkedin.com/company/sorok-uni-foundation-inc./">
                            <i class="fa-brands text-2xl hover:text-[#00674F] fa-linkedin-in"></i>
                        </a>
                    </div>
    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('home') }}">
                            <x-buttons.primary>
                                BACK TO HOME
                            </x-buttons.primary>
                        </a>
                    </div>
                </div>
            </x-layouts.container>
        </div>
    @endif


</div>

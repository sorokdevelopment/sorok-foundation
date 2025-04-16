<div>
    @if ($postings->isNotEmpty())
        <div class="flex items-center justify-center mt-12 py-8 md:py-12">
            <x-layouts.container>
                <h1 class="font-bold text-center p-4 text-2xl md:text-3xl lg:text-5xl">
                    SOCIAL MEDIA POSTING
                </h1>

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
                            <div wire:click="loadMore" class="cursor-pointer bg-white text-[#00674F] border-2 border-[#00674F] font-primary text-sm md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW MORE
                            </div>
                        @endif
                        @if ($expanded)
                            <div wire:click="showLess" class="cursor-pointer bg-white text-[#00674F] border-2 border-[#00674F] font-primary text-sm md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW LESS
                            </div>
                        @endif
                    </div>

                </div>
            </x-layouts.container>
        </div>
    @else
        <div class="flex items-center justify-center py-8 mt-12">
            <x-layouts.container>
                <h1 class="font-bold text-center p-4 text-2xl md:text-3xl lg:text-5xl">
                    SOCIAL MEDIA POSTING
                </h1>
    
                <div class="flex flex-col items-center justify-center py-16 px-4 text-center">

                    <img src="{{ Vite::asset('public/images/posting.svg') }}" alt="Facebook Posting SVG" class="w-40 h-40 md:w-48 md:h-48 mb-6">

    
                    <h2 class="text-xl font-primary font-bold md:text-2xl mb-4">
                        No Social Posts Available
                    </h2>
                    <p class="font-secondary mx-auto mb-6">
                        Follow us on social media for updates or check back later for new content.
                    </p>
    
                    <div class="flex gap-4 mb-8">
                        <i class="fa-brands text-2xl fa-facebook"></i>
                        <i class="fa-brands text-2xl fa-instagram"></i>
                        <i class="fa-brands text-2xl fa-youtube"></i>
                        <i class="fa-brands text-2xl fa-tiktok"></i>
                        <i class="fa-brands text-2xl fa-linkedin-in"></i>
                    </div>
    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('home') }}">
                            <button 
                                class="px-6 py-3 border bg-[#00674F] text-white font-bold  font-primary rounded-3xl transition duration-300 cursor-pointer"
                            >
                                Back to Home
                            </button>
                        </a>
                    </div>
                </div>
            </x-layouts.container>
        </div>
    @endif


</div>

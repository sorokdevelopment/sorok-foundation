<div>
    @if ($newsletters->isNotEmpty() || $latestNewsletter)
        <div class="flex items-center justify-center mt-12 py-8 md:py-12">
            <x-layouts.container>
                <div class="text-center mb-16">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        OUR NEWSLETTER
                    </h1>
                     <p class="font-secondary max-w-2xl mx-auto text-lg">Get the latest news and exclusive content</p>
                </div>
                

                <div class="mt-8">            
                    <div class="grid xl:grid-cols-3 gap-6">
                        <div class="xl:col-span-1 h-full">
                            @if ($latestNewsletter)
                                <div class="bg-white shadow-lg rounded-lg overflow-hidden h-full flex flex-col">
                                    <img src="{{ asset('storage/' . $latestNewsletter->thumbnail) }}" alt="Featured News" class="w-full h-60 object-cover">
                                    <div class="p-4 flex-grow justify-between space-y-8 flex flex-col">
                                        <p class="text-xs font-secondary md:text-sm">{{ $latestNewsletter->formatted_date }}</p>
                                        <h1 class="text-xl font-bold">{{ $latestNewsletter->title }}</h1>
                                        <p class="flex-grow font-secondary text-sm lg:text-base">{{ $latestNewsletter->description }}</p>
                                        <div class="flex justify-start">
                                            <a href="{{ route('updates.show', $latestNewsletter->slug) }}" class="hover:font-bold text-primary text-sm font-semibold justify-start flex items-center">
                                                Read Article →  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="xl:col-span-2">
                            <div class="space-y-6"
                                :class="{ 'grid grid-cols-1 lg:grid-cols-2 gap-6': @js($expanded) }"
                                x-data="{ show: true }"
                                x-show="show"
                            >
                                @foreach ($newsletters as $newsletter) 
                                    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden h-full" wire:key="{{ $newsletter->id }}">
                                        <img src="{{ asset('storage/'. $newsletter->thumbnail) }}" alt="Newsletter Image" class="w-full md:w-48 h-48 object-cover">
                                        <div class="p-4 flex-grow flex space-y-2 justify-between flex-col">
                                            <p class="font-secondary text-xs md:text-sm">{{ $newsletter->formatted_date }}</p>
                                            <h1 class="text-lg font-bold line-clamp-1">{{ $newsletter->title }}</h1>
                                            <p class="flex-grow font-secondary text-sm lg:text-base line-clamp-1">{{ $newsletter->description }}</p>
                                            <div class="flex justify-start">
                                                <a href="{{ route('updates.show', $newsletter->slug) }}" class="text-primary text-sm font-semibold justify-start flex items-center hover:font-bold">
                                                    Read Article →
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
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
        <div class="flex items-center justify-center py-8 md:py-12">
            <x-layouts.container>
                <div class="text-center">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        OUR NEWSLETTER
                    </h1>
                     <p class="font-secondary max-w-2xl mx-auto text-lg">Get the latest news and exclusive content</p>
                </div>

                <div class="flex flex-col items-center justify-center space-y-4 py-12 px-4 text-center">
                    <i class="fa-solid fa-newspaper text-8xl mb-6 text-[#33333]"></i>

                    <h2 class="text-xl font-primary font-bold md:text-2xl mb-4">
                        No Newsletters Yet
                    </h2>
                    <p class="font-secondary mx-auto mb-6">
                        We're working on new content.
                    </p>

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


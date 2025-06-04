<div>
    <x-layouts.container>

        <div class="flex items-center justify-center mt-12 py-8 md:py-12">
            <div>
                <div class="text-center">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        UPCOMING EVENTS
                    </h1>
                    <p class="font-secondary max-w-2xl mx-auto text-lg">Curated experiences to elevate your career</p>
                </div>
            
                @if ($events->isNotEmpty())
    
                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-16">
                        @foreach($events as $event)
                            <div>
                                <div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                                    <span class="">
                                    <div class="absolute top-4 right-4 inline-block px-4 py-1 text-xs font-semibold uppercase bg-[#00674F]/10 text-primary rounded-full mb-3">
                                        <span>{{ $event->type_of_events }}</span>
                                    </div>
                                    
                                    <div class="pt-16 pb-8 px-8">
                                        <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors duration-300">
                                            {{ $event->title }}
                                        </h3>
                                        
                                        <p class="flex-grow font-secondary mb-4 text-base leading-relaxed">
                                            {{ $event->description }}
                                        </p>
                                        
                                        <div class="space-y-3 text-sm font-secondary border-t border-gray-100 pt-5">
                                            <div class="flex items-center">
                                                <i class="fa-solid fa-clock text-lg mr-3 text-primary flex-shrink-0"></i>
                                                <span class="font-secondary text-base">
                                                    {{ \Carbon\Carbon::parse($event->start_at)->format('F j, Y \a\t g:i A') }}
                                                </span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fa-solid fa-location-dot text-lg mr-3 text-primary flex-shrink-0"></i>
                                                <span class="font-secondary text-base">
                                                    {{ $event->location }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="mt-10 flex justify-end items-center gap-5 sm:gap-6">
                                            <a href="{{ route('event-form', $event) }}">
                                                <x-buttons.primary>
                                                    Register Now
                                                </x-buttons.primary>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                @else
                    <div class="flex items-center justify-center">
                                
                        <div class="flex flex-col items-center justify-center space-y-4 py-12 px-4 text-center">
                            <i class="fa-solid fa-calendar-days text-8xl mb-6 text-[#33333]"></i>
    
    
                            <h2 class="text-xl font-primary font-bold md:text-2xl mb-4">
                                No upcoming events
                            </h2>
                            <p class="font-secondary mx-auto mb-6">
                                Keep updated on our new events soon.
                            </p>
    
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('home') }}">
                                    <x-buttons.primary>
                                        BACK TO HOME
                                    </x-buttons.primary>
    
                                </a>
                            </div>
    
                        </div>
                    </div>
                @endif
            </div>
            
        
            
        </div>
    </x-layouts.container>
</div>

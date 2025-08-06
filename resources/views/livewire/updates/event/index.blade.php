<div>
    <x-layouts.container>
        <div class="flex items-center justify-center mt-12 py-8 md:py-12">
            <div class="w-full">
                <div class="text-center">
                    <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                        UPCOMING EVENTS
                    </h1>
                    <p class="font-secondary max-w-2xl mx-auto text-lg">Don’t Miss Out! Upcoming Events</p>
                </div>
            
                @if ($events->isNotEmpty())
                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-16">
                        @foreach($events as $event)
                            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                                <div x-data="{ showModal: false }" class="relative h-48 overflow-hidden rounded-lg">
                                    @if($event->image)
                                        <img 
                                            src="{{ asset('storage/' . $event->image) }}" 
                                            alt="{{ $event->title }}" 
                                            @click="showModal = true"
                                            class="w-full h-full object-contain cursor-pointer"
                                        >
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-[#00674F]/20 to-[#00A676]/20 flex items-center justify-center">
                                            <i class="fa-solid fa-calendar-days text-4xl text-[#00674F]/60"></i>
                                        </div>
                                    @endif

                                    <div class="absolute top-4 right-4">
                                        <span class="inline-block px-3 py-1 text-xs font-bold uppercase bg-white/95 text-[#00674F] rounded-full shadow-lg backdrop-blur-sm border border-[#00674F]/20">
                                            {{ $event->type_of_events }}
                                        </span>
                                    </div>
                                    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/30 to-transparent"></div>

                                    <div 
                                        x-show="showModal"
                                        x-transition
                                        x-cloak
                                        class="fixed inset-0 bg-black/60 flex items-center justify-center z-50"
                                    >
                                        <div class="relative max-w-4xl w-full p-4">
                                            <img 
                                                src="{{ asset('storage/' . $event->image) }}" 
                                                alt="{{ $event->title }}" 
                                                class="w-full h-auto max-h-[80vh] object-contain rounded shadow-lg"
                                            >
                                            <button 
                                                @click="showModal = false" 
                                                class="absolute top-0 right-0 cursor-pointer text-red-500 text-4xl bg-white px-2.5 py-0.5 rounded-full hover:text-red-600 transition-colors duration-200"
                                            >
                                                &times;
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="p-6">
                                    <h3 class="text-xl font-bold mb-3 group-hover:text-[#00674F] transition-colors duration-300 line-clamp-2">
                                        {{ $event->title }}
                                    </h3>
                                    
                                    <div class="mb-4">
                                        <p 
                                            class="font-secondary text-gray-600 text-sm leading-relaxed"
                                            x-data="{
                                                expanded: false,
                                                description: '',
                                                get truncated() {
                                                    return this.description.length > 120 
                                                        ? this.description.substring(0, 120) + '...' 
                                                        : this.description;
                                                },
                                                get shouldShowToggle() {
                                                    return this.description.length > 120;
                                                }
                                            }"
                                            x-init="description = {{ json_encode($event->description) }}"
                                        >
                                            <span x-show="!expanded" x-text="truncated"></span>
                                            <span x-show="expanded" x-text="description"></span>

                                            <button 
                                                x-show="shouldShowToggle" 
                                                x-on:click="expanded = !expanded"
                                                class="text-[#00674F] hover:text-[#00A676] font-medium text-xs ml-1 transition-colors duration-200"
                                            >
                                                <span x-show="!expanded">See More</span>
                                                <span x-show="expanded">See Less</span>
                                            </button>
                                        </p>
                                    </div>
                                    
                                    <div class="space-y-3 mb-6 border-t border-gray-100 pt-4">
                                        <div class="flex items-center group/item">
                                            <div class="w-8 h-8 bg-[#00674F]/10 rounded-full flex items-center justify-center mr-3 group-hover/item:bg-[#00674F]/20 transition-colors duration-200">
                                                <i class="fa-solid fa-clock text-sm text-[#00674F]"></i>
                                            </div>
                                            <span class="font-secondary text-sm text-gray-700">
                                                {{ \Carbon\Carbon::parse($event->start_at)->format('F j, Y \a\t g:i A') }}
                                            </span>
                                        </div>
                                        
                                        <div class="flex items-center group/item">
                                            <div class="w-8 h-8 bg-[#00674F]/10 rounded-full flex items-center justify-center mr-3 group-hover/item:bg-[#00674F]/20 transition-colors duration-200">
                                                <i class="fa-solid fa-location-dot text-sm text-[#00674F]"></i>
                                            </div>
                                            <span class="font-secondary text-sm text-gray-700 ">
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
                        @endforeach          
                    </div>
                    
                    <div class="flex justify-center mt-12 space-x-4">
                        @if ($hasMore)
                            <div wire:click="loadMore" class="cursor-pointer bg-white text-[#00674F] border-2 border-[#00674F] font-primary text-sm md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW MORE
                            </div>
                        @endif
                        @if ($expanded)
                            <div wire:click="showLess" class="cursor-pointer bg-white text-[#00674F] border-2 border-[#00674F] font-primary text-sm  md:text-base font-bold uppercase py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center hover:bg-[#00674F] hover:text-white transition duration-300">
                                SHOW LESS
                            </div>
                        @endif
                    </div>
                @else
                    <div class="flex items-center justify-center">
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
                    </div>
                @endif
            </div>
        </div>
    </x-layouts.container>
</div>

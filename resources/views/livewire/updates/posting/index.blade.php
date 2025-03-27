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
                                x-transition:enter="ease-out duration-300 opacity-0 scale-90"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:leave="ease-in duration-200 opacity-0 scale-90"
                                x-transition:leave-end="opacity-0 scale-95"
                                x-show="show"
                            >
                                <livewire:components.card.posting 
                                    wire:key="{{ $posting->id }}"
                                    image="{{ $posting->image }}"
                                    title="{{ $posting->title }}"
                                    description="{{ $posting->description }}"
                                    date="{{ $posting->published_at }}"
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
    @endif


</div>

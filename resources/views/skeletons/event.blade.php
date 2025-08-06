<div class="flex items-center justify-center mt-12 py-8 md:py-12">
    <x-layouts.container>

    <div>
        <div class="text-center">
            <h1 class="font-bold mb-4 text-center text-3xl md:text-4xl lg:text-5xl">
                UPCOMING EVENTS
            </h1>
            <p class="font-secondary max-w-2xl mx-auto text-lg">Curated experiences to elevate your career</p>
        </div>
    

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-16">
                @for ($i = 1; $i <= 3; $i++)

                    <div>
                        <div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <x-skeletons.item class="w-full h-48" />
                            
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 text-xs font-semibold text-primary rounded-full">
                                <x-skeletons.item class="w-16 h-4" />
                            </div>
                            
                            <div class="pt-16 pb-8 px-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">
                                    <x-skeletons.item class="w-full h-8" />
                                </h3>
                                
                                <p class="text-gray-600 mb-6 leading-relaxed">
                                    <x-skeletons.item class="w-full h-4" />
                                    <x-skeletons.item class="w-full h-4 mt-2" />
                                    <x-skeletons.item class="w-full h-4 mt-2" />
                                    <x-skeletons.item class="w-full h-4 mt-2" />
                                </p>
                                
                                <div class="space-y-3 text-sm text-gray-600 border-t border-gray-100 pt-5">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-clock text-lg mr-3 text-primary flex-shrink-0"></i>
                                        <span>
                                            <x-skeletons.item class="w-32 h-4" />
                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-location-dot text-lg mr-3 text-primary flex-shrink-0"></i>
                                        <span>
                                            <x-skeletons.item class="w-32 h-4" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center flex justify-center items-center mt-12">
                <button class="bg-white py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center ">
                    <x-skeletons.item class="h-6 w-28" />

                </button>
            </div>
        
    </div>
    
    </x-layouts.container>


    
</div>
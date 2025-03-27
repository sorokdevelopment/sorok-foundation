<div>
    <div class="flex items-center justify-center mt-12 py-8 md:py-12">
        <x-layouts.container>
            <h1 class="font-bold text-center p-4 text-2xl md:text-3xl lg:text-5xl">
                SOCIAL MEDIA POSTING
            </h1>

            <div class="mt-8" >
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" >
                    @for ($i = 0; $i <= 3; $i++)
                        <div class="relative rounded-lg overflow-hidden shadow-lg group">
                            <x-skeletons.item class="w-full h-64 bg-white" />      
                            
                        
                            <div class="absolute w-full bottom-0 p-4 text-white space-y-4">
                                <x-skeletons.item class="w-28 h-4" />
                                <x-skeletons.item class="w-full h-10" />
                                <x-skeletons.item class="w-52 2xl:w-80 h-2" />
                                <x-skeletons.item class="w-52 2xl:w-80 h-2" />
                            </div>

                            <x-skeletons.item class="w-10 h-10 rounded-full absolute bottom-3 right-3" />
                            
                        </div>
                    @endfor
                </div>

                <div class="flex justify-center mt-12 ">
                    <div class="bg-white py-2.5 w-full md:py-4 lg:w-1/2 rounded-3xl flex justify-center items-center  ">
                        <x-skeletons.item class="h-6 w-28" />
                    </div>
                </div>
            </div>
        </x-layouts.container>
    </div>


</div>

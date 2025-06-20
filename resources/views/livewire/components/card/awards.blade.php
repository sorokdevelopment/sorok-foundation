<div class="group relative flex w-full h-80 md:h-[28rem] lg:h-[32rem] overflow-hidden rounded-xl shadow-xl cursor-pointer hover:shadow-2xl transition-all duration-300">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700 ease-in-out group-hover:scale-105" 
         style="background-image: url('{{ asset('images/'. $imgName) }}');">
    </div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-100 group-hover:opacity-90 transition-opacity duration-500">
    </div>
    
    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transition-all duration-500 ease-in-out transform translate-y-0 group-hover:-translate-y-2">
        <h3 class="text-xl md:text-2xl font-bold tracking-tight drop-shadow-md">
            {{ $title }}
        </h3>
        
        <div class="mt-2 max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-700 ease-in-out">
            <p class="text-sm md:text-base font-secondary leading-relaxed">
                {{ $description }}
            </p>
        </div>

    </div>
</div>
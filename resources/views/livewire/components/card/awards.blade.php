<div class="group relative flex w-full h-80 md:h-96 overflow-hidden rounded-lg shadow-lg cursor-pointer">
    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" 
        style="background-image: url('{{ Vite::asset('public/images/'. $imgName) }}');">
    </div>

    <div class="absolute inset-0 bg-[#333333] opacity-0 group-hover:opacity-80 transition-opacity duration-500"></div>

    <div class="absolute bottom-0 w-full bg-[#00674F] text-white text-center p-4 font-bold transition-transform duration-500 ease-in-out group-hover:bg-transparent translate-y-0 group-hover:-translate-y-full">
        <h3 class="text-lg">{{ $title }}</h3>

        <div class="mt-2 group-hover:mt-4 max-h-0 overflow-hidden group-hover:max-h-32 transition-all duration-500 ease-in-out">
            <p class="text-sm font-secondary">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
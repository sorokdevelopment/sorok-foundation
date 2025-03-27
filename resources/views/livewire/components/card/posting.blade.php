<div class="relative bg-[#333333] rounded-lg overflow-hidden shadow-lg group">
    <div class="h-64 bg-cover bg-center" style="background-image: url('{{ asset('storage/'. $image) }}');"></div>


    <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/90 to-transparent"></div>

    <div class="absolute bottom-0 p-4 text-white space-y-4">
        <p class="text-sm font-secondary">{{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</p>
        <h3 class="text-lg font-bold line-clamp-2">{{ $title }}</h3>
        <p class="text-sm font-secondary line-clamp-2">
            {{ $description }}
        </p>
    </div>

    <a href="{{ $link }}" class="absolute bottom-3 right-3 bg-[#00674F] px-4 py-2 rounded-full transition transform group-hover:scale-110">
        <i class="fa-solid fa-arrow-up-long rotate-45 text-white"></i>
    </a>
</div>

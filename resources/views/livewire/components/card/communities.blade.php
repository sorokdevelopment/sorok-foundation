
<div class="flex bg-white rounded-lg border-b-4 border-[#00674F]  flex-col justify-content items-center shadow-lg">
    <img src="{{ Vite::asset('public/images/' . $imgName ) }}" alt="{{ $title }} Image" class="w-full h-auto object-cover rounded-t-lg">

    <div class="space-y-4 py-6 px-4 md:space-y-8 md:px-8 md:py-10">
        <h2 class="text-center md:text-start font-bold text-lg  lg:text-3xl text-primary">
            {{ $title }}
        </h2>
        <p class="font-secondary text-sm lg:text-lg leading-8">
            {{ $description }}                  
        </p>
    </div>

</div>


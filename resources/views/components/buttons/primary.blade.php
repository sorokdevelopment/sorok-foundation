<button {{ $attributes->merge(['type' => 'button']) }}
    class="bg-[#00674F] hover:bg-[#005a46] focus:bg-[#004d3c] active:bg-[#004035]
           font-primary text-sm font-bold uppercase 
           text-white tracking-wide
           cursor-pointer
           py-2 px-8 md:py-3 lg:py-3.5
           w-full lg:w-auto
           rounded
           flex justify-center items-center gap-2
           transition-all duration-200 ease-in-out
           focus:outline-none focus:ring-2 focus:ring-[#00674F] focus:ring-offset-2
           shadow-md hover:shadow-lg
           disabled:opacity-70 disabled:cursor-not-allowed">
    {{ $slot }}
</button>
<button {{ $attributes->merge(['type' => 'button']) }}
    class="bg-white focus:bg-[#00674F]] hover:bg-[#fafafa] active:bg-[#00674F]]
           font-primary text-sm font-semibold uppercase border-[#00674F] border-2
           text-primary tracking-wide
           px-10 py-3 lg:py-3.5
           w-full lg:w-auto
           rounded
           flex justify-center items-center gap-2
           transition-all duration-200 ease-in-out
           focus:outline-none focus:ring-2 focus:ring-[#fafafa] focus:ring-offset-2
           shadow-md hover:shadow-lg
           disabled:opacity-70 disabled:cursor-not-allowed cursor-pointer">
    {{ $slot }}
</button>
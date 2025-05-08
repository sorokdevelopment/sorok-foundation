@props(['type', 'placeholder' => ''])

<div class="relative w-full">
    <input  
        {{ $attributes->merge(['type' => $type]) }}
        {{ $attributes->merge(['class' => 'block w-full py-2.5 px-4 text-sm pr-10 text-[#333333] bg-white border border-gray-300 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#00674F] focus:border-[#00674F] transition-all duration-200 ease-in-out hover:border-gray-400 disabled:bg-gray-100 disabled:text-gray-500 disabled:cursor-not-allowed disabled:border-gray-200']) }}
        placeholder="{{ $placeholder }}"
    />
    {{ $slot }}
</div>

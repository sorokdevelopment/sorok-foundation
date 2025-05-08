@props(['disabled' => false])

<div class="relative w-full">
    <select 
        {{ $attributes->merge(['class' => 'block w-full py-2.5 px-4 text-sm pr-10 text-[#333333] bg-white border border-gray-300 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#00674F] focus:border-[#00674F] transition-all duration-200 ease-in-out hover:border-gray-400 disabled:bg-gray-100 disabled:text-gray-500 disabled:cursor-not-allowed disabled:border-gray-200']) }}
        @if($disabled) disabled @endif
    >
        {{ $slot }}
    </select>
    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <i class="fa-solid text-sm fa-angle-down text-[#333333] {{ $disabled ? 'text-gray-400 dark:text-gray-500' : '' }}"></i>
    </div>
</div>
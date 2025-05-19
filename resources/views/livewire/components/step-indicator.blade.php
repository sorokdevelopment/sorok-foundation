<div>
    <div class="mb-8">
        <div class="mt-4 relative px-4 sm:px-8">
            <div class="absolute top-2.5 sm:top-3 left-0 w-full h-1 sm:h-1.5 bg-gray-100 rounded-full overflow-hidden shadow-inner">
                <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-[#00674F] to-[#005a46] transition-all duration-500 ease-in-out"
                    style="width: {{ ($currentStep / count($steps)) * 100 }}%;">
                </div>
            </div>
    
            <div class="relative flex justify-between">
                @foreach ($steps as $index => $step)
                    @php
                        $isActive = $step['number'] <= $currentStep;
                    @endphp

                    <div class="flex flex-col items-center group relative" wire:key="{{ $step['number'] }}">
                        <div class="relative mb-3">
                            <span @class([
                                'flex items-center justify-center rounded-full border-2 transition-all duration-300 text-[11px] sm:text-base font-semibold',
                                'w-6 h-6 sm:w-8 sm:h-8' => true,
                                'border-[#00674F] shadow-lg bg-[#00674F] text-white' => $isActive,
                                'border-gray-300 bg-white text-gray-500 group-hover:border-gray-400 group-hover:text-gray-600' => !$isActive,
                            ])>
                                {{ $step['number'] }}
                            </span>

                            <span class="absolute z-10 bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                bg-gray-800 text-white text-[10px] px-2 py-1 rounded 
                                opacity-0 group-hover:opacity-100 
                                transition-opacity duration-300 
                                block sm:hidden whitespace-nowrap">
                                {{ $step['label'] }}
                            </span>
                        </div>

                        <span @class([
                            'text-xs sm:text-sm font-medium text-center break-words max-w-[70px] hidden sm:block',
                            'text-[#00674F] font-semibold' => $isActive,
                            'text-gray-500 group-hover:text-gray-600' => !$isActive
                        ])>
                            {{ $step['label'] }}
                        </span>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

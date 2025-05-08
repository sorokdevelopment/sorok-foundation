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
                    <div class="flex flex-col items-center group" wire:key="{{ $step['number'] }}">
                        <div class="relative mb-3">
                            <span
                                @class([ 'flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 transition-all duration-300 text-base font-semibold'
                                , 'border-[#00674F] shadow-lg bg-[#00674F] text-white'=> $step['number'] <=
                                    $currentStep, 'border-gray-300 bg-white text-gray-500 group-hover:border-gray-400 group-hover:text-gray-600'=>
                                    $step['number'] > $currentStep,
                                    ])>
        
                                    {{ $step['number'] }}
                            </span>
                        </div>
        
                        <span @class([ 'text-xs font-semibold text-sm font-secondary space-x-6 text-center transition-colors duration-300' , 'text-primary'=>
                            $step['number'] <= $currentStep, 'text-gray-500 group-hover:text-gray-600'=> $step['number'] >
                                $currentStep,
                                ])>
        
                                {{-- {{ $step['label'] }} --}}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

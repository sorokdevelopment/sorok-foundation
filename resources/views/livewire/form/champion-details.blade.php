<div>
    <div class="h-full flex flex-col w-full px-4 mx-auto gap-8 py-12">
        <div class="text-white text-center lg:text-left">
            <h1 class="font-bold text-center w-full text-3xl md:text-5xl lg:text-6xl">
                BECOME A CHAMPION OF CHANGE
            </h1>
        </div>
        <div class="grid sm:grid-cols-3 mt-8 sm:gap-8 gap-12 grid-cols-1">
            <div class="mt-8 w-full flex justify-center">
                <x-buttons.primary wire:click="nextStep(1)">AWARENESS CHAMPION</x-buttons.primary>
        
            </div>
            <div class="mt-8 w-full flex justify-center">
                <x-buttons.primary wire:click="nextStep(2)">EMPOWERMENT CHAMPION</x-buttons.primary>
        
            </div>
            <div class="mt-8 w-full flex justify-center">
                <x-buttons.primary wire:click="nextStep(3)">SUSTAINABILITY CHAMPION</x-buttons.primary>
        
            </div>
        </div>
    </div>
</div>

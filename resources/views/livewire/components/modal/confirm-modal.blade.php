<div
    x-data="{ show: @entangle('open') }"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 flex items-center justify-center z-50 p-4"
    style="display: none;"
>
    <!-- Backdrop with blur effect -->
    <div 
        class="absolute inset-0 bg-black/60 backdrop-blur-sm"
        x-on:click="$wire.cancel()"
    ></div>

    <!-- Modal Container -->
    <div 
        x-show="show"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="relative bg-white rounded-xl shadow-xl w-full max-w-xl mx-auto overflow-hidden"
    >
        <div class="relative bg-gradient-to-r from-[#00674F] to-[#004D3A] px-6 py-4">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 bg-white/5 rounded-full translate-y-10 -translate-x-10"></div>
            

            <div class="relative">
                <h2 class="text-2xl font-bold text-white mb-1">{{ $title }}</h2>
            </div>
        </div>

        <div class="px-6 py-6">
            <p class="text-gray-600 leading-relaxed text-base">{{ $description }}</p>
            
            @if(isset($slot))
                <div class="mt-4">
                    {{ $slot }}
                </div>
            @endif
        </div>

        <div class="px-6 pb-6">
            <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">
                <x-buttons.primary wire:click="confirm" wire:loading.attr="disabled">
                    <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                    <div wire:loading.remove wire:target="confirm" class="flex items-center">
                        Confirm 
                    </div>
                    <div wire:loading wire:target="confirm" class="flex w-full justify-between items-center">
                        Processing...
                    </div>
                </x-buttons.primary>
                <button
                    wire:click="cancel"
                    wire:loading.attr="disabled"
                    class="px-6 py-3 rounded-xl bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed order-2 sm:order-1"
                >
                    <span wire:loading.remove wire:target="cancel">Cancel</span>
                    <span wire:loading wire:target="cancel" class="flex items-center justify-center">
                        Canceling...
                    </span>
                </button>

             

            </div>
        </div>

    </div>

    <style>
    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    @keyframes modalSlideOut {
        from {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        to {
            opacity: 0;
            transform: translateY(20px) scale(0.95);
        }
    }

    @keyframes backdropFadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes backdropFadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }

    button:focus-visible {
        outline: 2px solid #00674F;
        outline-offset: 2px;
        border-radius: 12px;
    }

    @media (max-width: 640px) {
        .modal-content {
            margin: 1rem;
            width: calc(100% - 2rem);
        }
    }
    </style>
</div>


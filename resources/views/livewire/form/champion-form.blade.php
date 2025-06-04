<div>

    @if ($currentStep === 0)
        <livewire:form.champion-details />
    @else
        <div class="flex justify-end items-center">

            <div class="w-full lg:max-w-[600px] bg-white rounded-xl p-2 sm:p-4 md:p-8 shadow-lg">
                <livewire:components.step-indicator 
                    :steps="$steps" 
                    :currentStep="$currentStep" 
                    :wire:key="'step-indicator-'.$currentStep"
                    class="p-8 pb-0"
                />
                
                <div class="p-1 py-4">
                    @switch($currentStep)
                        @case(1) 
                            <livewire:form.champion-membership />
                            @break
                        @case(2)
                            <livewire:form.user-info />
                            @break
                        @default 
                            <livewire:form.champion-payment />
                    @endswitch
                </div>
            </div>

        </div>
       
    @endif

    <!-- Success alert -->
    <livewire:modal.alert />
</div>



<script>
    window.addEventListener('delayed-redirect', () => {
        setTimeout(() => {
            window.location.href = '{{ route('home') }}';
        }, 3000); 
    });
</script>
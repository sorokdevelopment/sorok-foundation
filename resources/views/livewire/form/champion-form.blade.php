<div>

    @if ($currentStep === 1)
        <livewire:form.champion-details />

    @else
        <div class="flex justify-end items-center">

            <div class="w-full w-auto md:max-w-[600px] bg-white rounded-xl p-2 sm:p-4 md:p-8 shadow-lg">
                <livewire:components.step-indicator 
                    :steps="$steps" 
                    :currentStep="$currentStep" 
                    :wire:key="'step-indicator-'.$currentStep"
                    class="p-8 pb-0"
                />
                
                <div class="p-6 md:p-8 pt-4">
                    @switch($currentStep)
                        @case(2)
                            <livewire:form.champion-membership />
                            @break

                        @case(3) 
                            <livewire:form.user-info />
                            @break
                        @case(4) 
                            <livewire:form.user-address /> 
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
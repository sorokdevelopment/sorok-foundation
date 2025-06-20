<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333] ">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/event-banner.jpg') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
    </div>

            
    <livewire:form.events.event-form-submission />

    <!-- Success alert -->
    <livewire:modal.alert />
        
</x-layouts.app>
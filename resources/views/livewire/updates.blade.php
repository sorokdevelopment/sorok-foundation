<div>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/updates-banner.png') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                UPDATES
            </h1>
        </div>
    </div>

    

    <!--- VIDEO  INDEX ---->
    <livewire:updates.video.index />


    <!--- NEWSLETTER INDEX ---->
    <livewire:updates.newsletter.index lazy />



    <!--- POSTING INDEX ---->
    <livewire:updates.posting.index lazy />


</div>

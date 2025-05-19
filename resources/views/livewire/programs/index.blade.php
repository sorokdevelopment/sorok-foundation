<div>
    @if($programs->isNotEmpty())
        <div class="py-12 mt-12 space-y-20 w-full flex flex-col justify-center items-center">
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl">
                PROGRAMS
            </h1>

            @foreach($programs as $index => $program)
                @php
                    $isEven = $index % 2 === 0;
                @endphp

                <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2 {{ $isEven ? '' : 'md:grid-flow-dense' }} scroll-section">
                    <img src="{{ asset('storage/' . $program->image) }}" 
                        alt="Program Image" 
                        loading="lazy"
                        class="w-full flex justify-center {{ $isEven ? '' : 'md:col-start-2' }} rounded-lg object-cover shadow-lg image-content">
                    
                    <div class="flex flex-col items-center md:items-start h-full justify-center space-y-12 {{ $isEven ? '' : 'md:col-start-1' }} text-content">
                        <h1 class="text-center md:text-start font-bold text-xl md:text-2xl lg:text-3xl text-primary">
                            {{ strtoupper($program->title) }} 
                        </h1>
                        
                        <p class="font-secondary text-base md:text-lg lg:text-xl leading-10 ">
                            {{ $program->description }} 
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>


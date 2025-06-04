<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333] ">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/program-5.png') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                CHAMPIONS
            </h1>
        </div>
    </div>
    
  <!-- Champions Grid -->
  <div class="py-12 md:py-16 lg:py-20 space-y-16 md:space-y-24 w-full scroll-section">
    <x-layouts.container>
      <div class="mx-auto px-4">
        <div class="text-center mb-12">
          <h1 class="font-bold text-4xl lg:text-5xl text-center">Celebrating Excellence</h1>
          <p class="mt-8 text-center font-secondary text-base md:text-lg lg:text-xl leading-relaxed">
            These remarkable leaders are making a tangible difference in our communities and beyond.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
          <!-- Awareness Champion -->
          <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Php 100 / Monthly</span> 
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <div>
                  <h3 class="text-2xl sm:text-3xl font-bold mb-4">Awareness Champion</h3>
                </div>
              </div>
              <blockquote class="italic flex justify-center text-center mb-6 p-2 text-sm items-center font-medium bg-[#00674F]/10 text-primary rounded">
              "Change starts with me, and I inspire others to do the same."
              </blockquote>
              <div class="space-y-4 mb-8">
                <p class="leading-relaxed">
                    Inspire care and concern in the Philippines. Become an Awareness Champion.
                </p>
                <p class="leading-relaxed">
                    For students, young professionals, or first-time donors who want to give consistently, stay informed, and grow as advocates for change.
                </p>
              </div>
              <livewire:form.membership.awareness />
            </div>
          </div>

          <!-- Empowerment Champion -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Php 1,000 / Monthly</span> 
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <div>
                  <h3 class="text-2xl sm:text-3xl font-bold mb-4">Empowerment Champion</h3>
                </div>
              </div>
              <blockquote class="italic flex justify-center text-center mb-6 p-2 items-center  text-sm font-medium bg-[#00674F]/10 text-primary rounded">
                "Lifting lives, creating opportunities, and inspiring hope."
              </blockquote>
              <div class="space-y-4 mb-8">
                <p class="leading-relaxed">
                    Break the cycle of helplessness. Become an Empowerment Champion.
                </p>
                <p class="leading-relaxed">
                    For active professionals and socially conscious individuals who want to both donate and get directly involved through volunteering.
                </p>
              </div>
              <livewire:form.membership.empowerment />
            </div>
          </div>


          <!-- Sustainability Champion -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Php 10,000 / Monthly</span> 
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <div>
                  <h3 class="text-2xl sm:text-3xl font-bold mb-4">Sustainability Champion</h3>
                </div>
              </div>
              <blockquote class="italic flex justify-center text-center mb-6 p-2 items-center  text-sm font-medium bg-[#00674F]/10 text-primary rounded">
                "I plant seeds for lasting change."
              </blockquote>
              <div class="space-y-4 mb-8">
                <p class="leading-relaxed">
                    End dependence. Create sustainable change. Become a Sustainability Champion.
                </p>
                <p class="leading-relaxed">
                    For business owners, philanthropic individuals, or corporate leaders ready to make a long-term, high-impact investment in social change.
                </p>
              </div>
              <livewire:form.membership.sustainability />
            </div>
          </div>
          
        </div>
      </div>
    </x-layouts.container>

  </div>


  <!-- Impact Stats -->

    <div class="py-16 bg-[#00674F] text-[#333333]">
      <!-- CTA div -->
      <x-layouts.container>

        <div>
            <div class="mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto bg-white rounded-lg p-8 md:p-12 shadow-sm">
                    <h2 class="mt-8 font-bold text-2xl lg:text-4xl">Join Our Movement</h2>
                    <p class="font-secondary text-base md:text-lg lg:text-xl leading-8 lg:leading-10 mt-8">
                      Whether you're a potential champion or supporter, your contribution matters.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center mt-8 gap-4">
                        <x-buttons.primary>
                            <a href="#">
                                Nominate a Champion
                            </a>
                        </x-buttons.primary>
                  
                    </div>
                </div>
            </div>
        </div>
      </x-layouts.container>


    </div>


  

</x-layouts.app>

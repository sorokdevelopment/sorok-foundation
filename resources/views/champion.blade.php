<x-layouts.app>
    <div class="relative w-full h-[50vh] xl:h-[70vh] bg-[#333333] ">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/champion-banner.jpg') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                CHAMPIONS FOR CHANGE
            </h1>
        </div>
    </div>
    
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
          
          <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Awareness Champion</span> 
            </div>
            <div class="p-6">
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

        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Empowerment Champion</span> 
            </div>
            <div class="p-6">
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


        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="h-48 bg-[#00674F] flex items-center justify-center">
              <span class="text-3xl sm:text-4xl text-center font-bold text-white ">Sustainability Champion</span> 
            </div>
            <div class="p-6">
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



    <div class="py-16">
      <x-layouts.container>
        <div class="relative text-center bg-gradient-to-br from-[#00674F] via-[#00674F]/95 to-[#00674F]/80 rounded-3xl p-8 md:p-16 text-white overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="absolute bottom-0 left-0 w-20 h-20 bg-white/5 rounded-full translate-y-10 -translate-x-10"></div>
          
          <div class="relative z-10 max-w-4xl mx-auto">
              <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center mx-auto mb-8">
                  <i class="fas fa-heart text-4xl text-white"></i>
              </div>

              <h1 class="font-bold text-4xl lg:text-5xl text-white mb-6 text-center tracking-tight">
                  Join Our Movement
              </h1>
              
              <div class="mx-auto space-y-6 text-white">
                <p class="mt-8 text-center text-base md:text-lg lg:text-xl leading-relaxed">
                  Whether you're a potential champion or supporter, your contribution matters.
                </p>
                
              </div>

              <div class="flex flex-col sm:flex-row justify-center mt-8 gap-4">
                    <x-buttons.secondary>
                        <a href="{{ route('home') }}">
                            Nominate a Champion
                        </a>
                    </x-buttons.secondary>

                </div>
          </div>
        </div>
      </x-layouts.container>


    </div>


  

</x-layouts.app>

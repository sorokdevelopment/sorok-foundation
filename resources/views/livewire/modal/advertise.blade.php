<div x-data="{ showModal: @entangle('showModal'), selectedTab: 'awareness' }">
  <!-- Backdrop -->
  <div x-show="showModal"
       x-transition.opacity.duration.300ms
       class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center px-4 py-8">
    
    <!-- Modal -->
    <div x-show="showModal"
         x-transition.scale.duration.300ms
         @click.outside="showModal = false"
         class="bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-3xl border border-gray-200">

      <!-- Header with Image -->
      <div class="relative bg-gradient-to-tr from-[#00674F] to-[#00A896] text-white p-6 sm:p-8">
        <div class="absolute top-4 right-4">
          <button @click="showModal = false" class="text-white/80 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="text-center">
          <h2 class="text-3xl font-bold">Meet Our Champions</h2>
          <p class="mt-2 text-sm text-white/90">Support the people shaping tomorrow</p>
        </div>
      </div>

      <!-- Tabs -->
      <div class="bg-white px-6 pt-6">
        <nav class="flex space-x-2 justify-center mb-4">
          <template x-for="tab in ['awareness', 'empowerment', 'sustainability']" :key="tab">
            <button
              :class="selectedTab === tab ? 'bg-[#00674F] text-white' : 'bg-gray-100 text-gray-700'"
              class="px-4 py-2 rounded-full text-sm font-medium transition"
              @click="selectedTab = tab"
              x-text="tab.charAt(0).toUpperCase() + tab.slice(1)">
            </button>
          </template>
        </nav>
      </div>

      <!-- Content -->
      <div class="px-6 pb-6" x-show="selectedTab === 'awareness'">
        <div class="flex flex-col sm:flex-row gap-6 items-center">
          <img src="{{ asset('images/banner-2.jpg') }}" 
            alt="Champion"
            class="rounded-xl shadow-md w-40 h-40 object-cover">
          <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Awareness Champion</h3>
            <ul class="space-y-2 text-sm text-gray-600">
              <li class="flex items-start">
                <i class="fa-solid fa-circle-check text-primary mt-2 mr-2 sm:mr-4"></i>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, magnam!
              </li>
              <li class="flex items-start">
                <i class="fa-solid fa-circle-check text-primary mt-2 mr-2 sm:mr-4"></i>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              </li>
              <li class="flex items-start">
                <i class="fa-solid fa-circle-check text-primary mt-2 mr-2 sm:mr-4"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolores! Vel, cum natus.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Placeholder for other tabs -->
      <div class="px-6 pb-6" x-show="selectedTab === 'empowerment'" x-cloak>
        <p class="text-gray-600">Empowerment tab content goes here...</p>
      </div>
      <div class="px-6 pb-6" x-show="selectedTab === 'sustainability'" x-cloak>
        <p class="text-gray-600">Sustainability tab content goes here...</p>
      </div>

      <!-- Footer -->
      <div class="bg-gray-50 p-6 flex flex-col sm:flex-row justify-between items-center">
        <div class="text-center sm:text-left">
          <h4 class="text-gray-800 font-semibold">Join us in making a difference</h4>
          <p class="text-sm text-gray-500">Your support goes a long way</p>
        </div>
        <button class="mt-4 sm:mt-0 bg-[#00674F] hover:bg-[#005a43] text-white px-5 py-2 rounded-lg text-sm font-medium transition">
          Donate Now
        </button>
      </div>
    </div>
  </div>
</div>

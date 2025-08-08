<nav x-cloak
    x-data="{
        open: false,
        scrolled: false,
        activeDropdown: null,
        init() {
            const hero = document.querySelector('header');
            if (hero) {
                new IntersectionObserver(([entry]) => {
                    this.scrolled = !entry.isIntersecting;
                }, { threshold: 0.1 }).observe(hero);
            } else {
                this.checkScroll();
                window.addEventListener('scroll', () => this.checkScroll(), { passive: true });
            }
        },
        checkScroll() {
            this.scrolled = window.scrollY > 0.1;
        },
    }"
    :class="{
        'bg-white shadow-md': scrolled,
        'bg-transparent shadow-none': !scrolled
    }"
    class="z-49 fixed top-0 left-0 right-0 transition-all w-full flex items-center h-24 lg:h-28"
>
    @php
        $menuItems = [
            [
                'label' => 'HOME',
                'route' => 'home'
            ],
            [
                'label' => 'ABOUT US',
                'route' => 'about',
                'dropdown' => [
                    [
                        'label' => 'ABOUT US',
                        'route' => 'about'
                    ],
                    [
                        'label' => "CHAIRMAN'S CORNER",
                        'route' => 'chairman-corner'
                    ],
                    [
                        'label' => 'PROGRAMS & SERVICES',
                        'route' => 'programs-and-services'
                    ],
                    
                ]
            ],
            [
                'label' => 'CHAMPIONS FOR CHANGE',
                'route' => 'champions'
            ],
            // [
            //     'label' => 'DREAM PROJECT SCHOLARSHIP',
            //     'route' => 'project-scholarship'
            // ],
            [
                'label' => 'UPDATES',
                'route' => 'updates'
            ],
            [
                'label' => 'CONTACT US',
                'route' => 'contact-us'
            ],

        ];
    @endphp
    <x-layouts.container>
        <div class="w-auto flex items-center justify-between">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="block rounded">
                    <img 
                        :src="scrolled 
                            ? '{{ asset('images/logo-primary.png') }}' 
                            : '{{ asset('images/logo-secondary.png') }}'" 
                        alt="Website Logo" 
                        class="transition-all duration-200 w-60 lg:w-64 hover:opacity-90"
                    />
                </a>
            </div>

            <div class="items-center justify-end flex-1 hidden 2xl:flex">
                <ul class="flex justify-center items-center 2xl:space-x-8">
                    @foreach ($menuItems as $index => $item)
                        <li class="flex justify-center items-center text-center relative group" x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                            @if(isset($item['dropdown']))
                                <div class="px-3 py-2 text-xs font-primary font-bold tracking-wide transition-colors hover:border-[#00674F] hover:text-primary
                                    {{ request()->routeIs($item['route']) || request()->routeIs(collect($item['dropdown'])->pluck('route')->toArray()) ? 'text-primary border-b-2 border-[#00674F]' : '' }}"
                                    :class="{'text-white border-white': !scrolled}">
                                    {{ $item['label'] }}
                                    <i class="fa-solid fa-chevron-down ml-1 transition-transform duration-200" :class="{ 'transform rotate-180': isOpen }"></i>
                                </div>
                                
                                <ul x-show="isOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-1"
                                    class="absolute top-full left-0 w-56 bg-white shadow-xl z-50">
                                    @foreach($item['dropdown'] as $dropdownItem)
                                        <li>
                                            <a href="{{ route($dropdownItem['route']) }}" 
                                            class="block p-4 text-xs font-primary border-b border-b-gray-300 font-bold tracking-wide hover:bg-[#00674F] hover:text-white
                                            {{ request()->routeIs($dropdownItem['route']) ? 'bg-[#00674F] text-white' : '' }}">
                                                {{ $dropdownItem['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a href="{{ route($item['route']) }}" 
                                    class="px-3 py-2 text-xs font-primary font-bold tracking-wide transition-colors hover:border-[#00674F] hover:text-primary
                                    {{ request()->routeIs($item['route']) ? 'text-primary border-b-2 border-[#00674F]' : '' }}"
                                    :class="{'text-white border-white': !scrolled}">
                                    {{ $item['label'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex items-center justify-end">
                <button @click="open = true" 
                        class="p-2 rounded block 2xl:hidden hover:bg-gray-50"
                        :class="{'': scrolled, 'bg-white': !scrolled}">
                    <span class="sr-only">Open menu</span>
                    <img src="{{ asset('images/menu-bar.png') }}" alt="menu bar" class="w-auto h-6">
                </button>
            </div>
        </div>

        <div x-show="open" 
            x-transition:enter="transition-opacity ease-linear duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-40 bg-black opacity-50 2xl:hidden"
            x-cloak>
        </div>

        <div x-show="open"
            @click.away="open = false"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-y-0 right-0 z-50 block max-w-full overflow-y-auto bg-white shadow-xl 2xl:hidden w-80"
            x-cloak>
            
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <a href="{{ route('home') }}" class="block rounded">
                    <img src="{{ asset('images/logo-primary.png') }}" alt="Logo" class="h-14">
                </a>
                <button @click="open = false" class="p-2 hover:text-[#333333]">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <div class="py-8 space-y-6">
                @foreach ($menuItems as $index => $item)
                    <div class="space-y-2" x-data="{ isOpen: false }">
                        @if(isset($item['dropdown']))
                            <button 
                                @click="isOpen = !isOpen"
                                class="flex items-center px-6 justify-between w-full py-2 text-base font-bold uppercase tracking-wide">
                                <span>{{ $item['label'] }}</span>
                                <i class="fa-solid fa-chevron-down text-sm transition-transform duration-200" :class="{ 'transform rotate-180': isOpen }"></i>
                            </button>
                            
                            <div x-show="isOpen" x-collapse class="space-y-4 bg-gray-100 ">
                                @foreach($item['dropdown'] as $dropdownItem)
                                    <a 
                                        href="{{ route($dropdownItem['route']) }}" 
                                        class="block px-8 py-4 text-sm font-semibold uppercase tracking-wide hover:text-primary {{ request()->routeIs($dropdownItem['route']) ? 'text-primary' : '' }}"
                                    >
                                        {{ $dropdownItem['label'] }}
                                    </a>
                                    
                                @endforeach
                            </div>
                        @else
                            <a 
                                href="{{ route($item['route']) }}" 
                                class="block px-6 py-2 text-base font-bold uppercase tracking-wide hover:text-primary {{ request()->routeIs($item['route']) ? 'text-primary' : '' }}">
                                {{ $item['label'] }}
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </x-layouts.container>
</nav>
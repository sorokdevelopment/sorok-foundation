<nav x-cloak
    x-data="{
        open: false,
        scrolled: false,
        init() {
            const hero = document.querySelector('#hero, .hero, header');
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
            this.scrolled = window.scrollY > 50;
        }
    }"
    :class="{
        'bg-white shadow-md': scrolled, 
        'bg-transparent': !scrolled
    }"
    class="fixed top-0 left-0 z-50 transition-all duration-300  w-full flex items-center h-24 lg:h-28"
>

    <x-layouts.container>

        <div class="w-auto flex items-center justify-between">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="block rounded focus:outline-none focus:ring-2 focus:ring-[#00674F]">
                    <img 
                        :src="scrolled 
                            ? '{{ asset('images/logo-primary.png') }}' 
                            : '{{ asset('images/logo-secondary.png') }}'" 
                        alt="Website Logo" 
                        class="transition-all duration-200 w-60 lg:w-64 hover:opacity-90"
                        x-ref="logo"
                        x-init="() => { $refs.logo.style.opacity = 1; }"
                        style="opacity: 0"
                    >
                </a>
            </div>

            <div class="items-center justify-end flex-1 hidden 2xl:flex">
                <ul class="flex space-x-4 justficy-center items-center 2xl:space-x-6">
                    @php
                        $links = [
                            'home' => 'HOME',
                            'about' => 'ABOUT',
                            'programs-and-services' => 'PROGRAMS & SERVICES',
                            'chairman-corner' => "CHAIRMAN'S CORNER",
                            'updates' => 'UPDATES',
                            'contact-us' => 'CONTACTS',
                            'champions' => 'CHAMPIONS'
                        ];
                    @endphp
                    @foreach ($links as $route => $label)
                        <li class="flex justify-center items-center text-center">
                            <a href="{{ route($route) }}" 
                                class="px-3 py-2 text-sm font-primary font-bold tracking-wide transition-colors hover:border-[#00674F] hover:text-[#00674F]
                                {{ request()->is($route) ? 'text-[#00674F] border-b-2 border-[#00674F]' : '' }}"
                                :class="{'text-white border-white': !scrolled}">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex items-center justify-end">
                <button @click="open = true" 
                        class="p-2 rounded block 2xl:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500"
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
                <img src="{{ asset('images/logo-primary.png') }}" alt="Logo" class="h-14">
                <button @click="open = false" class="p-2 hover:text-[#333333]">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <div class="px-6 py-8 space-y-6">
                @foreach ($links as $route => $label)
                    <a href="{{ route($route) }}" 
                    class="block px-3 py-2 text-base font-bold uppercase tracking-wide
                            {{ request()->is($route) ? 'active border-b-2 border-[#00674F]' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </x-layouts.container>

</nav>

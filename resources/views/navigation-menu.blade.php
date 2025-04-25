<x-layouts.container>
    <nav x-data="{ open: false }" class="relative flex items-center justify-between h-20 lg:h-28">
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}" class="block rounded focus:outline-none focus:ring-2 focus:ring-[#00674F]">
                <img src="{{ Vite::asset('public/images/logo-primary.png') }}" alt="Website Logo" 
                     class="transition-opacity w-44 lg:w-56 hover:opacity-90">
            </a>
        </div>

        <div class="items-center justify-center flex-1 hidden xl:flex">
            <ul class="flex space-x-4 2xl:space-x-8">
                @php
                    $links = [
                        'home' => 'HOME',
                        'about' => 'ABOUT',
                        'programs-and-services' => 'PROGRAMS & SERVICES',
                        'chairman-corner' => "CHAIRMAN'S CORNER",
                        'updates' => 'UPDATES'
                    ];
                @endphp
                
                @foreach ($links as $route => $label)
                    <li>
                        <a href="{{ route($route) }}" 
                           class="px-3 py-2 text-sm font-primary font-bold tracking-wide transition-colors hover:text-[#00674F]
                                  {{ request()->is($route) ? 'active border-b-2 border-[#00674F]' : '' }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="flex items-center space-x-4">
            @auth
                <div class="relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition rounded-full focus:outline-none focus:ring-2 focus:ring-[#00674F]">
                                    <img class="object-cover rounded-full size-8" 
                                         src="{{ Auth::user()->profile_photo_url }}" 
                                         alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium transition hover:text-primary-600 focus:outline-none focus:ring-2 focus:ring-[#00674F]">
                                    {{ Auth::user()->name }}
                                    <svg class="ml-1 size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <div class="block px-4 py-2 text-xs tracking-wider uppercase">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}" class="hover:bg-gray-50">
                                <i class="mr-2 fas fa-user-circle"></i> {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}" class="hover:bg-gray-50">
                                    <i class="mr-2 fas fa-key"></i> {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" 
                                                 @click.prevent="$root.submit();"
                                                 class="text-red-600 hover:bg-red-50">
                                    <i class="mr-2 fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
            @guest
                <div class="hidden xl:block">
                    <x-buttons.primary>
                        <a href="{{ route('login') }}" class="w-full">
                            Login
                        </a>
                    </x-buttons.primary>
                </div>
            @endguest

            <button @click="open = true" 
                    class="p-2 text-gray-700 rounded-md xl:hidden hover:text-primary-600 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <span class="sr-only">Open menu</span>
                <img src="{{ Vite::asset('public/images/menu-bar.png') }}" alt="menu bar" class="w-auto h-6">
            </button>
        </div>

        
        <div x-show="open" 
             x-transition:enter="transition-opacity ease-linear duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-40 bg-[#333333] bg-opacity-50 xl:hidden"
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
             class="fixed inset-y-0 right-0 z-50 block max-w-full overflow-y-auto bg-white shadow-xl xl:hidden w-80"
             x-cloak>
            
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <img src="{{ Vite::asset('public/images/logo-primary.png') }}" alt="Logo" class="h-10">
                <button @click="open = false" class="p-2 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="px-6 py-8 space-y-6">
                @foreach ($links as $route => $label)
                    <a href="{{ route($route) }}" 
                       class="block px-3 py-2 text-base font-bold uppercase tracking-wide 
                              {{ request()->is($route) ? 'active' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>
</x-layouts.container>
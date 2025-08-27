<x-layouts.app>
    <x-layouts.container>
        <div class="min-h-screen flex items-center justify-center p-6">
            <div class="w-full max-w-lg bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                <div class="bg-[#00674F] py-4 px-6">
                    <h2 class="text-xl font-semibold text-white">Payment Complete</h2>
                </div>
                
                <div class="p-8 text-center">
                    <div class="mx-auto mb-6 flex items-center justify-center h-20 w-20 rounded-full bg-[#00674F]">
                        <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Success!</h3>
                    <p class="text-gray-600 mb-8">Your payment has been processed successfully. A receipt has been sent to your email.</p>
                    
                    <div class="flex justify-center">
                        <x-buttons.primary>

                            <a href="{{ route('home') }}">
                                Back To Main Page
                            </a>
                        </x-buttons.primary>
                    </div>
                </div>
                
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <p class="text-xs text-gray-500 text-center">
                        SOROK UNI FOUNDATION
                    </p>
                </div>
            </div>
        </div>
    </x-layouts.container>
</x-layouts.app>
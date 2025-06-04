<div id="preloader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-white">
    <div class="relative w-72 h-72 flex items-center justify-center">
        <div class="absolute w-64 h-64 bg-[#00674F] rounded-lg animate-morph"></div>
        <img src="{{ asset('images/logo-secondary.png') }}" 
             class="w-full opacity-0 animate-fadeIn" 
             alt="Logo"
             style="animation-delay: 2s;">
    </div>
    
    <div class="mt-8 text-center">
        <div class="text-xl font-semibold text-gray-800">
            <span class="inline-block animate-wave" style="animation-delay: 0.1s">L</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.2s">o</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.3s">a</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.4s">d</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.5s">i</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.6s">n</span>
            <span class="inline-block animate-wave" style="animation-delay: 0.7s">g</span>
        </div>
    </div>
</div>

<style>
    @keyframes morph {
        0% { border-radius: 20% 60% 40% 80%; transform: rotate(0deg); }
        25% { border-radius: 60% 20% 80% 40%; transform: rotate(90deg); }
        50% { border-radius: 40% 80% 20% 60%; transform: rotate(180deg); }
        75% { border-radius: 80% 40% 60% 20%; transform: rotate(270deg); }
        100% { border-radius: 20% 60% 40% 80%; transform: rotate(360deg); }
    }
    .animate-morph {
        animation: morph 4s ease-in-out infinite;
    }
    
    @keyframes fadeIn {
        to { opacity: 1; }
    }
    .animate-fadeIn {
        animation: fadeIn 0.5s ease-out forwards;
    }
    
    @keyframes wave {
        0%, 40%, 100% { transform: translateY(0); }
        20% { transform: translateY(-10px); }
    }
    .animate-wave {
        animation: wave 1.5s ease-in-out infinite;
    }
    
    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transform: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        
        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                setTimeout(() => preloader.remove(), 500);
            }, 2500);
        });
    });
</script>
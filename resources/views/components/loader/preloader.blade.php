<div id="preloader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-white/95 backdrop-blur-sm">
    <div class="flex space-x-3 mb-6">
        <div class="w-3.5 h-3.5 bg-[#00674F] rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
        <div class="w-3.5 h-3.5 bg-[#00674F]/90 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
        <div class="w-3.5 h-3.5 bg-[#00674F]/80 rounded-full animate-bounce" style="animation-delay: 0.3s"></div>
    </div>
    <p class="text-gray-700 font-medium tracking-wide animate-fadeIn">
        Loading your experience<span class="animate-pulse">...</span>
    </p>
</div>

<style>
    @keyframes bounce {
        0%, 100% { 
            transform: translateY(0); 
            opacity: 0.8;
        }
        50% { 
            transform: translateY(-12px); 
            opacity: 1;
        }
    }
    .animate-bounce {
        animation: bounce 1.2s infinite ease-in-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out both;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 0.4; }
        50% { opacity: 1; }
    }
    .animate-pulse {
        animation: pulse 1.5s infinite;
        display: inline-block;
        width: 1.2em;
        text-align: left;
    }
    
    @media (prefers-reduced-motion: reduce) {
        .animate-bounce,
        .animate-fadeIn,
        .animate-pulse {
            animation: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        
        // Add a minimum display time (1.5s) even if page loads faster
        const minDisplayTime = 700;
        const startTime = Date.now();
        
        window.addEventListener('load', () => {
            const loadTime = Date.now() - startTime;
            const remainingTime = Math.max(0, minDisplayTime - loadTime);
            
            setTimeout(() => {
                preloader.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                setTimeout(() => preloader.remove(), 500);
            }, remainingTime);
        });
        
        // Fallback in case load event doesn't fire
        setTimeout(() => {
            if (document.readyState === 'complete' && preloader) {
                preloader.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                setTimeout(() => preloader.remove(), 500);
            }
        }, 1000);
    });
</script>
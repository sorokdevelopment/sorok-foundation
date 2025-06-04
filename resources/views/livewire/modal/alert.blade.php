<div x-data="{ show: @entangle('show'), type: @entangle('type'), message: @entangle('message'), title: @entangle('title') }" x-show="show" 
    x-init="
        $watch('show', value => {
            if (value) {
                setTimeout(() => { show = false }, 3000);
            }
        })" 
    id="success-alert" class="fixed inset-0 z-100 mt-8 flex items-start justify-end right-8" style="display: none;">
    <div @class(["border-t-4 max-w-md rounded-b px-4 py-3 shadow-sm", 
        'bg-teal-100 border-teal-500 text-teal-900' => $type === 'success',
        'bg-yellow-100 border-yellow-300 text-yellow-900' => $type === 'warning',
        'bg-red-100 border-red-500 text-red-900' => $type === 'danger',
        ]) role="alert">
        <div class="flex">
            <div class="py-1">
                @if($type === 'success')
                    <i class="fa-solid fa-circle-info fill-current h-6 w-6 text-teal-500 mr-4 text-xl"></i>
                @elseif($type === 'warning')
                    <i class="fa-solid fa-circle-exclamation fill-current h-6 w-6 text-yellow-500 mr-4 text-xl"></i>
                @else
                    <i class="fa-solid fa-triangle-exclamation fill-current h-6 w-6 text-red-500 mr-4 text-xl"></i>
                @endif
            </div>
            <div>
                <p class="font-bold font-primary" x-text="title"></p>
                <p class="text-sm font-secondary" x-text="message"></p>
            </div>
        </div>
    </div>
</div>
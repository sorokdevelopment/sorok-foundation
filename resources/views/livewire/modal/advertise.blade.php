<div x-data="{ showModal: @entangle('showModal') }">
    <div x-show="showModal"
         x-transition
         class="fixed inset-0 flex items-center justify-center bg-black/70 z-50">
        <div class="bg-white p-6 rounded shadow-xl max-w-md w-full">
            <h2 class="text-lg font-bold mb-4">Welcome!</h2>
            <p class="mb-4">This modal appears only once per session.</p>
            <button @click="showModal = false"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Close
            </button>
        </div>
    </div>
</div>
<div class="flex items-center justify-center mt-28 py-4 md:py-8">
    <x-layouts.container>
        <div class="bg-white md:p-16 lg:p-24 px-4 py-8 shadow-lg rounded-lg">
            {!! str($newsletter->content)->sanitizeHtml() !!}
        </div>
    </x-layouts.container>
</div>

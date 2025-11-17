<div class="flex items-center justify-center mt-28 py-4 md:py-8">
    @section('image', asset('storage/' . $newsletter->thumbnail))
    @section('title', $newsletter->title)
    @section('description', Str::limit(strip_tags($newsletter->description), 160))

    <x-layouts.container>

        
        <div class="bg-white md:p-16 lg:p-24 px-4 py-8 shadow-lg rounded-lg">
            <img src="{{ asset('storage/' . $newsletter->thumbnail) }}" alt="Newsletter Banner" class="max-h-[500px] w-full  object-contain rounded-lg mb-8 shadow-md">
            {!! str($newsletter->content)->sanitizeHtml() !!}
        </div>
    </x-layouts.container>
</div>

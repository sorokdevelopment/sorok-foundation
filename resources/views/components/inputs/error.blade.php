@props(['errorName'])

<div>
    @error($errorName)
        <div 
            class="text-sm text-red-600 mt-1"
        >
            {{ $message }}
        </div>
    @enderror
</div>

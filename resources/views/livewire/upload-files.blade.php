<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

    <dt class="text-sm font-medium text-gray-500">
        Project {{ $selected_project_id }} Uploader
    </dt>

    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        <input type="file" wire:model="files" multiple>

        @error('files.*') <span class="error">{{ $message }}</span> @enderror

        <br>
        <br>
        <x-jet-button wire:click="saveAttachments">Upload Documents</x-jet-button>

        <div class="pt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </dd>



</div>
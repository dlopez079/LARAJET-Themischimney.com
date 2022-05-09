<div>

    <x-jet-dialog-modal wire:model="uploadFilesModal">

        <!-- Modal Header -->
        <x-slot name="title">Upload files to Project #: {{ $selected_project_id }}</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <form class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                @csrf
                <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="file" id="file" ref="file" wire:model="files">
                    @error('files.*') <span class="error">{{ $message }}</span> @enderror
                </div>
            </form>
        </x-slot>


        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click.prevent="saveAttachments">Upload File</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
<form wire:submit.prevent="save">
    <input type="file" wire:model="files" multiple>
 
    @error('files.*') <span class="error">{{ $message }}</span> @enderror

    <br>
    <br>
    <x-jet-button type="submit">Upload Documents</x-jet-button>
</form>
<div>
    <x-jet-dialog-modal wire:model="assignMechanicsModal">
        
        <!-- Modal Header -->
        <x-slot name="title">Assign Mechanic to Project #: {{ $selected_project_id }}</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <form class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                @csrf
                <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-selected_mechanic"></label>
                    <select wire:model.lazy="selected_mechanic_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-selected_mechanic" name="grid-selected_mechanic">
                        <option value="" selected>Select mechanic</option>

                        @foreach ($mechanics as $mechanic)
                        <option value="{{ $mechanic->id }}">{{$mechanic->name}}</option>
                        @endforeach

                    </select>
                    @error('selected_mechanic_id') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                </div>
            </form>
        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click.prevent="assignMechanicToThisProject">Add Mechanic(s)</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
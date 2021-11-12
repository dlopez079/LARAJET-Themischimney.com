<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

    <dt class="text-sm font-medium text-gray-500">
        Assign Mechanic
    </dt>

    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-mechanic"></label>
        <select wire:model.lazy="mechanic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="mechanic" name="mechanic">
            <option value="" selected>Select mechanic</option>
            <option value="Mechanic1">Mechanic1</option>
            <option value="Mechanic2">Mechanic2</option>
            <option value="Mechanic3">Mechanic3</option>
            <option value="Mechanic4">Mechanic4</option>
            <option value="Mechanic5">Mechanic5</option>
            <option value="Mechanic6">Mechanic6</option>
        </select>
        @error('mechanic') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
        <br>
        <br>
        <div>
            <x-jet-button wire:click="assignMechanicToThisProject">Assign Mechanic</x-jet-button>
        </div>

        <div class="pt-2">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </dd>



</div>
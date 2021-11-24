<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

    <dt class="text-sm font-medium text-gray-500">
        Assign Mechanic to Project #: {{ $selected_project_id }}
    </dt>

    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-mechanic"></label>
        <select wire:model.lazy="selected_mechanic_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="mechanic" name="mechanic">
            <option value="" selected>Select mechanic</option>

            @foreach ($mechanics as $mechanic)
            <option value="{{ $mechanic->id }}">{{$mechanic->name}}</option>
            @endforeach

        </select>
        @error('mechanic') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
        <br>
        <br>
        <x-jet-button wire:click="assignMechanicToThisProject">Add Mechanic(s)</x-jet-button> 
        <div class="pt-2">
            @if (session()->has('assignedMechanicSuccessMessage'))
                <div class="alert alert-success">
                    {{ session('assignedMechanicSuccessMessage') }}
                </div>
            @else (session()->has('noProjectSelected'))
                <div class="alert alert-failed">
                    {{ session('noProjectSelected') }}
                </div>
            @endif
        </div>      
    </dd>

</div>
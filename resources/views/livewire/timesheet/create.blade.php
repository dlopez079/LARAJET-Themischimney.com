<div>
    <!-- Modal Form for timesheet Entry ------------------------------------------------------------------------------------------------>
    <x-jet-dialog-modal wire:model="showTimesheetModal">

        <!-- Modal Header -->
        <x-slot name="title">Create Timesheet</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <!-- Form -->
            <form class="w-full max-w-sm">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    
                <div class="w-full px-5 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="activeProjects"></label>
                    <select wire:model.lazy="activeProjects" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="activeProjects" name="activeProjects">
                        <option value="" selected>Select Active Project</option>

                        @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{$project->project_name}}</option>
                        @endforeach

                    </select>
                    @error('activeProjects') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                </div>
            </form>
            
                    /**
                        Create a button. 
                           
                    */
                    <!-- Time In Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Time
                        </label>
                        <input wire:model.lazy="timeIn" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-timeIn" name="grid-timeIn" type="time" placeholder="Time In">
                    </div>

                </div>

            </form>
        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeTimesheet">Save timesheet</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>

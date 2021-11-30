<div>
    <!-- Modal Form for timesheet Entry ------------------------------------------------------------------------------------------------>
    <x-jet-dialog-modal wire:model="showTimesheetModal">

        <!-- Modal Header -->
        <x-slot name="title">Create Timesheet</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <!-- Form -->
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="activeProjects"></label>

                        <select wire:model="activeProjectSelected" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="activeProjectSelected" name="activeProjectSelected">

                            <option value="" selected>Select Active Project</option>

                            <!-- Listof projects that the user is assigned to. -->
                            @foreach ($user->projects as $project)
                                <option value="{{ $project->id }}">{{$project->project_name}}</option>
                            @endforeach 

                        </select>
                        @error('activeProjectSelected') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!--
                    Create a button for Clock in and Clock out.

                    -->
                    <div class="w-full px-5 mb-6 text-center bg-red">
                            <p> {{ $activeProjectSelected }} </p>
                        @if($user->projects = $activeProjectSelected )
                        <div class="bg-green-400">
                            <x-jet-button wire:click="timeRecordBtn" >
                                <span value="0"> {{ $btnStatus ?? 'Clock In' }} </span>
                            </x-jet-button>
                        </div>    
                        
                        @else
                        <p>Please select your assigned project.</p>
                        @endif
                    </div>
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
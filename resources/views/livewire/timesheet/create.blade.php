<div>
    <!-- Modal Form for timesheet Entry ------------------------------------------------------------------------------------------------>
    <x-jet-dialog-modal wire:model="showTimesheetModal">

        <!-- Modal Header -->
        <x-slot name="title">Create Timesheet</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="activeProjects"></label>

                        <select wire:model="activeProjectSelected" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="activeProjectSelected" name="activeProjectSelected">

                            <option value="" selected>Select Active Project</option>

                            <!-- 
                                Listof projects that the user is assigned to.
                                Prepare a for each statement that will loop through the users' assigned projects
                                If the project is active, list the active project the user is assigned to.  
                            -->
                            @foreach($user->projects as $project)
                                @if($project->status == 'Active')
                                    <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('activeProjectSelected')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--
                        Create a Summary of the project.
                    -->
                    <div class="w-full px-5 mb-6">
                        @if($activeProjectSelected)
                            <p>
                               <b>Project #:</b> {{ $project->id }}
                            </p>
                            <p>
                               <b>Site:</b> {{ $project->street }}
                            </p>
                            <p>
                               <b>Borough:</b> {{ $project->city }}
                            </p>
                        @else
                            <p>Please select your assigned project.</p>
                        @endif
                    </div>
                </div>             
            </form>


        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <div x-data="{ show: false }">
                <div 
                    x-show="show" 
                    >
                        
                </div>
                <x-jet-button 
                        @click="show = !show"
                        x-text="show ? 'Clock In' : 'Clock Out' "
                        >
                        Clock In
                </x-jet-button>
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>  
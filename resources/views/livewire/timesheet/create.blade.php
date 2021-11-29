<div>
    <!-- Modal Form for timesheet Entry ------------------------------------------------------------------------------------------------>
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Header -->
        <x-slot name="title">Create Timesheet</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <!-- Form -->
            <form class="w-full max-w-sm">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- timesheet Name Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-date">
                            Date
                        </label>
                        <input wire:model.lazy="date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-date" name="grid-date" type="date" placeholder="Enter Date">
                    </div>

                    <!-- Project Field -->
                    <!-- This project field must link to the projects table.  
                    1. () Create a drop down that will list the projects entered on the table. 
                    2. () Create an if statement that will display an extra field that will list the tasks table. 
                          Once a user selects a project, a drop down appears right after which will list the tasks assosiated with that project. -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-project">
                            Project
                        </label>
                        <input wire:model.lazy="project" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-project" name="grid-project" type="text" placeholder="Enter Project">
                    </div>
                    
                    <!-- City Field -->
                    <!-- The City Field should populate on it's own according to the project.  I will remove this once I link the project table. 
                    1. () Remove this field when project table is linked. -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            City
                        </label>
                        <input wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city" type="text" placeholder="Enter city">
                    </div>

                    <!-- Time In Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Time In
                        </label>
                        <input wire:model.lazy="timeIn" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-timeIn" name="grid-timeIn" type="time" placeholder="Time In">
                    </div>

                    <!-- Time Out Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-timeOut">
                            Time Out
                        </label>
                        <input wire:model.lazy="timeOut" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-timeOut" name="grid-timeOut" type="time" placeholder="Time Out">
                    </div>

                    <!-- Hours Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-hours">
                            Hours
                        </label>
                        <input wire:model.lazy="hours" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-hours" name="grid-hours" type="number" placeholder="Enter Hours">
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

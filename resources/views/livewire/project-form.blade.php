<div>
    <!-- Project Buttons -->
    <div class="text-center p-3 mx-auto">
        <x-jet-button wire:click="showCreateProjectModal">
            New Project
        </x-jet-button>

    </div>

    <!-- Project Card: We will insert for each statement here. ----------------------------------------------------------------------->

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">

            @foreach($projects as $project)
            <li>
                <a wire:click="$emit('showProjectCard', {{ $project->id }} ) " class="block hover:bg-gray-50">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                        <div class="min-w-0 flex-1 flex items-center">


                            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                <div class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm font-medium truncate">{{ $project->project_name }}</h3>
                                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $project->status }}</span>
                                </div>
                                <div>
                                    {{ $project->description}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Arrow display towards the end of the line. -->
                        <div>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Project Pagination -->
    <div class="py-2">
        {{ $projects->links() }}
    </div>


    <!-- Modal Form for Project Entry ------------------------------------------------------------------------------------------------>
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Header -->
        <x-slot name="title">Create Project</x-slot>
        <x-slot name="content">

            <!-- Form -->
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- Project Name Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-project-name">
                            Project Name
                        </label>
                        <input wire:model.lazy="project_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-project-name" name="grid-project-name" type="text" placeholder="New Project">
                        @error('project_name') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- 
                        General Contractor Field.
                        Create a drop down for this field that pulls data from the GC table.
                    -->
                    <!-- <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-general-contractor">
                            General Contractor
                        </label>
                        <input wire:model.lazy="general_contractor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-general-contractor" name="grid-general-contractor" type="text" placeholder="Enter General Contractor here">
                    </div> -->

                    <!-- Street Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street">
                            Street
                        </label>
                        <input wire:model.lazy="street" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-street" name="grid-street" type="text" placeholder="Enter Street">
                        @error('street') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- City Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street">
                            City
                        </label>
                        <input wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city" type="text" placeholder="Enter city">
                        @error('city') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Zip Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street">
                            Zip
                        </label>
                        <input wire:model.lazy="zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" name="grid-zip" type="text" placeholder="Enter zip">
                        @error('zip') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-description">
                            Description
                        </label>
                        <textarea wire:model.lazy="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-description" name="grid-description" type="text" placeholder="Enter description" rows="5"></textarea>
                        @error('description') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Status Field -->
                    <div class="w-full px-5 mb-6">

                        <div class="flex">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 px-2" for="grid-active">
                                Active
                            </label>
                            <input wire:model.lazy="status" id="grid-active" name="grid-active" type="radio" value="Active">

                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 px-2" for="grid-notActive">
                                Not Active
                            </label>
                            <input wire:model.lazy="status" id="grid-notActive" name="grid-notActive" type="radio" value="Not Active">
                        </div>
                        
                        <div>
                        @error('status') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Attachment Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-attachments">
                            Attachments
                        </label>
                        <input wire:model.lazy="attachments" id="grid-attachments" name="grid-attachments" type="file">
                    </div>
                </div>

            </form>
        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeProject">Save Project</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
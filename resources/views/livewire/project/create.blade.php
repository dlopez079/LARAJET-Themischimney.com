<div>
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

                    <!-- Client Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-general-contractor">
                            Client
                        </label>
                        <select wire:model.lazy="client" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-client" name="grid-client">
                            <option value="" selected>Select Client</option>
                            <option value="1" selected>Client 1</option>
                            <option value="2" selected>Client 2</option>
                            <option value="3" selected>Client 3</option>
                        </select>
                    </div>

                    <!-- Primary Contractor Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-primary-contractor">
                            Primary Contractor
                        </label>
                        <select wire:model.lazy="primary_contractor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-primary-contractor" name="grid-primary-contractor">
                            <option value="" selected>Select Primary Contractor</option>
                            <option value="1" selected>Primary Contractor 1</option>
                            <option value="2" selected>Primary Contractor 2</option>
                            <option value="3" selected>Primary Contractor 3</option>
                        </select>
                    </div>

                    <!-- General Contractor Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-general-contractor">
                            General Contractor
                        </label>
                        <select wire:model.lazy="general_contractor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="general-contractor" name="grid-general-contractor">
                            <option value="" selected>Select General Contractor</option>
                            <option value="1" selected>General Contractor 1</option>
                            <option value="2" selected>General Contractor 2</option>
                            <option value="3" selected>General Contractor 3</option>
                        </select>
                    </div>

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
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            City
                        </label>
                        <select wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city">
                            <option value=""selected>Select City</option>
                            <option value="Brooklyn">Brooklyn</option>
                            <option value="Bronx">Bronx</option>
                            <option value="Queens">Queens</option>
                            <option value="Manhattan">Manhattan</option>
                            <option value="Staten Island">Staten Island</option>
                            <option value="Long Island">Long Island</option>
                        </select>
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
                            <input wire:model="attachments" id="grid-attachments" name="grid-attachments" type="file" multiple class="pt-2">
                            @error('attachments') <span class="error">{{ $message }}</span> @enderror
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
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

                    <!-- Company Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-general-contractor">
                            Company
                        </label>
                        <select wire:model.lazy="company" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-Company" name="grid-company">
                        <option value="" selected>Select Company</option>
                            @foreach($companies as $company)
                                @if($company->type_id == 1)
                                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- Primary Contractor Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-primary-contractor">
                            Primary Contractor
                        </label>
                        <select wire:model.lazy="primary_contractor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-primary-contractor" name="grid-primary-contractor">
                            <option value="" selected>Select Primary Contractor</option>
                            @foreach($companies as $company)
                                @if($company->type_id == 2)
                                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- General Contractor Dropdown -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-general-contractor">
                            General Contractor
                        </label>
                        <select wire:model.lazy="general_contractor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="general-contractor" name="grid-general-contractor">
                            <option value="" selected>Select General Contractor</option>
                            @foreach($companies as $company)
                                @if($company->type_id == 3)
                                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                                @endif
                            @endforeach
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

                    <!-- Attachment Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-file">
                            Attachments
                        </label>
                            <input wire:model="file" id="grid-file" name="grid-file" type="file" class="pt-2">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
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

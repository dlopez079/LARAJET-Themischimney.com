<!-- Modal Form for contact Entry ------------------------------------------------------------------------------------------------>

<div>
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Title -->
        <x-slot name="title">Create Client</x-slot>

        <!-- Form Content-->
        <x-slot name="content">
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- Client / Company Name Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                            Company Name
                        </label>
                        <input wire:model.lazy="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" name="grid-name" type="text" placeholder="Company Name">
                        @error('name') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
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
                        <input wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city" type="text" placeholder="Enter city">
                        @error('city') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Zip Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Zip
                        </label>
                        <input wire:model.lazy="zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" name="grid-zip" type="text" placeholder="Enter zip">
                        @error('zip') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Contact Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-contact">
                            Contact
                        </label>
                        <input wire:model.lazy="contact" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-contact" name="grid-contact" type="text" placeholder="Enter contact">
                        @error('contact') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Phone Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                            Phone
                        </label>
                        <input wire:model.lazy="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-phone" name="grid-phone" type="text" placeholder="Enter phone">
                        @error('phone') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Email
                        </label>
                        <input wire:model.lazy="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" name="grid-email" type="text" placeholder="Enter email">
                        @error('email') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                    </div>

                    <!-- Website Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-website">
                            Website
                        </label>
                        <input wire:model.lazy="website" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-website" name="grid-website" type="text" placeholder="Enter website">
                        @error('website') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
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


                </div>

            </form>
        </x-slot>

        <!-- Form Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeContact">Save Contact</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
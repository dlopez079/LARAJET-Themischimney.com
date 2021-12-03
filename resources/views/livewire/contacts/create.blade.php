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

                    <!-- Company Fieldset -->
                    <fieldset class="w-full border p-2" id="companyFS">

                        <!-- Client / Company Name Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                                Company Name
                            </label>
                            <input wire:model.lazy="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" name="grid-name" type="text" placeholder="Company Name" required>
                            @error('name') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Type Field Drop Down-->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-companyType">
                                Type
                            </label>
                            <select wire:model.lazy="companyType" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-companyType" name="grid-companyType" type="text" placeholder="Enter companyType" required>
                                <option value=""selected>select Type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }} "> {{ $type->name }} </option>
                                @endforeach
                            @error('companyType') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Main Line Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-mainLine">
                                mainLine
                            </label>
                            <input wire:model.lazy="mainLine" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-mainLine" name="grid-mainLine" type="tel" placeholder="Enter mainLine" required>
                            @error('mainLine') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Website Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-website">
                                Website
                            </label>
                            <input wire:model.lazy="website" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-website" name="grid-website" type="url" placeholder="Enter Website (begin with https://www...)" required>
                            @error('website') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>
              
                    </fieldset>

                    <!-- Company Address Fieldset -->
                    <fieldset class="w-full border p-2" id="addressFS">

                        <!-- Street Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street">
                                Street
                            </label>
                            <input wire:model.lazy="street" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-street" name="grid-street" type="text" placeholder="Enter Street" required>
                            @error('street') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Street 2 -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street2">
                                Street 2
                            </label>
                            <input wire:model.lazy="street2" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-street2" name="grid-street2" type="text" placeholder="Enter Additional Street Info)">
                            @error('street2') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- City Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                City
                            </label>
                            <select wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city" required>
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
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip" required>
                                Zip
                            </label>
                            <input wire:model.lazy="zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" name="grid-zip" type="text" placeholder="Enter zip">
                            @error('zip') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                    </fieldset>

                    <!-- Contact Fieldset -->
                    <fieldset class="w-full border p-2" id="contactFS">

                        <!-- First Name -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-firstName">
                                First Name
                            </label>
                            <input wire:model.lazy="firstName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-firstName" name="grid-firstName" type="text" placeholder="Enter First Name" required>
                            @error('firstName') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-lastName">
                                Last Name
                            </label>
                            <input wire:model.lazy="lastName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-lastName" name="grid-lastName" type="text" placeholder="Enter Last Name" required>
                            @error('lastName') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Title -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                                Title
                            </label>
                            <input wire:model.lazy="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-title" name="grid-title" type="text" placeholder="Enter Title" required>
                            @error('title') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                                Email
                            </label>
                            <input wire:model.lazy="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" name="grid-email" type="email" placeholder="Enter email" required>
                            @error('email') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Cell Phone -->
                        <div class="w-full px-5 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cel">
                                Contact Cell Phone
                            </label>
                            <input wire:model.lazy="cel" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-cel" name="grid-cel" type="tel" placeholder="Enter cel" required>
                            @error('cel') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                        </div>

                    </fieldset>
       
                </div>

            </form>
        </x-slot>

        <!-- Form Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeContact">Save Contact</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
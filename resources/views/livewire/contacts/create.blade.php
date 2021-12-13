<!-- Modal Form for contact Entry ------------------------------------------------------------------------------------------------>

<div>
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Title -->
        <x-slot name="title">Enter Company/Contact </x-slot>

        <!-- Form Content-->
        <x-slot name="content">
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- Company Fieldset -->
                    <fieldset class="w-full border p-2" id="companyFS">

                            <!-- Name Field -->
                            <div class="w-full px-5 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                                    Name
                                </label>
                                <input wire:model.lazy="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" name="grid-name" type="text" placeholder="Enter name" required>
                                @error('name') <span class="error text-red-700 font-bold">{{ $message }}</span> @enderror
                            </div>

                            <!-- Type Field Drop Down-->
                            <div class="w-full px-5 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-companyType">
                                    Type
                                </label>
                                <select wire:model.lazy="companyType" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-companyType" name="grid-companyType" required>
                                    <option value=""selected>select Type</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }} "> {{ $type->name }} </option>
                                    @endforeach
                                </select>
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
                </div>

            </form>
        </x-slot>

        <!-- Form Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeCompany">Save Contact</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>


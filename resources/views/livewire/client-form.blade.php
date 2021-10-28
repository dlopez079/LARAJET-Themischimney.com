<div>
    <!-- Client Buttons -->
    <div class="text-center p-3 mx-auto">

        <x-jet-button wire:click="showCreateClientModal">
            New Client
        </x-jet-button>
    </div>

    <!-- Client List: We will insert for each statement here. ----------------------------------------------------------------------->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">

            @foreach($clients as $client)
            <li>

                <!-- 
                    This will create a row of clients.  The row is clickable and should ignite the showClientCard below as an action.
                    Pass the client information through the method that is going to be ignited when the user clicks on the individual client row. 
                -->
                <a wire:click="$emit('showClientCard', {{ $client->id }} )" class="block hover:bg-gray-50" type="button">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-indigo-600 truncate">
                                {{ $client->name }}
                            </p>
                            <div class="ml-2 flex-shrink-0 flex">
                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $client->status }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p class="flex items-center text-sm text-gray-500">
                                    <!-- Heroicon name: solid/users -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                    {{ $client->contact}}
                                </p>
                                <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                    <!-- Heroicon name: solid/location-marker -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    {{ $client->email }}
                                </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <!-- Heroicon name: solid/calendar -->
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <p>
                                    {{ $client->phone }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>


    </div>

    <!-- Client Pagination -->
    <div class="py-2">
        {{ $clients->links() }}
    </div>


    <!-- Modal Form for Client Entry ------------------------------------------------------------------------------------------------>

    @csrf
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Title -->
        <x-slot name="title">Create Client</x-slot>

        <!-- Form Content-->
        <x-slot name="content">
            <form class="w-full">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- Client Name Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                            Name
                        </label>
                        <input wire:model.lazy="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" name="grid-name" type="text" placeholder="New client">
                    </div>

                    <!-- Street Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-street">
                            Street
                        </label>
                        <input wire:model.lazy="street" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-street" name="grid-street" type="text" placeholder="Enter Street">
                    </div>

                    <!-- City Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            City
                        </label>
                        <input wire:model.lazy="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="grid-city" type="text" placeholder="Enter city">
                    </div>

                    <!-- Zip Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Zip
                        </label>
                        <input wire:model.lazy="zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" name="grid-zip" type="text" placeholder="Enter zip">
                    </div>

                    <!-- Contact Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-contact">
                            Contact
                        </label>
                        <input wire:model.lazy="contact" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-contact" name="grid-contact" type="text" placeholder="Enter contact">
                    </div>

                    <!-- Phone Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                            Phone
                        </label>
                        <input wire:model.lazy="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-phone" name="grid-phone" type="text" placeholder="Enter phone">
                    </div>

                    <!-- Email Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Email
                        </label>
                        <input wire:model.lazy="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" name="grid-email" type="text" placeholder="Enter email">
                    </div>

                    <!-- Website Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-website">
                            Website
                        </label>
                        <input wire:model.lazy="website" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-website" name="grid-website" type="text" placeholder="Enter website">
                    </div>

                    <!-- Description Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-description">
                            Description
                        </label>
                        <input wire:model.lazy="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-description" name="grid-description" type="text" placeholder="Enter description">
                    </div>

                    <!-- Status Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-active">
                            Active
                        </label>
                        <input wire:model.lazy="status" id="grid-active" name="grid-active" type="radio" value="Active">

                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-notActive">
                            Not Active
                        </label>
                        <input wire:model.lazy="status" id="grid-notActive" name="grid-notActive" type="radio" value="Not Active">
                    </div>

                </div>

            </form>
        </x-slot>

        <!-- Form Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storeClient">Save Client</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
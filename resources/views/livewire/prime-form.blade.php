<div>
    <!-- Project Buttons -->
    <div class="text-center p-3 mx-auto">

        <x-jet-button wire:click="showCreatePrimeModal">
            New Prime
        </x-jet-button>
    </div>

    <!-- Prime Card: We will insert for each statement here. ----------------------------------------------------------------------->
    <div>

        @foreach ($primes as $prime)
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $prime->name }}</h3>
                                <span
                                    class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $prime->status }}</span>
                            </div>
                            <p class="mt-1 text-gray-500 text-sm truncate">Street: {{ $prime->street }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">City: {{ $prime->city }} </p>
                            <p class="mt-1 text-gray-500 text-sm truncate">State: {{ $prime->state }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Zip: {{ $prime->zip }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Contact: {{ $prime->contact }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Phone: {{ $prime->phone }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Email: {{ $prime->email }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Website: {{ $prime->website }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Description: {{ $prime->Description }}
                            </p>

                        </div>

                        <!-- Image -->
                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                            alt="">
                    </div>
                    <div>
                        <div class="-mt-px flex divide-x divide-gray-200">
                            <div class="w-0 flex-1 flex">
                                <a href="mailto:{{ $prime->email }}"
                                    class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">

                                    <!-- Heroicon name: solid/mail -->
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span class="ml-3">Email</span>
                                </a>
                            </div>
                            <div class="-ml-px w-0 flex-1 flex">
                                <a href="tel:+1-{{ $prime->phone }}"
                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">

                                    <!-- Heroicon name: solid/phone -->
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span class="ml-3">Call</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        @endforeach
    </div>


    <!-- Modal Form for prime Entry ------------------------------------------------------------------------------------------------>

    @csrf
    <x-jet-dialog-modal wire:model="showModalForm">

        <!-- Modal Header -->
        <x-slot name="title">Create prime</x-slot>
        <x-slot name="content">

            <!-- Form -->
            <form class="w-full max-w-sm">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-2">

                    <!-- Prime Name Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-name">
                            Name
                        </label>
                        <input wire:model.lazy="name"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-name" name="grid-name" type="text" placeholder="New prime">
                    </div>

                    <!-- Street Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-street">
                            Street
                        </label>
                        <input wire:model.lazy="street"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-street" name="grid-street" type="text" placeholder="Enter Street">
                    </div>

                    <!-- City Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-city">
                            City
                        </label>
                        <input wire:model.lazy="city"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" name="grid-city" type="text" placeholder="Enter city">
                    </div>

                    <!-- Zip Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-zip">
                            Zip
                        </label>
                        <input wire:model.lazy="zip"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip" name="grid-zip" type="text" placeholder="Enter zip">
                    </div>

                    <!-- Contact Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-contact">
                            Contact
                        </label>
                        <input wire:model.lazy="contact"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-contact" name="grid-contact" type="text" placeholder="Enter contact">
                    </div>

                    <!-- Phone Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-phone">
                            Phone
                        </label>
                        <input wire:model.lazy="phone"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-phone" name="grid-phone" type="text" placeholder="Enter phone">
                    </div>

                    <!-- Email Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-email">
                            Email
                        </label>
                        <input wire:model.lazy="email"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-email" name="grid-email" type="text" placeholder="Enter email">
                    </div>

                    <!-- Website Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-website">
                            Website
                        </label>
                        <input wire:model.lazy="website"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-website" name="grid-website" type="text" placeholder="Enter website">
                    </div>

                    <!-- Description Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-description">
                            Description
                        </label>
                        <input wire:model.lazy="description"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-description" name="grid-description" type="text" placeholder="Enter description">
                    </div>

                    <!-- Status Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-active">
                            Active
                        </label>
                        <input wire:model.lazy="status" id="grid-active" name="grid-active" type="radio" value="Active">

                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-notActive">
                            Not Active
                        </label>
                        <input wire:model.lazy="status" id="grid-notActive" name="grid-notActive" type="radio"
                            value="Not Active">
                    </div>

                </div>

            </form>
        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click="storePrime">Save Prime</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>

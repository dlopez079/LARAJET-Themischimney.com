<div wire:model="showClientCard" class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

        <div class="mt-6 text-gray-500 text-center">
            Select Client Above to display Details.
        </div>

        <!-- Client Details Card -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">

                <!-- Display the selected Id for the client card. -->
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $selected_id }}
                </h3>

                <!-- Display the selected name for the client card. -->
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $selected_name }}
                </h3>

                <!-- Display the selected status for the client card. -->
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{ $selected_status }}
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                    <!-- Client Full Name -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $selected_name }}
                        </dd>
                    </div>

                    <!-- Client Address -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Address: 
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $selected_street }} {{ $selected_city }} {{ $selected_state }} {{ $selected_zip }}
                        </dd>
                    </div>

                    <!-- Client Email Address -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $selected_email }}
                        </dd>
                    </div>

                    <!-- Client Telephone Number -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Telephone
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Client->Phone # here
                        </dd>
                    </div>

                    <!-- Client Website Number -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Website
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Client->website # here
                        </dd>
                    </div>

                    <!-- Client Other Number -->
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Secondary Telephone
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Client->2nd Phone # here
                        </dd>
                    </div>

                    <!-- Client Description -->
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            About / Description
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Client->description here
                        </dd>
                    </div>

                    <!-- Client Attachments -->
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Attachments
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate">
                                            resume_back_end_developer.pdf
                                        </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate">
                                            coverletter_back_end_developer.pdf
                                        </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>
</div>
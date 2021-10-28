<div wire:model="showClientCard" id="clientCard" class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-6 text-gray-500 text-center pb-3">
        Select Client Above to display Details.
    </div>

    <div class="p-6 sm:px-20 bg-white">

        <!-- 
            Client Edit Card
            This card will display underneath the Client list.
        -->
        <div class="px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">

                <!-- Company Number  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Company #
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_id }}
                    </dd>
                </div>

                <!-- Company Name  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Company Name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_name }}
                        {{ $selected_status }}
                    </dd>
                </div>

                <!-- Client Address -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Site / Location
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_street}} {{ $selected_city}} {{ $selected_state }} {{ $selected_zip}}
                    </dd>
                </div>

                <!-- Client Contact  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Contact
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_contact }}
                    </dd>
                </div>

                <!-- Client Telephone  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Telephone
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_phone }}
                    </dd>
                </div>

                <!-- Client Email -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_email }}
                    </dd>
                </div>

                <!-- Client Website -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Website
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_website }}
                    </dd>
                </div>

                <!-- Client Description -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_description }}
                    </dd>
                </div>

                <!-- Upload Client Attachments. -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <livewire:upload-files></livewire:upload-files>
                </div>

                <!-- Client Attachements -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Attachments
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                        <!-- Beginning of Unordered List of Attachments -->
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">

                            <!-- 
                                Attachment 1
                                The 'For Loop' to display list of attachment should go here 
                            -->
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">

                                <div class="w-0 flex-1 flex items-center">

                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>

                                    <!-- Name of File -->
                                    <span class="ml-2 flex-1 w-0 truncate">
                                        Sketcher_Drawings.pdf
                                    </span>
                                </div>

                                <div class="ml-4 flex-shrink-0">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        Download <!-- Name of the file -->
                                    </a>
                                </div>
                            </li>

                            <!-- 
                                Attachment 1
                                The 'End of For Loop' to display list of attachment should go here 
                                The second list items should be removed after for loop is established.
                            -->
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">

                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 flex-1 w-0 truncate">
                                        submittals.pdf <!-- Name of the file -->
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
<div class="bg-white shadow overflow-hidden sm:rounded-lg">


    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">

            <!-- Project Name  -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Project name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> Project_Name >>
                        << Project -> Status >>
                </dd>
            </div>

            <!-- Primary Contractor -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Primary Contractor
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> Primary Contractor >>
                </dd>
            </div>

            <!-- Genearl Contractor -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    General Contractor
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> General Contractor >>
                </dd>
            </div>

            <!-- Client -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Client
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> client >>
                </dd>
            </div>

            <!-- Project Site -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Site / Location
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> Street, city, zip
                </dd>
            </div>

            <!-- Project Description -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Description
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    << Project -> Description >>
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti quisquam? Deleniti, provident vitae excepturi veritatis id non iure tempore atque accusantium. Iure amet voluptatem sint earum, nisi repellendus. Dignissimos.
                </dd>
            </div>

            <!-- Project Attachements -->
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Attachments
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                            <div class="w-0 flex-1 flex items-center">
                                <!-- Heroicon name: solid/paper-clip -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    Sketcher_Drawings.pdf
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
                                    submittals.pdf
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

            <div align="center">
                <x-jet-button>Upload Documents</x-jet-button>
                <x-jet-button>Back to Project List</x-jet-button>
            </div>
            
        </dl>
    </div>


</div>
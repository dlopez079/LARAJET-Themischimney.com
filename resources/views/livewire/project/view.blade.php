<div >

    <div wire:model="showProjectCard" id="projectCard">

        <div class="mt-6 text-gray-500 text-center pb-3">
            Select Client Above to display Details.
        </div>

        <div x-show="open" x-transition class="bg-white shadow overflow-hidden sm:rounded-lg">

            <!-- 
                Project details
                This card will display underneath the project list.
            -->
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">

                    <!-- Project Number  -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Project Number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $selected_project_id}}
                        </dd>
                    </div>

                    <!-- Project Name  -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Project name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $selected_project }}
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

                    <!-- Genearl Contractor NOT BEING USED RIGHT NOW-->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            General Contractor
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            << Project -> General Contractor >>
                        </dd>
                    </div>

                    <!-- Client NOT BEING USED RIGHT NOW-->
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
                            {{ $selected_street}} {{ $selected_city}} {{ $selected_state }} {{ $selected_zip}}
                        </dd>
                    </div>

                    <!-- Project Description -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $selected_description }}
                        </dd>
                    </div>

                    <!-- Mechanic L. -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Mechanic
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                            <!-- Beginning of Unordered List of Mechanics -->
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">

                                <!-- 
                            Mechanics
                            The 'For Loop' to display list of mechanics should go here.
                            -->
                                

                            </ul>

                        </dd>
                    </div>

                    <!-- File Attachments Listing -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Attachments
                        </dt>

                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                            <!-- Beginningof Unordered List of Attachments -->
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">

                                <!-- 
                            Attachment 1
                            The 'For Loop' to display list of attachment should go here.
                            -->
                                @foreach($attachments as $attachment)
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">

                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                        </svg>

                                        <!-- Name of File -->
                                        <span class="ml-2 flex-1 w-0 truncate">
                                            {{ $attachment->file_name }}
                                        </span>
                                    </div>

                                    <!-- View File Link -->
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="{{ $attachment->file_path }}" class="font-medium text-indigo-600 hover:text-indigo-500" target="_blank">
                                            View File
                                        </a>
                                    </div>
                                </li>
                                @endforeach

                            </ul>

                        </dd>
                    </div>

                </dl>
            </div>

        </div>
    </div>

</div>
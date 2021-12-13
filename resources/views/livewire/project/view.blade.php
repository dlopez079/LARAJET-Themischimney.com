<div>

    <div wire:model="showProjectCard" id="projectCard">

        <div class="mt-6 text-gray-500 text-center pb-3">
            Select Company Above to display Details.
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
                            {{ $selected_project_id }}
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
                            {{ $selected_primary_contractor }}
                        </dd>
                    </div>

                    <!-- Genearl Contractor -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            General Contractor
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $selected_general_contractor }}
                        </dd>
                    </div>

                    <!-- Company -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Company
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $selected_company }}
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

                    <!-- Assigned Mechanic Listing. -->
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Assigned Mechanics
                        </dt>

                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                            <!-- Beginning of Unordered List of Assigned Mechanics -->
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                <li class="pl-3 pr-4 py-3 flex items-center text-sm">
                                    <!-- View Button to assign mechanic -->
                                    <div>
                                        <x-jet-button wire:click="$emit('showAssignMechanicsModal', {{ $selected_project_id }} )">
                                            Assign Mechanic {{ $selected_project_id }}
                                        </x-jet-button>
                                    </div>    
                                </li>
                                
                                @if ( $assignedMechanics )
                                    @foreach ( $assignedMechanics as $assignedMechanic )
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">

                                        <div class="w-0 flex-1 flex items-center">

                                            <!-- Name of User -->
                                            <span class="ml-2 flex-1 w-0 truncate">
                                                {{ $assignedMechanic }}
                                            </span>
                                        </div>

                                        <!-- View File Link -->
                                        <div class="ml-4 flex-shrink-0">
                                            <a class="font-medium text-indigo-600 hover:text-indigo-500" target="_blank">
                                                View Profile
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif 

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

                                <li class="pl-3 pr-4 py-3 flex items-center text-sm">
                                    <!-- View Button to attach file -->
                                    <div>
                                        <x-jet-button wire:click="$emit('showUploadFilesModal', {{ $selected_project_id }} )">
                                            Attach File {{ $selected_project_id }}
                                        </x-jet-button>
                                    </div>    
                                </li>

                                @if ( $attachments )
                                    @foreach ($attachments as $attachment )
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">

                                        <div class="w-0 flex-1 flex items-center">

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
                                @endif

                            </ul>

                        </dd>
                    </div>

                </dl>
            </div>

        </div>
    </div>

</div>
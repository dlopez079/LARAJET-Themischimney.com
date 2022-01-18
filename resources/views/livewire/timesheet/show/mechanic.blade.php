<div>
    <!-- Project Buttons -->
    <div class="text-center p-3 mx-auto">

            {{-- If the current user is actively working. --}}
            @if($currentUserIsWorking)
            
            <div class="bg-red-600">
 
                <h3 class="text-white font-medium ">
                    PLEASE CLOCK OUT!!!
                </h3>
            </div>
            
            
            {{-- If the current user is not actively working --}}
            @else
            {{ $currentUserIsWorking }}
                <x-jet-button wire:click="$emit('showCreateTimesheetModal')">
                    New Timesheet
                </x-jet-button>
            @endif
        
    </div>
    <!-- timesheet Card: We will insert for each statement here. ----------------------------------------------------------------------->
    <div>
        
      <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="pt-2">
                    <div class="overflow-hidden">

                        <!-- Time Card List -->
                        
                                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                    @if ($user->timesheets)
                                    @foreach ($user->timesheets as $timesheet)
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                                            <div class="flex-1 truncate">

                                                {{-- Project Date --}}
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Project Date:
                                                    </h3>
                                                    <span
                                                        class="mt-1 text-gray-500 text-sm truncate">{{ $timesheet->date }}</span>
                                                </div>

                                                {{-- Project Name --}}
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Project Name:
                                                    </h3>
                                                    <span
                                                        class="mt-1 text-gray-500 text-sm truncate">{{ $timesheet->project->project_name }}</span>
                                                </div>

                                                

                                                {{-- Project Clock In Time --}}
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Time From:
                                                    </h3>
                                                    <span
                                                        class="mt-1 text-gray-500 text-sm truncate">{{ $timesheet->time_from }}</span>
                                                </div>

                                                {{-- Project Clock Out Time --}}
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Time To:</h3>
                                                    <span
                                                        class="mt-1 text-gray-500 text-sm truncate">{{ $timesheet->time_to }}</span>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- Clock Out Button --}}
                                        @if (!$timesheet->time_to)
                                            <div>
                                                <div class="-mt-px flex divide-x divide-gray-200">
                                                    <div class="w-0 flex-1 flex">
                                                        <a wire:click.prevent="timeTo({{ $timesheet->id }})"
                                                            href="mailto:janecooper@example.com"
                                                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 bg-red-600 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                            <span class="ml-3">Clock Out</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        <div>
                                            <div class="-mt-px flex divide-x divide-gray-200">
                                                <div class="w-0 flex-1 flex">
                                                    <span class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                        <span class="ml-3">Clocked Out</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

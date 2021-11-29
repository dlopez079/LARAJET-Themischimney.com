<div>
    <!-- Project Buttons -->
    <div class="text-center p-3 mx-auto">
   
        <x-jet-button wire:click="showCreateTimesheetModal">
            New Timesheet
        </x-jet-button>
    </div>

    <!-- timesheet Card: We will insert for each statement here. ----------------------------------------------------------------------->
    <div>

        @foreach($timesheets as $timesheet)
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $timesheet->project }}</h3>
                                {{-- <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $timesheet->status }}</span> --}}
                            </div>

                            <p class="mt-1 text-gray-500 text-sm truncate">City: {{ $timesheet->city }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Time In: {{ $timesheet->timeIn }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Time Out: {{ $timesheet->timeOut }}</p>
                            <p class="mt-1 text-gray-500 text-sm truncate">Total Hours: {{ $timesheet->hours }}</p>

                        </div>

                    </div>
                </li>

            </ul>
        @endforeach

    </div>
</div>
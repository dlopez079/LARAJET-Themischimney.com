<div>
    <!-- New contact Button -->
    <div class="text-center p-3 mx-auto">
        <x-jet-button wire:click="$emit('showCreateContactModal')">
            New Contact
        </x-jet-button>
    </div>

    <!-- contact Card: We will insert for each statement here. ----------------------------------------------------------------------->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">

            @if($contacts)
                @foreach($contacts as $contact)
                <li>
                    <a wire:click="$emit('showContactCard', {{ $contact->id }} )" class="block hover:bg-gray-50" @click="open" >
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">


                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div class="flex items-center space-x-3">
                                        <h3 class="text-gray-900 text-sm font-medium truncate">{{ $contact->contact_name }}</h3>
                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $contact->status }}</span>
                                    </div>
                                    <div>
                                        {{ $contact->description}}
                                    </div>
                                </div>
                            </div>

                            <!-- Arrow display towards the end of the line. -->
                            <div>
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            
                <p>There are no contacts in your database.</p>
            @endif
        </ul>
    </div>

    <!-- contact Pagination -->
    <div class="py-2">
        {{ $contacts->links() }}
    </div>
</div>
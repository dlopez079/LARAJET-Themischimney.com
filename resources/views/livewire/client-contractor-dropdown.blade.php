<div class="ml-3 relative">
    <x-jet-dropdown align="right" width="48">

        {{-- In this slot, we place what will trigger the viewable event. --}}
        <x-slot name="trigger">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-8 w-8 rounded-full object-cover"
                        src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </button>
            @else
                <span class="inline-flex rounded-md">

                    {{-- Button Creating the block around the Drop down Tag --}}
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                        Contact

                        {{-- Arrows indicating the dropdown menu --}}
                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </span>
            @endif
        </x-slot>

        {{-- Profile Drop down which includes a dropdown that lists profile and logout --}}
        <x-slot name="content">

            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
            </div>

            <x-jet-dropdown-link href="{{ route('contacts') }}">
                {{ __('Contact') }}
            </x-jet-dropdown-link>

            <x-jet-dropdown-link href="{{ route('prime') }}">
                {{ __('Prime') }}
            </x-jet-dropdown-link>

            <x-jet-dropdown-link href="{{ route('general_contractors') }}">
                {{ __('General Contractors') }}
            </x-jet-dropdown-link>
            
        </x-slot>
    </x-jet-dropdown>
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Render the Livewire project show component -->
            <livewire:project.show />
            
        </div>

        <div>

            <!-- Render the Livewire project edit component -->
            <livewire:project.view />
        </div>

        <!-- Rend the New Project Enter Form Modal -->
        <livewire:project.create />
       
    </div>
</x-app-layout>

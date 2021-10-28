<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:project-form></livewire:project-form>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:project-edit></livewire:project-edit>
        </div>
    </div>
</x-app-layout>

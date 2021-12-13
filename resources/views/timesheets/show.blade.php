<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timesheets') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:timesheet.show.mechanic></livewire:timesheet.show.mechanic>
        </div>

        <livewire:timesheet.create></livewire:timesheet.create>
    </div>
</x-app-layout>

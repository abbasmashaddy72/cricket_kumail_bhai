<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Teams') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.team.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.team-table')

    </x-backend.card>
</x-app-layout>

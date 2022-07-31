<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Users') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.user.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.user-table')

    </x-backend.card>
</x-app-layout>

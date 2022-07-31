<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Features') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.feature.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.feature-table')

    </x-backend.card>
</x-app-layout>

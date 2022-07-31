<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Reviews') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.review.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.review-table')

    </x-backend.card>
</x-app-layout>

<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __("FAQ's") }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.faq.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.faq-table')

    </x-backend.card>
</x-app-layout>

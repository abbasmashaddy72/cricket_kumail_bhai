<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Contact Us') }}
        </x-slot>

        @livewire('tables.backend.contact-us-table')

    </x-backend.card>
</x-app-layout>

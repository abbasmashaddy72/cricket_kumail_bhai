<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Blogs') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.blog.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.blog-table')

    </x-backend.card>
</x-app-layout>

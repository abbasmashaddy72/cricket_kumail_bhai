<x-backend.custom-form back='true'>
    <x-slot name="title">{{ __('Team') }}</x-slot>
    @if ($action == 'create')
        <form wire:submit.prevent="store">
        @elseif($action == 'edit')
            <form wire:submit.prevent="update">
            @else
                <form id="form">
    @endif
    @csrf

    @wire('debounce.200ms')
    <x-form-input name="name" label="Name" type="text" />

    <x-form-input name="qualification" label="Qualification" type="text" />

    <x-form-input name="department" label="Department" type="text" />

    <x-form-textarea name="about" label="About" required />

    <x-form-input name="experience" label="Experience(Started At)" type="date" />

    <x-backend.single-upload name="image" label="Image" />
    @endwire

    <div class="mt-3">
        @if ($action == 'create')
            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        @elseif($action == 'edit')
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        @else
        @endif
    </div>
    </form>
</x-backend.custom-form>

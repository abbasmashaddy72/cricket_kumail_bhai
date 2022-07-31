<x-backend.custom-form back='true'>
    <x-slot name="title">{{ __('Feature') }}</x-slot>
    @if ($action == 'create')
        <form wire:submit.prevent="store">
        @elseif($action == 'edit')
            <form wire:submit.prevent="update">
            @else
                <form id="form">
    @endif
    @csrf

    @wire('debounce.200ms')
    <x-form-textarea name="logo" label="Logo" type="text" />

    <x-form-input name="title" label="Title" type="text" />

    <x-form-textarea name="excerpt" label="Excerpt" required />

    <x-form-input name="link" label="Link(If NA copy & paste javascript:void(0))" type="text" />
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

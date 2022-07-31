<div class="flex flex-col">
    <label class="flex items-center">
        <input {!! $attributes->merge(['class' => 'float-left w-4 h-4 mt-1 -ml-6 bg-center bg-no-repeat border border-blue-500 rounded']) !!} type="checkbox" value="{{ $value }}" @if ($isWired())
        wire:model{!! $wireModifier() !!}="{{ $name }}"
        @endif

        name="{{ $name }}"

        @if ($checked)
            checked="checked"
        @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    @if ($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

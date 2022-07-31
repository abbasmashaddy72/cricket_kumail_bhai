<div class="@if ($type === 'hidden') hidden @else mt-2 @endif">
    <label class="block">
        <x-form-label :label="$label" />

        <input {!! $attributes->merge([
    'class' => 'block w-full px-4 py-2 text-base font-normal bg-white border rounded outline-none focus:border-blue-500 focus:shadow ' . ($label ? 'mt-1' : ''),
]) !!}
            @if ($isWired()) wire:model{!! $wireModifier() !!}="{{ $name }}"
    @else
        value="{{ $value }}" @endif
            name="{{ $name }}" type="{{ $type }}" />
    </label>

    @if ($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

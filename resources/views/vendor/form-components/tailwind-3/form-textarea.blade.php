<div class="mt-2">
    <label class="block">
        <x-form-label :label="$label" />

        <textarea @if ($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @endif

            name="{{ $name }}"

            {!! $attributes->merge(['class' => 'block w-full px-4 py-2 text-base font-normal bg-white border rounded outline-none focus:border-blue-500 focus:shadow ' . ($label ? 'mt-1' : '')]) !!}
        >@unless($isWired()){!! $value !!}@endunless</textarea>
        </label>

        @if ($hasErrorAndShow($name))
            <x-form-errors :name="$name" />
        @endif
    </div>

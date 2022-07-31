<div class="mt-2">
    <label class="block">
        <x-form-label :label="$label" />

        <select @if ($isWired()) wire:model{!! $wireModifier() !!}="{{ $name }}" @endif
            name="{{ $name }}" @if ($multiple) multiple @endif
            @if ($placeholder) placeholder="{{ $placeholder }}" @endif {!! $attributes->merge([
    'class' => ($label ? 'mt-1' : '') . ' block w-full px-4 py-2 text-base font-normal bg-white border rounded-md outline-none focus:border-blue-500 focus:shadow' . ($multiple ? 'form-multiselect' : 'form-select'),
]) !!}>

            @if ($placeholder)
                <option value="" selected hidden>
                    {{ $placeholder }}
                </option>
            @endif

            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if ($isSelected($key)) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>
    </label>

    @if ($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>

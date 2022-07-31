<div x-data class="flex flex-col p-1 mb-2">
    <x-form-input x-ref="input" type="text" name="name"
        wire:change="doTextFilter('{{ $index }}', $event.target.value)" x-on:change="$refs.input.value = ''" />
    <div class="flex flex-wrap space-x-1 max-w-48">
        @foreach ($this->activeTextFilters[$index] ?? [] as $key => $value)
            <button wire:click="removeTextFilter('{{ $index }}', '{{ $key }}')"
                class="flex items-center pl-1 m-1 space-x-1 text-xs tracking-wide text-white uppercase bg-gray-300 rounded-full hover:bg-red-600 focus:outline-none">
                <span>{{ $this->getDisplayValue($index, $value) }}</span>
                <x-icons.x-circle />
            </button>
        @endforeach
    </div>
</div>

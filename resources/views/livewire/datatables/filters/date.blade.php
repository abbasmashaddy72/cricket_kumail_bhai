<div x-data class="flex flex-col p-1 mb-2">
    <div class="relative flex w-full">
        <x-form-input x-ref="start" wire:change="doDateFilterStart('{{ $index }}', $event.target.value)"
            type="date" name="name" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.start.value=''" wire:click="doDateFilterStart('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
    <div class="relative flex items-center w-full">
        <x-form-input x-ref="end" wire:change="doDateFilterEnd('{{ $index }}', $event.target.value)" type="date"
            name="name" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.end.value=''" wire:click="doDateFilterEnd('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
</div>

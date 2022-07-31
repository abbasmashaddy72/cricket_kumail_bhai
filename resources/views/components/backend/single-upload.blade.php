@if ($this->image)
    <div class="my-4">
        <div class="mb-2">
            <label class="block">
                <x-form-label label="Uploaded Image Preview" />
                <img src="{{ $this->isUploaded ? $this->image->temporaryUrl() : url('storage/' . $this->image) }}"
                    class="mt-2" width="250" height="300">
            </label>
        </div>
    </div>
@endif

<div class="my-4">
    <div class="mb-2">
        <label class="block">
            <x-form-label :label="$label" />
            <input type="file" accept="image/*" wire:model="{{ $name }}"
                class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
        </label>
    </div>
    <x-form-errors :name="$name" />
</div>

<x-app-layout>
    <x-backend.custom-form>
        <x-slot name="title">{{ __('Permissions for ') }}{{ $data->name }}</x-slot>
        <form method='post' href="{{ route('admin.user.permissions.save', ['id' => $data->id]) }}"
            enctype="multipart/form-data">
            @csrf
            @if (!empty($data->permissions))
                @foreach ($data->permissions as $item)
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="permissions[]" value="{{ $item }}"
                            checked />
                        <span class="ml-2 capitalize">{!! str_replace(['_', '.'], ' ', $item) !!}</span>
                    </label><br>
                @endforeach
            @endif
            @foreach ($not_selected_permissions as $item)
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox" name="permissions[]" value="{{ $item }}" />
                    <span class="ml-2 capitalize">{!! str_replace(['_', '.'], ' ', $item) !!}</span>
                </label><br>
            @endforeach

            <div class="mt-3">
                <x-backend.submit-button>
                    {{ __('Update') }}
                </x-backend.submit-button>
            </div>
        </form>
    </x-backend.custom-form>
</x-app-layout>

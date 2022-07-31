<div class="w-full pb-8">
    <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
        <div class="flex flex-wrap justify-between p-6 pb-0">
            <div class="header-title">
                <h4 class="mb-2 text-2xl font-medium card-title">{{ $title }}</h4>
            </div>
            @if (!empty($addbutton))
                <div class="card-action">
                    {{ $addbutton }}
                </div>
            @endif
        </div>
        <div class="flex-auto p-6">
            {{ $slot }}
        </div>
    </div>
</div>

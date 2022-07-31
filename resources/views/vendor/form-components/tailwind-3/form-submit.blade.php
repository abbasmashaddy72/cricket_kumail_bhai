<div class="flex items-center justify-between mt-6">
    <button
        {{ $attributes->merge(['type' => 'submit','class' =>'inline-block p-2 px-6 py-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-blue-500 border border-blue-500 rounded shadow-md hover:shadow-md hover:bg-blue-600 hover:text-white']) }}>
        {!! trim($slot) ?: __('Submit') !!}
    </button>

</div>

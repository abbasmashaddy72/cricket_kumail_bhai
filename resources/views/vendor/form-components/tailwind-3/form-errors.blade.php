@error($name, $bag)
    <p {!! $attributes->merge(['class' => 'mt-1 text-red-500 text-xs italic']) !!}>
        {{ $message }}
    </p>
@enderror

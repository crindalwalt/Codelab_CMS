@props(['value'])



<label
        {{ $attributes->merge(['class' => 'block text-sm mx-2 my-2 px-4 py-4']) }}
        >
    <span class="text-gray-700 dark:text-gray-400">{{ $value ?? $slot }}</span>
    {{$slot}}
</label>

@props(['value'])



<label
        {{ $attributes->merge(['class' => 'block text-sm']) }}
        >
    <span class="text-gray-700 dark:text-gray-400">{{ $value ?? $slot }}</span>
    {{$slot}}
</label>
@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full mt-1 text-sm dark:bg-gray-700  focus:outline-none  dark:text-gray-300 form-input']) !!}>

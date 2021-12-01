@props(['value'])

<label {{ $attributes->merge(['class' => 'block dark:text-gray-200 font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

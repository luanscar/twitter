@props([
    'sm' => null,
])
@php
    $sizes = 'px-4 py-3 text-xl w-4/5 mt-6';
    if ($sm) {
        $sizes = 'py-1 px-4 w-fit text-lg';
    }
@endphp

<button {{ $attributes->class(["bg-twitter rounded-full font-extrabold  tracking-wider $sizes"]) }}>
    {{ $slot }}
</button>

@props(['active' => false])

@php
    $classes = 'block px-3 py-1 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white';

    if ($active) {
        $classes .= ' bg-blue-500 text-white pointer-events-none';
    }
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>

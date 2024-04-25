@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input {{ $attributes(['class' => 'block w-full rounded-md px-4 py-2'])}} name="{{ $name }}"
        id="{{ $name }}" value="{{ old($name) }}">

    <x-form.error name="{{ $name }}" />
</x-form.field>

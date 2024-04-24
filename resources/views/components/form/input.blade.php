@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input class="block w-full rounded-md px-4 py-2" type="{{ $type }}" name="{{ $name }}"
        id="{{ $name }}" value="{{ old($name) }}">

    <x-form.error name="{{ $name }}" />
</x-form.field>

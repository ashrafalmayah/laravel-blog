@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea class="block w-full rounded-md px-4 py-2" type="text" name="{{ $name }}" id="{{ $name }}">{{ $slot == '' ? old($name) : $slot }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>

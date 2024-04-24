@props(['name'])

<label class="my-2 block text-lg" for="{{ $name }}">{{ ucwords($slot == '' ? $name : $slot) }}</label>

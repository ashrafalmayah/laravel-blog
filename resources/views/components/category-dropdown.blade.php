<x-dropdown>
    <x-slot name="trigger">
        <button class="min-w-32 relative inline-flex w-full flex-1 py-2 pl-3 pr-9 text-sm font-semibold">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name='down-arrow' class="absolute" style="right: 12px;" />
        </button>
    </x-slot>
    <x-dropdown-item :active="!request('category')" href="/">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item :active="request('category') == $category->slug" href="/?category={{ $category->slug }}">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>

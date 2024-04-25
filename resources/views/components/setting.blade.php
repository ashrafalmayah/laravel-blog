@props(['heading'])

<h1 class="mt-12 text-center text-4xl font-bold text-gray-900">{!! $heading !!}</h1>
<div class="mx-auto mt-6 flex max-w-5xl">
    <aside class="max-w-42 mr-12 text-lg">
        <h4 class="mb-4 text-2xl font-semibold">Links</h4>

        <ul>
            <li>
                <a href="/admin/posts"
                    class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
            </li>
            <li>
                <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New
                    Post</a>
            </li>
        </ul>
    </aside>

    <main class="flex-1">
        <x-panel class="bg-gray-100">
            {{ $slot }}
        </x-panel>
    </main>
</div>

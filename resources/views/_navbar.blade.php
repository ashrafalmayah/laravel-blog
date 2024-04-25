<nav class="md:flex md:items-center md:justify-between">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 flex items-center md:mt-0">
        @auth
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="text-sm font-bold">Welcome, {{ auth()->user()->name }}!</button>
                </x-slot>

                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                <x-dropdown-item href="#" x-data @click.prevent="true"
                    @click="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
            </x-dropdown>
            <form id="logout-form" action="/logout" method="post" class="hidden">
                @csrf
            </form>
        @else
            <a href="/register" class="text-sm font-bold uppercase transition hover:text-blue-500">Register</a>
            <a href="/login" class="ml-6 text-sm font-bold uppercase transition hover:text-blue-500">Log In</a>
        @endauth

        <a href="#newsletter"
            class="ml-6 rounded-full bg-blue-500 px-5 py-3 text-xs font-semibold uppercase text-white transition hover:bg-blue-600">
            Subscribe for Updates
        </a>
    </div>
</nav>

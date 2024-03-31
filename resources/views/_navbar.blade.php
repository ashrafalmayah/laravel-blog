<nav class="md:flex md:items-center md:justify-between">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 flex items-center md:mt-0">
        @auth
            <span class="text-sm font-bold">Welcome, {{ auth()->user()->name }}!</span>
            <form action="/logout" method="post">
                @csrf
                <button class="ml-6 text-sm font-bold uppercase transition hover:text-blue-500" type="submit">Log
                    Out</button>
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

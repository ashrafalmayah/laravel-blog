<x-panel>
    @auth
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center space-x-4">
                <img src="https://i.pravatar.cc/60?u={{ auth()->user()->username }}" class="rounded-full" width="50"
                    height="50" alt="Lary avatar">
                <h3 class="text-lg font-semibold">Want to Participate?</h3>
            </header>
            <div class="mt-8">
                <textarea name="body" id="body" required
                    class="w-full rounded-md p-2 text-sm ring ring-1 ring-gray-200 focus:outline-none focus:ring focus:ring-blue-200"
                    rows="5" placeholder="Leave a Comment..."></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-6 flex justify-end border-t-2 border-gray-200 pt-6">
                <button type="submit"
                    class="rounded-full bg-blue-500 px-10 py-2 text-sm uppercase text-white hover:bg-blue-600">Post</button>
            </div>
        </form>
    @else
        <p>
            <a class="text-sm font-bold uppercase transition hover:text-blue-500" href="/register">Register</a>
            or
            <a class="text-sm font-bold uppercase transition hover:text-blue-500" href="/login">Log In</a>
            to leave a comment.
        </p>
    @endauth
</x-panel>

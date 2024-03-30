@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img class="rounded-full" src="https://i.pravatar.cc/60?u={{ $comment->author->username }}" width="60"
                height="60" alt="profile">
        </div>
        <div class="space-y-4">
            <header>
                <h3 class="text-xl font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs">Posted <time>{{ $comment->published_at->diffForHumans() }}</time></p>
            </header>
            <p>{{ $comment->body }}</p>
        </div>
    </article>
</x-panel>

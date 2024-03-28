@props(['comment'])

<article class="flex space-x-4 rounded-lg border border-gray-200 bg-gray-100 p-6">
    <div class="flex-shrink-0">
        <img class="rounded-full" src="https://i.pravatar.cc/60?u={{ $comment->id }}" width="60" height="60"
            alt="profile">
    </div>
    <div class="space-y-4">
        <header>
            <h3 class="text-xl font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs">Published <time>{{ $comment->published_at->diffForHumans() }}</time></p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>

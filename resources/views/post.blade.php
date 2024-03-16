<x-layout title="Blog | {{ $post->title }}">
    <article class="post-item">
        <h1>{{ $post->title }}</h1>
        <div class="post-links">
            <div>
                by:
                <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            </div>
            <div>
                Category:
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </div>
        </div>
        <div class="date">Published at: {{ $post->published_at }}</div>
        <p>
            {{ $post->body }}
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>

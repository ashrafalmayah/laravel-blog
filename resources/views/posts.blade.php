<x-layout title="My blog">
    @foreach ($posts as $post)
        <div class="post-item">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <div class="post-item-links">
                by
                <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </div>
            <div class="date">Published at: {{ $post->published_at }}</div>
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
    @endforeach
</x-layout>

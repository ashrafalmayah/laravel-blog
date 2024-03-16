<x-layout title="My blog">
    @foreach ($posts as $post)
        <div class="post-item">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <div class="links-list">
                Categories:
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </div>
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
    @endforeach
</x-layout>

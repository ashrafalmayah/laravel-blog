<x-layout title="My blog">
    @foreach ($posts as $post)
        <div class="post-item">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
    @endforeach
</x-layout>

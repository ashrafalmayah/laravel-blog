<x-layout title="My blog">
    @foreach ($posts as $post)
        <div class="post-item">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
    @endforeach
</x-layout>

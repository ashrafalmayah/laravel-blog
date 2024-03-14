<x-layout title="Blog | {{ $post->title }}">
    <article class="post-item">
        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->body }}
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>

<x-layout title="Blog | {{ $post->title }}">
    <article class="post-item">
        <h1>{{ $post->title }}</h1>
        {!! $post->body !!}
    </article>
    <a href="/">Go Back</a>
</x-layout>

<x-layout title="Blog | {{ $post->title }}">
    <article class="post-item">
        <h1>{{ $post->title }}</h1>
        <div class="links-list">
            by:
            <a href="/posts/{{ $post->user->name }}">{{ $post->user->name }}</a>
        </div>
        <div class="links-list">
            Categories:
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>
        <p>
            {{ $post->body }}
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>

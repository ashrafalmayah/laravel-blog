<x-layout title="Blog | {{ $post->title }}">
    <article class="post-item">
        <h1>{{ $post->title }}</h1>
        <div class="category-list">
            Categories:
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>
        <p>
            {{ $post->body }}
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>

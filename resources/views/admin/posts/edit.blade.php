@php
    $heading = '<a href="/posts/' . $post->slug . '">' . $post->title . '</a>';
@endphp

<x-layout>
    <x-setting :heading="'Edit Post: ' . $heading">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" value="{{ old('title', $post->title) }}" />
            <x-form.input name="slug" value="{{ old('slug', $post->slug) }}" />
            <div class="flex items-center">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" value="{{ old('thumbnail', $post->thumbnail) }}" />
                </div>
                <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/illustration-1.png' }}"
                    alt="Blog Post illustration" width="150" class="rounded-xl mr-8">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category_id">category</x-form.label>
                <select class="block w-full rounded-md px-4 py-2" name="category_id" id="category_id">
                    @foreach (\App\Models\Category::get() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>

<x-layout>
    <x-setting heading="Manage Posts">
        <div class="overflow-x-auto">
            <table class="min-w-full table-fixed divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-100">
                            <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                <a href="/posts/{{ $post->slug }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-500">
                                {{ $post->published_at }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                <a href="/admin/posts/{{ $post->id }}/edit"
                                    class="text-blue-500 hover:text-blue-600">Edit</a>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                <form action="/admin/posts/{{ $post->id }}" method="post" onsubmit="return confirm('Do you really want to delete this post?')" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>

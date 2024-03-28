<x-layout title="Log In">
    <main class="mx-auto mt-10 max-w-lg rounded-lg border border-gray-200 bg-gray-100 lg:mt-20">
        <h1 class="mt-6 text-center text-4xl font-bold text-gray-900">Log In</h1>
        <form method="POST" action="login">
            @csrf

            <div class="mb-4 px-8">
                <label class="my-2 block text-lg" for="email">Email</label>
                <input class="block w-full rounded-md px-4 py-2" type="email" name="email" id="email"
                    value="{{ old('email') }}">
                @error('email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 px-8">
                <label class="my-2 block text-lg" for="password">Password</label>
                <input class="block w-full rounded-md px-4 py-2" type="password" name="password" id="password">
                @error('password')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 px-8 text-center">
                <button class="rounded-lg bg-blue-500 px-8 py-3 text-lg font-bold text-white hover:bg-blue-600"
                    type="submit">Log In</button>
            </div>
        </form>
    </main>
</x-layout>

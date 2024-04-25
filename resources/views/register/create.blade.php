<x-layout title="Register">
    <main class="mx-auto mt-10 max-w-lg rounded-lg border border-gray-200 bg-gray-100 lg:mt-20">
        <h1 class="mt-6 text-center text-4xl font-bold text-gray-900">Register</h1>
        <form method="POST" action="register">
            @csrf
            <x-form.input name="name" />
            <x-form.input name="username" />
            <x-form.input type="email" name="email" />
            <x-form.input type="password" name="password" />

            <x-form.button class="text-center">Register</x-form.button>
        </form>
    </main>
</x-layout>

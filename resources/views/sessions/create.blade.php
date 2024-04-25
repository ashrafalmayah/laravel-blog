<x-layout title="Log In">
    <main class="mx-auto mt-10 max-w-lg rounded-lg border border-gray-200 bg-gray-100 lg:mt-20">
        <h1 class="mt-6 text-center text-4xl font-bold text-gray-900">Log In</h1>
        <form method="POST" action="login">
            @csrf

            <x-form.input type="email" name="email" autocomplete="username"/>
            <x-form.input type="password" name="password" autocomplete="new-password"/>

            <x-form.button class="text-center">Log In</x-form.button>
        </form>
    </main>
</x-layout>

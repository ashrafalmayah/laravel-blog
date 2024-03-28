<style>
    .flash-message {
        translate: 300%;
        animation: slide-in 300ms .3s ease forwards,
            slide-in 300ms 5s ease reverse forwards;
    }

    @keyframes slide-in {
        0% {
            translate: 300%;
        }

        100% {
            translate: 0%;
        }
    }
</style>

@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="flash-message text-md fixed bottom-3 right-3 rounded-md bg-blue-500 px-6 py-2 text-white">
        {{ session('success') }}
    </div>
@endif

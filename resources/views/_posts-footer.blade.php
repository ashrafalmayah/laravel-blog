<footer class="mt-16 rounded-xl border border-black border-opacity-5 bg-gray-100 px-10 py-16 text-center">
    <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
        <div class="relative mx-auto inline-block rounded-full lg:bg-gray-200">

            <form method="POST" id="newsletter" action="/newsletter#newsletter" class="text-sm lg:flex">
                @csrf

                <div class="flex items-center lg:px-5 lg:py-3">
                    <label for="email" class="hidden lg:inline-block">
                        <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                    </label>

                    <input id="email" name="email" type="text" value="{{ old('email') }}"
                        placeholder="Your email address"
                        class="py-2 pl-4 focus-within:outline-none lg:bg-transparent lg:py-0">
                </div>


                <button type="submit"
                    class="mt-4 rounded-full bg-blue-500 px-8 py-3 text-xs font-semibold uppercase text-white transition-colors duration-300 hover:bg-blue-600 lg:ml-3 lg:mt-0">
                    Subscribe
                </button>
            </form>
        </div>
        <div>

            @error('email')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>
</footer>

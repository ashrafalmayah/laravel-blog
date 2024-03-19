<div class="relative flex items-center rounded-xl bg-gray-100 lg:inline-flex">
    <div x-data="{ show: false }" class="w-full">
        <div @click="show = ! show">
            {{ $trigger }}
        </div>

        <div x-show="show" @click.away="show = false" style="display: none"
            class="max-h-52 absolute z-50 mt-1 w-full overflow-auto rounded-xl bg-gray-100 text-left shadow">
            {{ $slot }}
        </div>
    </div>

</div>

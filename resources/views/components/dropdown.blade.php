<div {{ $attributes(['class' => 'relative flex items-center rounded-xl lg:inline-flex']) }}>
    <div x-data="{ show: false }" class="w-full">
        <div @click="show = ! show">
            {{ $trigger }}
        </div>

        <div x-show="show" @click.away="show = false" style="display: none"
            class="absolute z-50 mt-1 max-h-52 w-full overflow-auto rounded-xl bg-gray-100 text-left shadow">
            {{ $slot }}
        </div>
    </div>

</div>

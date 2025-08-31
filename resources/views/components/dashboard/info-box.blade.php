<div class="border-gray-300 rounded-lg dark:border-gray-600 h-40 md:h-40">
    <div class="max-w-sm h-full p-5 rounded-xl text-white shadow-lg {{ $background }}">
        <!-- Título -->
        <h3 class="text-sm font-medium mb-4">{{ $title }}</h3>

        <div class="flex items-center justify-between">
            <!-- Ícone -->
            <div class="p-3 bg-white/20 rounded-lg">
                {!! $icon !!}
            </div>

            <!-- Valor + Data -->
            <div class="text-right">
                <p class="text-3xl font-bold">{{ $value }}</p>
                <p class="text-xs text-white/80">{{ $date }}</p>
            </div>
        </div>
    </div>
</div>

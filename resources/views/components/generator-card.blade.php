<div class="w-full lg:w-1/4 min-w-min px-1 pb-2">
    <div class="widget w-full h-full p-4 rounded-lg bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-800">
        <div class="flex flex-row items-center justify-center">
            <div class="flex flex-col text-center">
                <div class="text-xl uppercase font-bold">
                    {{ $title }}
                </div>
                <div class="text-xs text-gray-500">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-solid border-b-2 pb-6 mb-4">
    <div class="flex w-full pb-4">
        <h3 class="lg:w-1/3 text-3xl font-bold pr-4">
            {{ $title }}
        </h3>
        <p class="lg:w-2/3 text-sm text-gray-500 pt-2">
            {{ $description }}
        </p>
    </div>
    <div class="flex flex-wrap justify-start items-stretch content-start">
        {{ $slot }}
    </div>
</div>

<div class="flex w-full justify-center items-center pb-4">
    <h3 class="lg:w-1/3 text-3xl font-bold pr-4">
        {{ $category->title }}
    </h3>
    <p class="lg:w-2/3 text-sm text-gray-500">
        {{ $category->description }}
    </p>
</div>
<div class="flex flex-wrap justify-start items-stretch content-start">
    {{ $slot }}
</div>

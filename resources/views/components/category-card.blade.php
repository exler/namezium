<div class="border-solid border-2 p-2 rounded-md mb-2 transition-all hover:border-indigo-900">
    <a href="{{ route('category', $category->slug) }}" class="flex w-full items-center justify-center">
        <h3 class="lg:w-1/3 text-2xl font-bold">
            {{ $category->title }}
        </h3>
        <p class="lg:w-2/3 text-sm text-gray-700 truncate">
            {{ $category->description }}
        </p>
    </a>
</div>

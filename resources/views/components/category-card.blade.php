<div class="border-solid border-2 p-2 rounded-md mb-2 transition-all hover:border-indigo-900">
    <a href="{{ url('/' . $category->slug) }}" class="flex w-full">
        <h3 class="lg:w-1/4 text-2xl font-bold pr-4">
            {{ $category->title }}
        </h3>
        <p class="lg:w-3/4 text-sm text-gray-700 pt-2">
            {{ $category->description }}
        </p>
    </a>
</div>

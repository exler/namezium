<x-app-layout>
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render("category", $category) }}
    </x-slot>

    <div id="generators">
        <x-generator-category :category="$category">
            @forelse ($category->generators as $generator)
            <x-generator-card :generator="$generator" :category="$category" />
            @empty
            <p>No generators are available for this category yet!</p>
            @endforelse
        </x-generator-category>
    </div>
</x-app-layout>

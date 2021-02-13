<x-app-layout>
    <div id="generators">
        <x-generator-category :category="$category">
            @forelse ($category->generators as $generator)
            <x-generator-card :generator="$generator" :category="$category" />
            @empty
            <p>No categories added yet!</p>
            @endforelse
        </x-generator-category>
    </div>
</x-app-layout>

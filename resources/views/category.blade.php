<x-app-layout>
    <div id="generators">
        <x-generator-category :category="$category">
            @foreach ($category->generators as $generator)
            <x-generator-card :generator="$generator" :category="$category" />
            @endforeach
        </x-generator-category>
    </div>
</x-app-layout>

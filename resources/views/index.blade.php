<x-app-layout>
    <div id="categories">
        @foreach ($categories as $category)
        <x-category-card :category="$category" />
        @endforeach
    </div>
    <div id="pagination">
        {{ $categories->links() }}
    </div>
</x-app-layout>

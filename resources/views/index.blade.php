<x-app-layout>
    <div id="categories">
        @forelse ($categories as $category)
        <x-category-card :category="$category" />
        @empty
        <p>No categories added yet!</p>
        @endforelse
    </div>
    <div id="pagination">
        {{ $categories->links() }}
    </div>
</x-app-layout>

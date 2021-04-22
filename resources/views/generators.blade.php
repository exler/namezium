<x-app-layout>
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render("search") }}
    </x-slot>

    @if ($query)
    <div id="name-details" class="text-center mb-4 border-solid border-b-2 pb-2">
        <h2 class="text-xl font-bold">Search results for: '{{ $query }}'</h2>
    </div>
    @endif
    <div id="search-results">
        <div class="flex flex-wrap justify-start items-stretch content-start">
            @forelse ($generators as $generator)
            <x-generator-card :generator="$generator" />
            @empty
            <p>No results for this search query! Please try searching using other keywords.</p>
            @endforelse
        </div>
    </div>
    <div id="pagination">
        {{ $generators->links() }}
    </div>
</x-app-layout>

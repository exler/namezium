<x-app-layout>
    <x-admin-tabs />

    <div>
        <form method="POST" action="{{ route('generator.store') }}">
            @csrf

            <div>
                <x-label for="title">Title</x-label>
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="description">Description</x-label>
                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" required />
            </div>
            <div class="mt-4">
                <x-label for="categories">Categories</x-label>
                <x-select id="categories" class="block mt-1 w-full" name="category_id" required>
                    @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @empty
                    <option disabled>No categories available!</option>
                    @endforelse
                </x-select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    Submit
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
